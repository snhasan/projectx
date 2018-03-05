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

        .card-profile .card-title small {
            display: block;
            font-size: .8em;
            margin-top: .2em;
        }
        .btn {

            margin: 20px;
        }


        .col-form-label{
            font-size: .8em;
            padding-right: 10px;

        }

    </style>


    <div class='card card-profile text-center' >

        <form method="POST" enctype="multipart/form-data" action="{{url('/updateProfileBDE')}}" >




            <img alt='' class='card-img-top' src='https://unsplash.it/340/160?image=354'>
                <div class='card-block'>
                    <img alt='' class='card-img-profile' src="images/{{$user['image']}}">



                        <h4 class='card-title'>
                            @csrf

                            <div class="form-group row">
                                <label for="avatar" class="col-sm-5 col-form-label">Chose a Picture</label>
                                <div class="col-sm-12">
                                    <input type="file" class="form-control" name="avatar">
                                </div>
                            </div>








                            <hr>

                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="name" value="{{$user['name']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="email" value="{{$user['email']}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="phone" value="{{$user['phone']}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="address" value="{{$user['address']}}">
                                </div>
                            </div>

                        </h4>


                            <button class="btn btn-outline-primary btn-success">Update</button>

                </div>




          </form>

    </div>


@endsection

