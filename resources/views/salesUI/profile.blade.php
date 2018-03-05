@extends('salesUI.salesMaster')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/salesProfile.css') }}">

@section('content')

    <div class="container col-md-12">
        <div class="container col-md-5 mainBox " >
            <div class="container topBox ">

                <div class="container imgBox">
                    <img src="/images/{{$user['image']}}">

                </div>

                <div class="container topText">
                    <h4>{{$user['name']}}</h4>
                    <small>{{$user['designation']}}</small>
                </div>

            </div>

            <hr>

            <div class="container textBox ">

                {{--<h4>Email: </h4>--}}
                <p>Email: {{$user['email']}}</p>
                {{--<h4>Addres </h4>--}}
                <p>Contact No: {{$user['phone']}}</p>
                {{--<h4>Addres </h4>--}}
                <p>Address: {{$user['address']}}</p>




            </div>

            <hr>

            <div class="container buttonBox">
                <a href="/editprofile">
                <button class="btn btn-outline-primary btn-success">Edit Information</button>
</a>
            </div>

        </div>



    </div>

    @endsection

