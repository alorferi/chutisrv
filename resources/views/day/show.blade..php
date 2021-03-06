@extends('layouts.admin')

@section('back')
<a href="{{ URL::to('/admin/day') }}">&lt; Back</a>
@endsection

@section('title')
Tag - Edit
@endsection

@section('content')

<h1>Edit {{ $day->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($day, array('route' => array('day.update', $day->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('date', 'Date') }}
        {{ Form::date('date', Request::old('date'), array('class' => 'form-control')) }}
    </div>

<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', Request::old('title'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Description') }}
    {{-- {{ Form::text('description', Request::old('description'), array('class' => 'form-control')) }} --}}
    {{ Form::textarea('description', Request::old('description'), array('class' => 'form-control')) }}
</div>

    <div class="form-group">
        {{ Form::label('dayFlags', 'Tags') }}
        {{-- {{ Form::select('tag_ids[]', $tags, null, ['multiple'], array('class' => 'form-control')) }} --}}
        {{ Form::select('dayFlags[]', $dayFlags, $flag_ids, ['multiple'], array('class' => 'form-control')) }}
    </div>


{{-- <div class="form-group">
    {{ Form::label('dayFlag', 'DayFlag') }}
    {{ Form::select('dayFlag', $dayFlags, Request::old('dayFlag'), array('class' => 'form-control')) }}
</div> --}}

    <div class="form-group">
        {{ Form::label('religionCode', 'Religion') }}
        {{ Form::select('religionCode', $religions, Request::old('religionCode'), array('class' => 'form-control')) }}
    </div>


{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
