@extends('layouts.admin')


@section('title')
ramadans List
@endsection

@section('content')


<a href="admin/ramadan/create">Create</a>


<div class="container">

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
{!! $ramadans->links() !!}
<table class="table table-striped table-bordered">
    <thead>
        <tr>
        	  <td>Actions</td>
            <td>SL</td>
            <td> Date  </td>
            <td>Sher Time  </td>
            <td>Fajor Time  </td>
            <td>Iftaar Time  </td>
            <td>Area  </td>
              
        </tr>
    </thead>
    <tbody>
    @foreach($ramadans as $ramadan)
        <tr>

            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('admin/ramadan/' . $ramadan->id) }}">Show </a>
                <a class="btn btn-small btn-primary" href="{{ URL::to('admin/ramadan/' . $ramadan->id . '/edit') }}">Edit </a>
            </td>
            <td>{{ ++$i }}</td>
            <td>{{ $ramadan->date }}</td>
            <td>{{ $ramadan->sehrTime }}  </td>
            <td>{{ $ramadan->fajrTime }}  </td>
            <td>{{ $ramadan->iftarTime }}  </td>
            <td>{{ $ramadan->area->name }}  </td>
  

        </tr>
    @endforeach
    </tbody>
</table>
{!! $ramadans->links() !!}

@endsection
