@extends('layouts.admin')


@section('title')
Genre List
@endsection

@section('content')


{{--  <a href="/admin/religion/create">Create</a>  --}}


<div class="container">

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
{!! $devices->links() !!}
<table class="table table-striped table-bordered">
    <thead>
        <tr>
        	  <td>Actions</td>
            <td> Info   </td>
           

        </tr>
    </thead>
    <tbody>
    @foreach($devices as $device)
        <tr>
        	   
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('/admin/userdevice/' . $device->id) }}">Show </a>
                <a class="btn btn-small btn-info" href="{{ URL::to('/admin/userdevice/' . $device->id . '/trush') }}">Trush </a>
            </td>
            <td>{{ $device->created_at }} - {{ $device->updated_at }}<hr/>
           
          OS,  {{ $device->os }}, Version: {{ $device->version_name }} ( {{ $device->version_number }}),  {{ $device->package_name }}<hr/>
         
           
            {{ $device->device_token }}</td>

           
        </tr>
    @endforeach
    </tbody>
</table>

{!! $devices->links() !!}
@endsection
