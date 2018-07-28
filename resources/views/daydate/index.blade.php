@extends('layouts.admin')

@section('back')

    <table>
        <tr>
      
            <td >Day Date</td>
            <td ><a href="/admin/daydate/create">Create</a></td>

            <td ><a href="/admin/daydate/2017/holidays/">HD-2017</a></td>
            <td ><a href="/admin/daydate/2018/holidays/">HD-2018</a></td>
            <td ><a href="/admin/daydate/2019/holidays/">HD-2019</a></td>

        </tr>
    </table>
@endsection

{{-- @section('title')
Genre List
@endsection --}}

@section('content')


<div class="container">

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
        	  <td>Actions</td>
             <td>Photo</td> 
            <td>&nbsp;   </td>
            <td>DayDate </td>
            <td>Title </td>
            <td> Holiday </td>

            {{-- <td> Flag </td> --}}

        </tr>
    </thead>
    <tbody>
    @foreach($daydates as $key => $daydate)
        <tr>
        	   
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('/admin/daydate/' . $daydate->id) }}">Show </a>
                <a class="btn btn-small btn-info" href="{{ URL::to('/admin/daydate/' . $daydate->id . '/edit') }}">Edit </a>
            </td>
          
            <td>
                <img src="{{  $daydate->day->photo_url }}"  width="64" /> </td>
            <td>{{ $daydate->stared }}</td>
            <td>{{ $daydate->date }}</td>
            <td>{{ $daydate->day->title }}</td>
         
            <td>
                @if($daydate->holidayType==null)
                @else
                {{ $daydate->holidayType->shortName }}
                @endif

              
            
            </td>

            {{-- <td>{{ $daydate->day->dayType->name }}</td> --}}


           
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
