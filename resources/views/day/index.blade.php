@extends('layouts.admin')

@section('back')


<nav cclass="navbar-nav ml-auto">
    <ul class="navbar-nav ml-auto">
            <li>Days List</li>    <li> <a href="{{ URL::to('/admin/day/create') }}"> Create</a></li>
    </ul>
</nav>

@endsection

@section('title')

@endsection

@section('content')


{{-- <a href="/admin/day/create">Create</a> --}}


<div class="container">

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
{!! $days->links() !!}
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Actions</th>
            <th>SL</th>
            <th>Photo</th>
            <th>Date</th>  
            <th>FIX DT</th>  
            <th>MULTI DT</th>  
            <th>Details</th>
            <th>Day Flags</th> 
            <th>Religion</th>
            <th>Holiday Type</th>
            <th>Country</th>
        </tr>
    </thead>
    <tbody>
    @foreach($days as $key => $day)
        <tr>
        	   
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('/admin/day/' . $day->id) }}">Show </a>
                <a class="btn btn-small btn-info" href="{{ URL::to('/admin/day/' . $day->id . '/edit') }}">Edit </a>
            </td>
            <td>{{ ++$i }}</td>
            <td> <img src="{{ asset("$day->photoUrl")}}" width="64"  /> </td>
       
             <td>{{ $day->date }}</td> 
             <td>{{ $day->isFixedDate }}</td> 
             <td>{{ $day->isMultiDate }}</td> 
            <td>
                
            <h5>  {{ $day->titleBn }} <br/> {{ $day->titleEN }} </h5>

            {{ $day->descriptionBn }}
            
            
            </td>

        

            <td>
            {{ $day->dayFlag }}
            </td>
         
            <td>
            @if($day->religion!=null)
                {{ $day->religion->localName }}
                @else
                None
                @endif
            
            </td>
            <td>
               @if($day->holidayType==null)
                @else
                {{ $day->holidayType->longName }}
                @endif
            </td>
            <td>
               @if($day->country==null)
                @else
                {{ $day->country->name }}
                @endif
            </td>
           
        </tr>
    @endforeach
    </tbody>
</table>

{!! $days->links() !!}
@endsection
