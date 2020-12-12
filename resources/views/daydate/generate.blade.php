@extends('layouts.admin')

@section('title')
<h1>Generate Day dates</h1> 
@endsection


@section('back')
<a href="/admin/daydate">Back</a>
@endsection


@section('content')

    {{-- <form action="{{route('daydates.post.generate')}}" method="post"> --}}
    {{ Form::open(['route' => 'daydates.post.generate']  )}}

    <input type="number" name="year" value="2020" >
    {{-- {{Form::number('year', '2020')}} --}}


    {{ Form::submit('Generate') }}

    {{-- </form> --}}
     {{ Form::close() }}

@endsection







