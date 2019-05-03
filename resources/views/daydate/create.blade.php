@extends('layouts.admin')

@section('back')

        <a href="/admin/daydate/{{$currentYear}}/holidays/">&lt; Back</a>

            &nbsp;&nbsp;| <a href="/admin/daydate/{{$backYear}}/create/">&lt;&lt;</a>
           <a href="/admin/daydate/{{$currentYear}}/create/">{{$currentYear}}</a>
           <a href="/admin/daydate/{{$nextYear}}/create/">&gt;&gt;</a>

@endsection

@section('title')
<h4> Create DayDate </h4>
@endsection

@section('content')


<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{-- {{Form::open(['route' => 'daydate.store'])}} --}}

{{Form::open(['route' => 'daydate.store', 'files' => true])}}

<div class="form-group">
    {{ Form::label('banner', 'Banner') }}
    {{-- <img src="{{ asset("$dayDate->bannerUrl")}}" height="64"  />   --}}
    {{ Form::file('banner') }}
</div>


<div class="form-group">
        {{ Form::label('dayId', 'Day') }}
        {{ Form::select('dayId', $days, Request::old('dayId'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('date', 'Date') }}
        {{ Form::date('date', $date, array('class' => 'form-control')) }}
    </div>

        <div class="form-group">
            {{ Form::label('holidayCode', 'Holiday Type') }}
            {{ Form::select('holidayCode', $holidayTypes, Request::old('holidayCode'), array('class' => 'form-control')) }}
        </div>

{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
