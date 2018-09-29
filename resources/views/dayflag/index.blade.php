@extends('layouts.admin')


@section('title')
Genre List
@endsection

@section('content')


<a href="/admin/dayflag/create">Create</a>


<div class="container">

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
        	  <td>Actions</td>
            <td>Flag</td>
            <td>Name   </td>


        </tr>
    </thead>
    <tbody>
    @foreach($dayflags as $key => $dayflag)
        <tr>
        	   
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('/admin/dayflag/' . $dayflag->flag) }}">Show </a>
                <a class="btn btn-small btn-info" href="{{ URL::to('/admin/dayflag/' . $dayflag->flag . '/edit') }}">Edit </a>
            </td>

            <td>{{ $dayflag->flag }}</td>
            <td>{{ $dayflag->name_bn }} - {{ $dayflag->name_en }} </td>        
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
