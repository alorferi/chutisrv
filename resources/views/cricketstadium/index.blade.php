@extends('layouts.admin')


@section('title')
Genre List
@endsection

@section('content')


<a href="/admin/stadium/create">Create</a>


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
            <td>Country   </td>


        </tr>
    </thead>
    <tbody>
    @foreach($stadiums as $stadium)
        <tr>
        	   
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('/admin/country/' . $stadium->code) }}">Show </a>
                <a class="btn btn-small btn-info" href="{{ URL::to('/admin/country/' . $stadium->code . '/edit') }}">Edit </a>
            </td>


            <td>{{ $stadium->name }}</td>
            <td>{{ $stadium->country_code }}</td>



           
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
