@extends('salesUI.salesMaster')
<style>
    .mainBox
    {
        padding-top: 20px;
        padding-bottom: 200px;
        background: #ffffff;
    }

    img
    {
        height: 50px;
        width: 50px;
        border-radius: 50%;
        padding: 10px;
    }
</style>
@section('content')

    <div class="container col-md-12">
        <div class="container col-md-5 mainBox " >



            <form method="POST" action="/updateprofile" enctype="multipart/form-data">

                @csrf

                <div class="form-group row">
                    <div class="col-md-2">
                        <img src="images/{{$user->image}}">
                    </div>

                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="avatar">
                    </div>
                </div>

                <hr>

                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" value="{{$user['name']}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" value="{{$user['email']}}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="phone" value="{{$user['phone']}}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="address" value="{{$user['address']}}">
                    </div>
                </div>




                <hr>

                    <button class="col-md-4 btn btn-outline-primary" type="submit">Update</button>






            </form>












        </div>



    </div>

@endsection

