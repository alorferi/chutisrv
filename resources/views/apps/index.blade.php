@extends('masters.admin')


@section('title')
App List
@endsection

@section('content')


<a href="apps/create">Create</a>


<div class="container">

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
        	  <td>Actions</td>
        
            <td>Name   </td>
            <td>Local Name  </td>
            <td>Bundle Id</td>

        </tr>
    </thead>
    <tbody>
    @foreach($apps as $key => $app)
        <tr>
        	   
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('apps/' . $app->id) }}">Show </a>
                <a class="btn btn-small btn-info" href="{{ URL::to('apps/' . $app->id . '/edit') }}">Edit </a>
                <a class="btn btn-small btn-info" href="{{ URL::to('apps/' . $app->id . '/fcm') }}">FCM </a>
            </td>

            <td>{{ $app->name }}</td>
             <td>{{ $app->localName }}</td>

            <td>{{ $app->bundleId }}</td>
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
