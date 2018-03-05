@extends('admin.master')



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

        <form method="POST" action="{{url('/AupdateClientProfile') }} " >




            <img alt='' class='card-img-top' src='https://unsplash.it/340/160?image=354'>
            <div class='card-block'>
                <img alt='' class='card-img-profile' src="{{asset('/')}}img/client.png">

                <h4 class='card-title'>
                    @csrf

                     <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Contact Person</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="Contact_Person" value="{{ $AeditClient['Contact_Person'] }}">
                            <input type="hidden" class="form-control" name="client_id" value="{{ $AeditClient['id'] }}">
                        </div>
                    </div>

                    

                    <div class="form-group row">
                        <label for="address" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="Status" value="{{$AeditClient['Status']}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-sm-3 col-form-label">Assign Agent</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="Agent_ID" value="{{$AeditClient['users.name']}}">

                                @foreach($agents as $agent)
                                    <option value="{{$agent['id']}}"> {{$agent['name']}}</option>

                                    @endforeach

                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="address" class="col-sm-3 col-form-label">Remarks</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="Remarks" value="{{$AeditClient['Remarks']}}">
                        </div>
                    </div>


                </h4>


                <button class="btn btn-outline-primary btn-success">Update</button>

            </div>




        </form>

    </div>


@endsection

