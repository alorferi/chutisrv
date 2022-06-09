@extends('layouts.admin')
@section('content')
    <h1> Activity Logs</h1>

    <form action="" method="get">
        @csrf

        <div class="d-flex align-items-center">


            <div class="p-2">
                From
            </div>
            <div class="p-2">
                <input name="from_date" type="date" value="{{ $from_date }}" />
            </div>
            <div class="p-2">
                To
            </div>
            <div class="p-2">
                <input name="to_date" type="date" value="{{ $to_date }}" />
            </div>
            <div class="p-2">
                <input name="ip" type="text" value="{{ $ip }}" placeholder="IP Address" />
            </div>

            <div class="pt-2 pb-2">
                <button class="btn btn-default" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>


        </div>

    </form>

    @include('layouts.partials.paginate_info', ['paginator' => $logs, 'label' => 'logs'])


    @php
    $i = 0;
    @endphp

    @foreach ($logs as $key => $log)
        <div class="row">

          

            <div class="col-sm-4">

                @php
                    $user = $log->user;
                @endphp

                @if ($user && $user->photo_url)
                    <img class="rounded-circle" src="{{ asset("$user->photo_url") }}" width="64" height="64" />

                    <br>

                    {{ $user->first_name }}
                @else
                    Not Available
                @endif

                <br>
                {{ $log->created_at->diffForHumans() }}
                <br>

                <span class="{{ \App\Utils\ColorUtils::getColorCodeForHttpMethod($log->method) }}">
                    Method: {{ $log->method }}
                </span>


                <br> Line: {{ $log->line }}
                <br> Fun: {{ $log->function }}
                <br> Class: {{ $log->class }}

                @if ($log->tags)
                    <br> Tags: {{ $log->tags }}
                @endif

            </div>
            <div class="col-sm-5">

                Url: {{ $log->url }}
                <br> Data: {{ $log->data }}
             
                <br>Agent: {{ $log->agent }}

            </div>

            <div class="col-sm-3">
              
                <div id="country{{$i}}">Country</div>
                <div id="city{{$i}}">City</div>
                <div id="region{{$i}}">Region</div>
                IP:<span class="text-danger ip_address">{{ $log->ip }}</span> 

            </div>

        </div>

        @php
            $i++;
        @endphp
    @endforeach
    @include('layouts.partials.paginate_info', ['paginator' => $logs, 'label' => 'logs'])

    <script>
        $(document).ready(function() {


            $('span.ip_address').each(function(index, value) {
                console.log(`div${index}:${value.innerText}`);
                var url = `{{ env('IP2LOCATION_SRV_URL', '') }}/api/ip2locations/${value.innerText}`
                $.ajax({
                    url: url
                }).then(function(data) {

                    $("#country" + index).text(data.data.country)
                    $("#city" + index).text(data.data.city)
                    $("#region" + index).text(data.data.region)

                });

            });


        });
    </script>
@endsection
