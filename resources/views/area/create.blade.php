@extends('layouts.admin')

@section('back')
<a href="{{ URL::to('admin/area') }}">&lt; Back</a>
@endsection

@section('title')
Area - Create
@endsection

@section('content')

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::open(array('url' => 'areas')) }}
  {{ csrf_field() }}

  <div class="form-group">
    {{ Form::label('code', 'Code') }}
    {{ Form::text('code', Input::old('code'), array('class' => 'form-control')) }}
</div>

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>


    <div class="form-group">
        {{ Form::label('localName', 'Local Name') }}
        {{ Form::text('localName', Input::old('localName'), array('class' => 'form-control')) }}
    </div>


    <div class="form-group">
        {{ Form::label('countryCode', 'Country') }}
        {{ Form::select('countryCode', $countries, Input::old('countryCode'), array('class' => 'form-control')) }}
    </div>
   

    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
