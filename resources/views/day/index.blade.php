@extends('layouts.admin')

@section('back')


<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
            <li>Days List</li>    <li> <a href="{{ URL::to('/admin/day/create') }}"> Create</a></li>
    </ul>
</nav>

@endsection

@section('title')

@endsection

@section('content')


{{-- <a href="/admin/day/create">Create</a> --}}


<div class="container">

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
        	  <td>Actions</td>
            {{--  <td>Key</td>  --}}
            <td>Title   </td>
            <td>description </td>
            <td>Religion </td>
            <td>Flag </td>

        </tr>
    </thead>
    <tbody>
    @foreach($days as $key => $day)
        <tr>
        	   
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('/admin/day/' . $day->id) }}">Show </a>
                <a class="btn btn-small btn-info" href="{{ URL::to('/admin/day/' . $day->id . '/edit') }}">Edit </a>
            </td>

             <td>{{ $day->date }}</td> 
            <td>{{ $day->title }}</td>
            <td>{{ $day->description }}</td>
            <td>
            @if($day->religion!=null)
                {{ $day->religion->localName }}
                @else
                None
                @endif
            
            </td>
            <td>{{ $day->dayType->name }}</td>


           
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
