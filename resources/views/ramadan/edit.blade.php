@extends('masters.admin')

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
        {{ Form::label('name', 'Date') }}
        {{ Form::date('englishDate', null, array('class' => 'form-control')) }}
    </div>



    <div class="form-group">
            {{ Form::label('sherTime', 'Sher Time') }}
            {{ Form::text('sherTime', null, array('class' => 'form-control')) }}
        </div>
    

        <div class="form-group">
                {{ Form::label('fajorTime', 'Fajor Time') }}
                {{ Form::text('fajorTime', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                    {{ Form::label('iftaarTime', 'Iftaar Time') }}
                    {{ Form::text('iftaarTime', null, array('class' => 'form-control')) }}
                </div>

    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
