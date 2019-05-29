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

{{Form::open(['route' => 'team.store', 'files' => true])}}
  {{ csrf_field() }}

  <div class="form-group">
    {{ Form::label('logo', 'logo') }}
    {{ Form::file('logo') }}
</div>

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>


    <div class="form-group">
      {{ Form::label('country_code', 'Country') }}
      {{ Form::select('country_code', $countries, Input::old('country_code'), array('class' => 'form-control')) }}
  </div>

    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
