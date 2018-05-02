@extends('masters.admin')


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
        	      <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /ramadans/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /ramadans/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('ramadans/' . $value->id) }}">Show </a>

                <!-- edit this nerd (uses the edit method found at GET /ramadans/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('ramadans/' . $value->id . '/edit') }}">Edit </a>

            </td>
            <td>{{ $value->id }}</td>
            <td>{{ $value->date }}</td>
            <td>{{ $value->sehrTime }}  </td>
            <td>{{ $value->fajorTime }}  </td>
            <td>{{ $value->iftaarTime }}  </td>
            <td>{{ $value->areaCode }}  </td>
  

        </tr>
    @endforeach
    </tbody>
</table>


@endsection
