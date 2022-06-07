
	@extends('layouts.admin')
    @section('content')
    <h1> Activity IPs</h1>

    <form action="" method="get">
        @csrf

        <div class="d-flex align-items-center">


            <div class="p-2">
                From
            </div>
            <div class="p-2">
                 <input name="from_date" type="date" value="{{$from_date}}"/>
            </div>
            <div class="p-2">
                To
            </div>
            <div  class="p-2">
                 <input name="to_date" type="date" value="{{$to_date}}"/>
            </div>


            <div  class="pt-2 pb-2">
                <button class="btn btn-default" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>


        </div>

    </form>

    @include("layouts.partials.paginate_info",['paginator'=>$ips,'label'=>"ips"])




			@foreach($ips as  $ip)
            <div class="row">



                <div class="col-sm-4">

                    {{$ip->ip}}

                    </div>
                    <div class="col-sm-4">

                        {{$ip->cnt}}

                        </div>


                </div>
			@endforeach
            @include("layouts.partials.paginate_info",['paginator'=>$ips,'label'=>"ips"])


@endsection
