@extends('salesUI.salesMaster')

<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/salesHome.css') }}">


<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>

@section('content')

    <div class="container ">


        <div class="container">

            <h5>Create Entry</h5>


            <div class="row justify-content-center">


                <div class="col-md-4" id="createBox">

                    <div class="container" id="iconDiv">
                        <i class="fas fa-user-plus"></i>

                    </div>

                    <p>After each visit, <br>Fill up the following information form</p>


                    <a href="/create">
                        <button class="btn btn-outline-primary">Create</button>
                    </a>
                </div>
            </div>
        </div>

        <hr>


        <div class="container">


            <h5>Follow Up List</h5>

            <div class="row justify-content-center" id="followUpDiv">
                @if(count($clients)>0)

                    @foreach($clients as $client)

                        <div class="col-md-3" id="cardBox">
                            <div class="cardHeader">
                                <h5>{{$client["Company_Name"]}}</h5>
                            </div>
                            <div class="container" id="cardBody">
                                <h4>Address</h4>
                                <p>{{$client->Address}}</p>
                                <h4>Status</h4>
                                <p>{{$client->Status}}</p>

                                @if($client["Next_Event"]!=null)
                                    <h4>Next Event</h4>
                                    <p>{{date('d M, Y', strtotime($client['Next_Event']))}}</p>
                                @endif

                                @if($client["Contact_Person"]!=null)
                                    <h4>Contact Person</h4>
                                    <p>{{$client["Contact_Person"]}}</p>
                                @endif

                                @if($client["Contact_Number"]!=null)
                                    <h4>Contact Number</h4>
                                    <p>{{$client["Contact_Number"]}}</p>
                                @endif

                                {{--<div id="followIconDiv" class="">
                                    <i class="fas fa-chevron-right"></i></div>--}}




                            </div>
                            {{--<a href=""--}}
                            {{--class="send"--}}
                            {{--data-target="#exampleModal"--}}
                            {{--data-toggle="modal"--}}
                            {{--id="{{$client["id"]}}"--}}
                            {{--data-id="{{$client["id"]}}"--}}
                            {{--data-name="{{$client["Company Name"]}}"--}}
                            {{--data-address="{{$client["Address"]}}"--}}

                            {{-->--}}



                            {{--<span></span>--}}
                            {{--</a>--}}

                            <a href='/updateEntry/{{$client->id}}'><span></span></a>



                        </div>

                    @endforeach

                @else
                    <p class="small">No Follow-Ups Assigned to You at the Moment</p>



                @endif
            </div>


        </div>


    </div>
    @include('include.salesHomeModal')



    {{--<script>--}}
    {{--$(document).on('click', '.add', function() {--}}
    {{--$('.modal-title').val($(this).data('name'));--}}

    {{--$('.form-horizontal').show();--}}
    {{--$('#myModal').modal('show');--}}
    {{--});--}}
    {{--</script>--}}













@endsection