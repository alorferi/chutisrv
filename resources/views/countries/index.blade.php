@extends('layouts.admin')


@section('title')
Genre List
@endsection

@section('content')


<a href="country/create">Create</a>


<div class="container">

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
        	  <td>Actions</td>
            <td>Code</td>
            <td>Name   </td>
            <td>Local Name  </td>

        </tr>
    </thead>
    <tbody>
    @foreach($countries as $key => $value)
        <tr>
        	   
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('countries/' . $value->id) }}">Show </a>
                <a class="btn btn-small btn-info" href="{{ URL::to('countries/' . $value->id . '/edit') }}">Edit </a>
            </td>

            <td>{{ $value->code }}</td>
            <td>{{ $value->name }}</td>

   <td>{{ $value->localName }}</td>

           
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
