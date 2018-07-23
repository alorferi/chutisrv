@extends('layouts.admin')

@section('back')
<a href="{{ URL::to('/admin/app') }}">&lt; Back</a>
@endsection

@section('title')
App - FCM
@endsection

@section('content')

<h1> {{ $app->name }}: FCM  </h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($app, array('route' => array('app.sendfcm', $app->id))) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, array('class' => 'form-control')) }}
    </div>



    <div class="form-group">
            {{ Form::label('body', 'Message') }}
            {{ Form::textarea('body', null, array('class' => 'form-control')) }}
        </div>
    


    {{ Form::submit('Send', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
