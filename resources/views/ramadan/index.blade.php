@extends('layouts.admin')


@section('title')
ramadans List
@endsection

@section('content')


<a href="ramadans/create">Create</a>


<div class="container">

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
        	  <td>Actions</td>
            <td>ID</td>
            <td> Date  </td>
            <td>Sher Time  </td>
            <td>Fajor Time  </td>
            <td>Iftaar Time  </td>
            <td>Area  </td>
              
        </tr>
    </thead>
    <tbody>
    @foreach($ramadans as $key => $value)
        <tr>

            <td>



                <a class="btn btn-small btn-success" href="{{ URL::to('ramadans/' . $value->id) }}">Show </a>
                <a class="btn btn-small btn-info" href="{{ URL::to('ramadans/' . $value->id . '/edit') }}">Edit </a>

            </td>
            <td>{{ $value->id }}</td>
            <td>{{ $value->date }}</td>
            <td>{{ $value->sehrTime }}  </td>
            <td>{{ $value->fajrTime }}  </td>
            <td>{{ $value->iftarTime }}  </td>
            <td>{{ $value->area->name }}  </td>
  

        </tr>
    @endforeach
    </tbody>
</table>


@endsection
