@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="width:100%;text-align:center"><h5> 2019</h5> </div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                </div> --}}


                  <table style="width:100%;text-align:center" >
                        <tr style="background:#964B00;color:#ffffff">
                            <td  style="text-align:left;padding:3pt"> &lt;&lt; </td>
                            <td  style="text-align:center"> সেপ্টেম্বর </td>
                            <td  style="text-align:right;padding:3pt"> &gt;&gt; </td>
                        </tr>
                     </table>
                    <table style="width:100%;text-align:center" >
                        <tr style="background:#0000aa;color:#ffffff">
                            <td> রবি </td>
                            <td> সোম </td>
                            <td> মঙ্গল </td>
                            <td> বুধ </td>
                            <td> বৃহঃ </td>
                            <td> শুক্র </td>
                            <td> শনি </td>
                        </tr>


                        @for($r=1;$r<=6;$r++)

                        <tr>
                           @for($c=1;$c<=7;$c++)
                            <td> {{ $c }} </td>
                           @endfor
                        </tr>

                        @endfor



                    </table>
            

            </div>
        </div>
    </div>
</div>
@endsection
