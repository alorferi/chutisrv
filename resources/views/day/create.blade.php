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
        {{ Form::label('photo', 'Photo') }}
        {{ Form::file('photo') }}
  </div>

  <div class="form-group">
        {{ Form::label('date', 'Date') }}
        {{ Form::date('date', Request::old('date'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
            {{ Form::label('isFixedDate', 'FixedDate') }}
            {{ Form::checkbox('isFixedDate',null, Request::old('isFixedDate')) }}
    </div>

    <div class="form-group">
            {{ Form::label('isMultiDate', 'isMultiDate') }}
            {{ Form::checkbox('isMultiDate',null, Request::old('isMultiDate')) }}
    </div>
   
   
  <div class="form-group">
        {{ Form::label('titleBn', 'Title') }}
        {{ Form::text('titleBn', Request::old('titleBn'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('descriptionBn', 'Description') }}
        {{-- {{ Form::text('description', Request::old('description'), array('class' => 'form-control')) }} --}}
        {{ Form::textarea('descriptionBn', Request::old('descriptionBn'), array('class' => 'form-control')) }}
    </div>


    <div class="form-group">
            {{ Form::label('dayFlags', 'Day Flags') }}
            {{-- {{ Form::select('tag_ids[]', $tags, null, ['multiple'], array('class' => 'form-control')) }} --}}
            {{ Form::select('dayFlags[]', $dayFlags, null, ['multiple'], array('class' => 'form-control')) }}
        </div>
    
        <div class="form-group">
            {{ Form::label('religionCode', 'Religion') }}
            {{ Form::select('religionCode', $religions, Request::old('religionCode'), array('class' => 'form-control')) }}
        </div>
        
        <div class="form-group">
            {{ Form::label('holidayCode', 'Holiday Type') }}
            {{ Form::select('holidayCode', $holidayTypes, Request::old('holidayCode'), array('class' => 'form-control')) }}
        </div>

     



    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
