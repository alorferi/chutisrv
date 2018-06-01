@extends('layouts.admin')

@section('back')
<a href="{{ URL::to('ramadans') }}">&lt; Back</a>
@endsection

@section('title')
App - FCM
@endsection

@section('content')

<h1> {{ $date }}: FCM  </h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::open(array('url' => 'ramadans.fcm', 'method' => 'get')) }}

{{-- {{Form::token()}} --}}

    <div class="form-group">
        {{ Form::label('date', 'Date') }}
        {{ Form::date('date', $date, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Show', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}



<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td> Date  </td>
            <td>Sher Time  </td>
            <td>Fajor Time  </td>
            <td>Iftaar Time  </td>
            <td>Area  </td>
              
        </tr>
    </thead>
    <tbody>
    @foreach($ramadans as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->date }}</td>
            <td>{{ $value->sehrTime }}  </td>
            <td>{{ $value->fajrTime }}  </td>
            <td>{{ $value->iftarTime }}  </td>
            <td>{{ $value->area->name }}  </td>
  

        </tr>
    @endforeach
    </tbody>
</table>


{{ Form::open(array('url' => 'ramadans.sendfcm', 'method' => 'post')) }}

{{-- {{Form::token()}} --}}

    <div class="form-group">
       Date: {{ $date }}
        {{ Form::hidden('date',$date) }}
    </div>


    <div class="form-group">
        {{ Form::label('meridiem', 'Time') }}
        {{ Form::radio('meridiem', 'sehrTime') }} Shehr
        {{ Form::radio('meridiem', 'iftarTime') }} Iftar
    </div>

    {{ Form::submit('Send', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
