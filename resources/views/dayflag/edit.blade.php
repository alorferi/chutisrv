@extends('layouts.admin')

@section('back')
<a href="{{ URL::to('/admin/dayflag') }}">&lt; Back</a>
@endsection

@section('title')
Tag - Edit
@endsection

@section('content')

<h1>Edit {{ $dayflag->name_en }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($dayflag, array('route' => array('dayflag.update', $dayflag->flag), 'method' => 'PUT')) }}


        <div class="form-group">
            {{ Form::label('flag', 'Flag') }}
            {{ Form::number('flag', Request::old('flag'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('name_en', 'Name{EN}') }}
            {{ Form::text('name_en', Request::old('name_en'), array('class' => 'form-control')) }}
        </div>


        <div class="form-group">
            {{ Form::label('name_bn', 'Name{BN}') }}
            {{ Form::text('name_bn', Request::old('name_bn'), array('class' => 'form-control')) }}
        </div>


        <div class="form-group">
            {{ Form::label('display_order', 'Order') }}
            {{ Form::number('display_order', Request::old('display_order'), array('class' => 'form-control')) }}
        </div>
        
{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
