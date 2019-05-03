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

{{ Form::model($day, array('route' => array('day.update', $day->id), 'method' => 'PUT','files' => true)) }}

    <div class="form-group">
        {{ Form::label('photo', 'Photo') }}
        <img src="{{ asset("$day->photoUrl")}}" width="64"  />
        {{ Form::file('photo') }}
    </div>

    <div class="form-group">
        {{ Form::label('date', 'Date') }}
        {{ Form::date('date', Request::old('date'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
            {{ Form::label('isFixedDate', 'Fixed Date') }}
            {{ Form::checkbox('isFixedDate',null, Request::old('isFixedDate')) }}
    </div>

    <div class="form-group">
            {{ Form::label('isMultiDate', 'isMultiDate') }}
            {{ Form::checkbox('isMultiDate',null, Request::old('isMultiDate')) }}
    </div>

<div class="form-group">
    {{ Form::label('titleBn', 'Title') }}
    {{ Form::text('titleBn', Request::old('titleBn'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('descriptionBn', 'Description') }}
    {{-- {{ Form::text('descriptionBn', Request::old('descriptionBn'), array('class' => 'form-control')) }} --}}
    {{ Form::textarea('descriptionBn', Request::old('descriptionBn'), array('class' => 'form-control')) }}
</div>

    <div class="form-group">
        {{ Form::label('dayFlags', 'Flags') }}
        {{-- {{ Form::select('tag_ids[]', $tags, null, ['multiple'], array('class' => 'form-control')) }} --}}
        {{ Form::select('dayFlags[]', $dayFlags, $flag_ids, ['multiple'], array('class' => 'form-control')) }}
    </div>


    <div class="form-group">
        {{ Form::label('religionCode', 'Religion') }}
        {{ Form::select('religionCode', $religions, Request::old('religionCode'), array('class' => 'form-control')) }}
    </div>


    <div class="form-group">
            {{ Form::label('holidayCode', 'Holiday Type') }}
            {{ Form::select('holidayCode', $holidayTypes, Request::old('holidayCode'), array('class' => 'form-control')) }}
        </div>


{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
