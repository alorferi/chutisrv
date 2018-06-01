@extends('layouts.admin')

@section('back')
<a href="{{ URL::to('ramadans') }}">&lt; Back</a>
@endsection

@section('title')
ramadan - Edit
@endsection

@section('content')

<h1>Edit {{ $ramadan->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($ramadan, array('route' => array('ramadans.update', $ramadan->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('date', 'Date') }}
        {{ Form::date('date', null, array('class' => 'form-control')) }}
    </div>



    <div class="form-group">
            {{ Form::label('sehrTime', 'Sher Time') }}
            {{ Form::text('sehrTime', null, array('class' => 'form-control')) }}
        </div>
    

        <div class="form-group">
                {{ Form::label('fajrTime', 'Fajor Time') }}
                {{ Form::text('fajrTime', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                    {{ Form::label('iftarTime', 'Iftaar Time') }}
                    {{ Form::text('iftarTime', null, array('class' => 'form-control')) }}
                </div>

    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
