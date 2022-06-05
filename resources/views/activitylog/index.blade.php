
	@extends('layouts.admin')
    @section('content')
    <h1> Activity Logs</h1>
    @include("layouts.partials.paginate_info",['paginator'=>$logs,'label'=>"logs"])




			@foreach($logs as $key => $log)
            <div class="row">

                <div class="col-sm-2">

                @php
                    $user = $log->user;
                @endphp

                @if( $user && $user->photo_url)

                <img class="rounded-circle" src="{{ asset("$user->photo_url")}}" width="64" height="64"  />

                <br>

                {{ $user->first_name }}

                  @else
                      Not Available
                  @endif

                    <br>
                    {{$log->created_at->diffForHumans() }}


                </div>

                <div class="col-sm-4">

                    <span class="{{ \App\Utils\ColorUtils::getColorCodeForHttpMethod($log->method) }}">
                        Method: {{ $log->method }}
                    </span>


                        <br> Line: {{ $log->line}}
                        <br> Fun: {{ $log->function}}
                        <br> Class: {{ $log->class }}

                        @if($log->tags)
                            <br> Tags: {{ $log->tags}}
                        @endif

                    </div>
                    <div class="col-sm-6">

                    Url: {{ $log->url }}
                    <br>  Data: {{ $log->data }}
                    <br>IP: {{ $log->ip }} <br>Agent: {{ $log->agent }}


                </div>

                </div>
			@endforeach
            @include("layouts.partials.paginate_info",['paginator'=>$logs,'label'=>"logs"])


@endsection
