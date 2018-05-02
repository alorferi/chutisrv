@extends('layouts.admin')

@section('back')
<a href="{{ URL::to('areas') }}">&lt; Back</a>
@endsection

@section('title')
Genre - Edit
@endsection

@section('content')

<h1>Edit {{ $genre->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($genre, array('route' => array('genre.update', $genre->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
