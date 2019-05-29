@extends('layouts.admin')


@section('title')
Genre List
@endsection

@section('content')


<a href="/admin/match/create">Create</a>


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
            <td> VS   </td>
            <td>Stidum  </td>

        </tr>
    </thead>
    <tbody>
    @foreach($matches as  $match)
        <tr>
        	   
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('/admin/match/' . $match->id) }}">Show </a>
                <a class="btn btn-small btn-info" href="{{ URL::to('/admin/match/' . $match->id . '/edit') }}">Edit </a>
            </td>

            <td>{{ $match->start_date }} {{ $match->start_time }}</td>
            <td>

            {{ $match->teamA->short_name }} vs {{ $match->teamB->short_name  }}


            </td>

   <td>{{ $match->localName }}</td>

           
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
