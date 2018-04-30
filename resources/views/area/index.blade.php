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
        	      <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /genre/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /genre/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('areas/' . $value->id) }}">Show </a>

                <!-- edit this nerd (uses the edit method found at GET /genre/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('areas/' . $value->id . '/edit') }}">Edit </a>
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
