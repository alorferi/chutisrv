@extends('layouts.admin')

@section('back')
<a href="{{ URL::to('/admin/day') }}">&lt; Back</a>
@endsection

@section('title')
Day Date - Create
@endsection

@section('content')

<h1> Create DayFlag </h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{-- {{Form::open(['route' => 'dayflag.store'])}} --}}

{{Form::open(['route' => 'dayflag.store', 'files' => true])}}

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
