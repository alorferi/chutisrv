@extends('layouts.admin')


@section('title')
Genre List
@endsection

@section('content')


<a href="daydates/create">Create</a>


<div class="container">

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
        	  <td>Actions</td>
            <td>DayKey</td>
            <td>Stared   </td>
            <td>DayDate </td>
            <td>Title </td>
            <td>DayId </td>

        </tr>
    </thead>
    <tbody>
    @foreach($daydates as $key => $daydate)
        <tr>
        	   
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('days/' . $daydate->id) }}">Show </a>
                <a class="btn btn-small btn-info" href="{{ URL::to('days/' . $daydate->id . '/edit') }}">Edit </a>
            </td>

            <td>{{ $daydate->dayKey }}</td>
            <td>{{ $daydate->stared }}</td>
            <td>{{ $daydate->dayDate }}</td>
            <td>{{ $daydate->day->title }}</td>
         
            <td>{{ $daydate->dayId }}</td>


           
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
