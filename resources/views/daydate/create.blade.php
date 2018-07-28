@extends('layouts.admin')

@section('back')
<a href="{{ URL::to('/admin/day') }}">&lt; Back</a>
@endsection

@section('title')
Day Date - Create
@endsection

@section('content')

<h1> Create DayDate </h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{Form::open(['route' => 'daydate.store'])}}

<div class="form-group">
        {{ Form::label('dayId', 'Day') }}
        {{ Form::select('dayId', $days, Request::old('dayId'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('date', 'Date') }}
        {{ Form::date('date', Request::old('date'), array('class' => 'form-control')) }}
    </div>

        <div class="form-group">
            {{ Form::label('stared', 'Stared') }}
            {{ Form::text('stared', Request::old('stared'), array('class' => 'form-control')) }}
        </div>



        <div class="form-group">
            {{ Form::label('holidayCode', 'Holiday Type') }}
            {{ Form::select('holidayCode', $holidayTypes, Request::old('holidayCode'), array('class' => 'form-control')) }}
        </div>

{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
