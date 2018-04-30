@extends('layouts.adminapp')

@section('back')
<a href="{{ URL::to('genre') }}">&lt; Back</a>
@endsection

@section('title')
Genre - Create
@endsection

@section('content')

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::open(array('url' => 'genre')) }}
  {{ csrf_field() }}
    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
