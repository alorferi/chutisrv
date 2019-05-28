@extends('layouts.admin')


@section('title')
Genre List
@endsection

@section('content')


<a href="/admin/country/create">Create</a>


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
    @foreach($matches as  $match)
        <tr>
        	   
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('/admin/country/' . $match->id) }}">Show </a>
                <a class="btn btn-small btn-info" href="{{ URL::to('/admin/country/' . $match->id . '/edit') }}">Edit </a>
            </td>

            <td>{{ $match->code }}</td>
            <td>{{ $match->name }}</td>

   <td>{{ $match->localName }}</td>

           
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
