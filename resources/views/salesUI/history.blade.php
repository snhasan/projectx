@extends('salesUI.salesMaster')


<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/salesHistory.css') }}">

@section('content')

    <div class="row justify-content-center">

        <div id="prev" class="container col-md-12"><h3 >Previous Visits</h3></div>

        <div class="row container col-md-11 justify-content-center ">





            @if(count($history)>0)

                @foreach($history as $hist)

                    <div class="col-md-3" id="cardBox">


                        <div id="cardHeader">
                            <h5>{{$hist["Company_Name"]}}</h5>
                        </div>

                        <div class="col-md-12" id="cardBody">

                            @if($hist["created_at"]!=null)
                                <h5>Date</h5>
                                <p>{{date('d M, Y', strtotime($hist["created_at"]->toDateString()))}}</p>
                            @endif
                            

                            <h5>Address</h5>
                           <p>{{$hist->Address}}</p>



                            <h5>Remarks</h5>
                            <p>{{$hist->Remarks}}</p>




                        </div>
                        <div id="tickDIv">
                            <i class="fas fa-check-circle"></i>
                        </div>


                        {{--<a href="" data-toggle="modal" data-target="#exampleModal"><span></span></a>--}}


                    </div>

                @endforeach

            @else
                <div class="container col-md-12"><p>Update Client info after your Next visit</p></div>



            @endif


        </div>
    </div>


@endsection

