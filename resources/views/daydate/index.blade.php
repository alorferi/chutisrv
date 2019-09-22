@extends('layouts.admin')

@section('back')

 <h4> Day Date</h4>
           <a href="/admin/daydate/{{$currentYear}}/create">Create</a>
           &nbsp;|&nbsp;<a href="/admin/daydate/{{$currentYear}}/generate-dates/">Generate</a>
           {{-- Year --}}
           {{-- &nbsp;|&nbsp;&nbsp;&nbsp;
           <a href="/admin/daydate/{{ $previousYear }}/{{ $currentMonth }}/{{ $currentDay }}/holidays/">&lt;&lt;</a>
           <a href="/admin/daydate/{{$currentYear}}/{{ $currentMonth }}/{{ $currentDay }}/holidays/">{{$currentYear}}</a>
           <a href="/admin/daydate/{{$nextYear}}/{{ $currentMonth }}/{{ $currentDay }}/holidays/">&gt;&gt;</a>
             --}}
           {{-- Month --}}

            {{-- &nbsp;|&nbsp;&nbsp;&nbsp;
            <a href="/admin/daydate/{{$currentYear }}/{{ $previousMonth }}/{{ $currentDay }}/holidays/">&lt;&lt;</a>
           <a href="/admin/daydate/{{$currentYear}}/{{ $currentMonth }}/{{ $currentDay }}/holidays/">{{$currentMonth}}</a>
           <a href="/admin/daydate/{{$currentYear}}/{{ $nextMonth }}/{{ $currentDay }}/holidays/">&gt;&gt;</a>
          --}}
               {{-- Day --}}

            {{-- &nbsp;|&nbsp;&nbsp;&nbsp;
           <a href="/admin/daydate/{{ $currentYear }}/{{ $currentMonth }}/{{ $previousDay }}/holidays/">&lt;&lt;</a>
           <a href="/admin/daydate/{{$currentYear}}/{{ $currentMonth }}/{{ $currentDay }}/holidays/">{{$currentDay}}</a>
           <a href="/admin/daydate/{{$currentYear}}/{{ $currentMonth }}/{{ $nextDay }}/holidays/">&gt;&gt;</a>
        --}}

           <input  id="dt" type="date" value="{{ $date }}" onchange="handler(event.target);">

           <input type="submit" value="Show" onclick="handler(document.getElementById('dt'))">

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
 {!! $daydates->links() !!}
<table class="table table-striped table-bordered">
    <thead>
        <tr>
        	  <td>Actions</td>
             <th>No</th>
             <td>Photo</td>
            <td>DayDate </td>
            <td>Title </td>
            <td> Holiday </td>

            {{-- <td> Flag </td> --}}

        </tr>
    </thead>
    <tbody>
    @foreach($daydates as $daydate)
        <tr>

            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('/admin/daydate/' . $daydate->id) }}">Show </a>
                <a class="btn btn-small btn-primary" href="{{ URL::to('/admin/daydate/' . $daydate->id . '/edit') }}">Edit </a>
             
                @if ($daydate->trashed()) 
                <a class="btn btn-small btn-success" href="{{ URL::to('/admin/daydate/' . $daydate->id . '/restore') }}">Restore </a>
               
                   <a class="btn btn-small btn-danger" href="{{ URL::to('/admin/daydate/' . $daydate->id . '/delete') }}">Delete </a>
               
                @else

                <a class="btn btn-small btn-warning" href="{{ URL::to('/admin/daydate/' . $daydate->id . '/trash') }}">Trash </a>
               
                  @endif
             
            </td>

               <td>{{ ++$i }}</td>

            <td>
                <img src="{{  $daydate->day->photoUrl }}"  width="64" /> </td>

            <td>{{ $daydate->date }}</td>
            <td>

                <p>  <img src="{{ asset("$daydate->bannerUrl")}}" height="100" width="600"  />  </p>

                <h5> {{ $daydate->day->titleBn }} - {{ $daydate->day->titleEn }} </h5>

                <p>  {{ $daydate->day->descriptionBn }}    </p>

            </td>

            <td>
                @if($daydate->holidayType==null)
                @else
                {{ $daydate->holidayType->longName }}
                @endif
            </td>

        </tr>
    @endforeach
    </tbody>
</table>

 {!! $daydates->links() !!}

     <script>
   
                   function handler(target){
                          // alert(target.value);
                    if(target.value){
                        window.location = '/admin/daydate/'+target.value+'/holidays';
                    }
           
            }
    </script>

@endsection
