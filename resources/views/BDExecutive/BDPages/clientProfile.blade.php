@extends('BDExecutive.master')


@section('content')


    <style>




        body {
            background-color: transparent;
        }

        .card-profile {
            max-width: 340px;
            margin: 50px auto;
            background-color: #e6e5e1;
            border-radius: 0;
            border: 0;
            padding-bottom: 10px;
            -webkit-box-shadow: 1em 1em 2em rgba(0, 0, 0, 0.2);
            box-shadow: 1em 1em 2em rgba(0, 0, 0, 0.2);
        }
        .card-profile .card-img-top {

            border-radius: 0;
        }
        .card-profile .card-img-profile {
            max-width: 55%;
            border-radius: 50%;
            margin-top: -95px;
            margin-bottom: 15px;
            border: 5px solid #e6e5e1;
        }
        .card-profile .card-title {
            margin-bottom: 50px;
        }
        .card-profile .card-title small {
            display: block;
            font-size: .8em;
            margin-top: .2em;
        }
        .btn {

            margin: 20px;
        }


    </style>








    <div class='card card-profile text-center' >
        <img alt='' class='card-img-top' src='https://unsplash.it/340/160?image=354'>
        <div class='card-block'>
            <img alt='' class='card-img-profile' src="{{asset('/')}}img/client.png">

            <h4 class='card-title'>
                <h4>{{ $clientById['Contact_Person'] }}</h4>
                <small>{{ $clientById['Company_Name'] }}</small>
            </h4>

            <p>Address: {{$clientById['Address']}}</p>

            <p>Status: {{$clientById['Status']}}</p>

            <!-- {{--<p>Address: {{$Clients['address']}}</p>--}} -->

            @if(Auth::user()->id==$clientById['Agent_ID'])

            <a href="{{url('/editClientProfile',$clientById->id)}}">
                <button class="btn btn-outline-primary btn-success">Edit Information</button>
            </a>
            @endif

        </div>
    </div>



@endsection
