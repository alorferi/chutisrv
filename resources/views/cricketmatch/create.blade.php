@extends('layouts.admin')

@section('back')
<a href="{{ URL::to('/admin/match') }}">&lt; Back</a>
@endsection

@section('title')
Genre - Create
@endsection

@section('content')

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{Form::open(['route' => 'match.store'])}}
  {{ csrf_field() }}
   
  <div class="form-group">
    {{ Form::label('start_date', 'Start date') }}
    {{ Form::date('start_date', Request::old('start_date'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
  {{ Form::label('start_time', 'Start time') }}
  {{ Form::time('start_time', Request::old('start_time'), array('class' => 'form-control')) }}
</div>

    <div class="form-group">
      {{ Form::label('team_a_id', 'Team A') }}
      {{ Form::select('team_a_id', $teams, Request::old('team_a'), array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
    {{ Form::label('team_b_id', 'Team B') }}
    {{ Form::select('team_b_id', $teams, Request::old('team_a_id'), array('class' => 'form-control')) }}
</div>
  <div class="form-group">
    {{ Form::label('stadium_id', 'Stadium') }}
    {{ Form::select('stadium_id', $stadiums, Request::old('stadium_id'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
  {{ Form::label('tournament_id', 'Tournament') }}
  {{ Form::select('tournament_id', $tournaments, Request::old('tournament_id'), array('class' => 'form-control')) }}
</div>

    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
