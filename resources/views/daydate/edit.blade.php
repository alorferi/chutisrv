@extends('layouts.admin')

@section('back')
<a href="{{ URL::to('/admin/daydate') }}">&lt; Back</a>
@endsection

@section('title')
Tag - Edit
@endsection

@section('content')

<h1>Edit {{ $dayDate->day->title }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($dayDate, array('route' => array('daydate.update', $dayDate->id), 'method' => 'PUT','files' => true)) }}



<div class="form-group">
    {{ Form::label('banner', 'Banner') }}
    <img src="{{ asset("$dayDate->bannerUrl")}}" height="64"  />  
    {{ Form::file('banner') }}
</div>

    <div class="form-group">
        {{ Form::label('date', 'Date') }}
        {{ Form::date('date', Request::old('date'), array('class' => 'form-control')) }}
    </div>

        <!-- <div class="form-group">
            {{ Form::label('stared', 'Stared') }}
            {{ Form::text('stared', Request::old('stared'), array('class' => 'form-control')) }}
        </div> -->

    <div class="form-group">
        {{ Form::label('dayId', 'Day') }}
        {{-- {{ Form::select('tag_ids[]', $tags, null, ['multiple'], array('class' => 'form-control')) }} --}}
        {{ Form::select('dayId', $days, Request::old('dayId'), array('class' => 'form-control')) }}
    </div>

        <div class="form-group">
            {{ Form::label('holidayCode', 'Holiday Type') }}
            {{-- {{ Form::select('tag_ids[]', $tags, null, ['multiple'], array('class' => 'form-control')) }} --}}
            {{ Form::select('holidayCode', $holidayTypes, Request::old('holidayCode'), array('class' => 'form-control')) }}
        </div>

{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
