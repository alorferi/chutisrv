@extends('layouts.admin')

@section('back')

    <table>
        <tr>
      
            <td >Day Date</td>
            <td ><a href="/admin/daydate/create">Create</a></td>

            <td >&nbsp;&nbsp;<a href="/admin/daydate/{{$backYear}}/holidays/">&lt;&lt;</a></td>
            <td >{{$currentYear}}</td>
            <td ><a href="/admin/daydate/{{$nextYear}}/holidays/">&gt;&gt;</a></td>

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
                <img src="{{  $daydate->day->photoUrl }}"  width="64" /> </td>

            <td>{{ $daydate->date }}</td>
            <td>

                <p>  <img src="{{ asset("$daydate->bannerUrl")}}" height="100" width="600"  />  </p>
                
                <h5> {{ $daydate->stared }} {{ $daydate->day->titleBn }} - {{ $daydate->day->titleEn }} </h5>
          
                <p>  {{ $daydate->day->descriptionBn }}    </p>

            </td>
         
            <td>
                @if($daydate->holidayType==null)
                @else
                {{ $daydate->holidayType->shortName }}
                @endif
            </td>
           
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
