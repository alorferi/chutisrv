@extends('layouts.admin')


@section('title')
App List
@endsection

@section('content')


<a href="/admin/app/create">Create</a>


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
            <td>Version Code</td>
            <td>Version Name</td>

        </tr>
    </thead>
    <tbody>
    @foreach($apps as $key => $app)
        <tr>
        	   
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('/admin/app/' . $app->id) }}">Show </a>
                <a class="btn btn-small btn-info" href="{{ URL::to('/admin/app/' . $app->id . '/edit') }}">Edit </a>
                <a class="btn btn-small btn-info" href="{{ URL::to('/admin/app/' . $app->id . '/fcm') }}">FCM </a>
            </td>

            <td>{{ $app->name }}</td>
             <td>{{ $app->localName }}</td>

            <td>{{ $app->bundleId }}</td>
            <td>{{ $app->versionCode }}</td>
            <td>{{ $app->versionName }}</td>
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
