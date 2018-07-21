@extends('layouts.admin')


@section('title')
Genre List
@endsection

@section('content')


<a href="/admin/holidaytype/create">Create</a>


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
            <td>longName   </td>

            <td>Order   </td>
            <td>showInCalendar   </td>

        </tr>
    </thead>
    <tbody>
    @foreach($holidaytypes as $key => $holidaytype)
        <tr>
        	   
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('/admin/holidaytype/' . $holidaytype->code) }}">Show </a>
                <a class="btn btn-small btn-info" href="{{ URL::to('/admin/holidaytype/' . $holidaytype->code . '/edit') }}">Edit </a>
            </td>

            <td>{{ $holidaytype->code }}</td>
            <td>{{ $holidaytype->shortName }}</td>
            <td>{{ $holidaytype->longName }}</td>
            <td>{{ $holidaytype->orderFlag }}</td>
            <td>{{ $holidaytype->showInCalendar }}</td>           
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
