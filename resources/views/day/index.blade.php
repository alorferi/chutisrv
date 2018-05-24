@extends('layouts.admin')


@section('title')
Genre List
@endsection

@section('content')


<a href="day/create">Create</a>


<div class="container">

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
        	  <td>Actions</td>
            <td>Key</td>
            <td>Title   </td>
            <td>description </td>
            <td>Category </td>
            <td>Flag </td>

        </tr>
    </thead>
    <tbody>
    @foreach($days as $key => $day)
        <tr>
        	   
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('days/' . $day->id) }}">Show </a>
                <a class="btn btn-small btn-info" href="{{ URL::to('days/' . $day->id . '/edit') }}">Edit </a>
            </td>

            <td>{{ $day->dayKey }}</td>
            <td>{{ $day->title }}</td>
            <td>{{ $day->description }}</td>
            <td>{{ $day->dayCategory }}</td>
            <td>{{ $day->dayFlag }}</td>


           
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
