@extends('masters.admin')


@section('title')
Area List
@endsection

@section('content')


<a href="areas/create">Create</a>


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
            <td>Local Name</td>
            <td>Country Code</td>

        </tr>
    </thead>
    <tbody>
    @foreach($areas as $key => $value)
        <tr>
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('areas/' . $value->code) }}">Show </a>
                <a class="btn btn-small btn-info" href="{{ URL::to('areas/' . $value->code . '/edit') }}">Edit </a>
                <a class="btn btn-small btn-info" href="{{ URL::to('areas/' . $value->code . '/fcm') }}">FCM </a>
            </td>

            <td>{{ $value->code }}</td>
            <td>{{ $value->name }}</td>

   <td>{{ $value->localName }}</td>

   <td>{{ $value->countryCode }}</td>
           
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
