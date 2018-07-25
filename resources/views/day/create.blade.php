@extends('layouts.admin')

@section('back')


<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('/admin/day') }}">&lt; Back</a></li> <li> Days  </li>
    </ul>
</nav>

@endsection


@section('content')

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{Form::open(['route' => 'day.store', 'files' => true])}}
  {{ csrf_field() }}

  <div class="form-group">
        {{ Form::label('date', 'Date') }}
        {{ Form::date('date', Request::old('date'), array('class' => 'form-control')) }}
    </div>
   
  <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', Request::old('title'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{-- {{ Form::text('description', Request::old('description'), array('class' => 'form-control')) }} --}}
        {{ Form::textarea('description', Request::old('description'), array('class' => 'form-control')) }}
    </div>



    <div class="form-group">
        {{ Form::label('dayFlag', 'DayFlag') }}
        {{ Form::select('dayFlag', $dayFlags, Request::old('dayFlag'), array('class' => 'form-control')) }}
    </div>

        <div class="form-group">
            {{ Form::label('religionCode', 'Religion') }}
            {{ Form::select('religionCode', $religions, Request::old('religionCode'), array('class' => 'form-control')) }}
        </div>


    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
