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



        .placeholherBox{
            background-color: #E6E6E6;
            width: 100%;
            padding: 10px;
            border: 1px solid #BDBDBD;
            border-radius: 4px;
            box-sizing: border-box;
            resize: horizontal;
            font-family: serif;"
        }

    </style>


    <div class='card card-profile text-center' >

        <form method="POST" action="{{url('/updateClientProfile') }} " >




            <img alt='' class='card-img-top' src='https://unsplash.it/340/160?image=354'>
            <div class='card-block'>
                <img alt='' class='card-img-profile' src="{{asset('/')}}img/client.png">

                <h4 class='card-title'>
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Contact Person</label>
                        <div class="col-sm-12">
                            <input type="text" class=placeholherBox name="Contact_Person" value="{{ $editClient['Contact_Person'] }}">
                            <input type="hidden" class=placeholherBox name="client_id" value="{{ $editClient['id'] }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Company Name</label>
                        <div class="col-sm-12">
                            <input type="text" class=placeholherBox name="Company_Name" value="{{$editClient['Company_Name']}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-12">
                            <input type="text" class=placeholherBox name="Address" value="{{$editClient['Address']}}">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="address" class="col-sm-3 col-form-label">Contact Number</label>
                        <div class="col-sm-12">
                            <input type="text" class=placeholherBox name="Contact_Number" value="{{$editClient['Contact_Number']}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-12">
                            <select required class=placeholherBox id="country" name="Status">
                                <option value="{{$editClient['Status']}}">{{$editClient['Status']}}</option>    <hr>
                                <option value="Interested']}}">Interested</option>
                                <option value="Not Interested">Not Interested</option>
                                <option value="Pending"  >Pending</option>
                            </select>



                        </div>
                    </div>





                    <div class="form-group row">
                        <label for="address" class="col-sm-3 col-form-label">Event Info</label>
                        <div class="col-sm-12">
                            <input type="text" class=placeholherBox name="Event_Info" value="{{$editClient['Event_Info']}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-3 col-form-label">Requirement</label>
                        <div class="col-sm-12">
                            <input type="text" class=placeholherBox name="Requirement" value="{{$editClient['Requirement']}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-3 col-form-label">Next Event</label>
                        <div class="col-sm-12">

                            <input type="date" class=placeholherBox  id="NextEvent" name="Next_Event" value="{{$editClient['Next_Event']}}">



                        </div>
                    </div>






                    <div class="form-group row">
                        <label for="address" class="col-sm-3 col-form-label">Deadline</label>
                        <div class="col-sm-12">

                            <input type="date" class=placeholherBox  id="NextEvent" name="Next_Event" value="{{$editClient['Deadline']}}">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-3 col-form-label">Remarks</label>
                        <div class="col-sm-12">
                            <input type="text" class=placeholherBox name="Remarks" value="{{$editClient['Remarks']}}" required>
                        </div>
                    </div>


                </h4>


                <button class="btn btn-outline-primary btn-success">Update</button>

            </div>




        </form>

    </div>


@endsection

