@extends('layouts.admin')

@section('back')
<a href="{{ URL::to('admin/area') }}">&lt; Back</a>
@endsection

@section('title')
Area - Edit
@endsection

@section('content')

<h1>Edit {{ $area->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($area, array('route' => array('area.update', $area->code), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
