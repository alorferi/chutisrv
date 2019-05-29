@extends('layouts.admin')

@section('back')
<a href="{{ URL::to('/admin/team') }}">&lt; Back</a>
@endsection

@section('title')
Team - Create
@endsection

@section('content')

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{--  {{Form::open(['route' => 'team.store', 'files' => true])}}  --}}

{{ Form::model($team, array('route' => array('team.update', $team->id), 'method' => 'PUT','files' => true)) }}

  {{ csrf_field() }}

  <div class="form-group">
    {{ Form::label('logo', 'logo') }}
    {{ Form::file('logo') }}
</div>

    <div class="form-group">
        {{ Form::label('short_name', 'Short Name') }}
        {{ Form::text('short_name', Request::old('short_name'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('long_name', 'Long Name') }}
        {{ Form::text('long_name', Request::old('long_name'), array('class' => 'form-control')) }}
    </div>


    <div class="form-group">
      {{ Form::label('country_code', 'Country') }}
      {{ Form::select('country_code', $countries, Request::old('country_code'), array('class' => 'form-control')) }}
  </div>

    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
