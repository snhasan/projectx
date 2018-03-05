@extends('salesUI.salesMaster')
<style>
    .col-form-label {
        text-align: right;
    }

    #header {
        background: #0d6aad;
        padding: 15px;
        margin-bottom: 30px;
        color: white;
        margin-left: 0px;
        margin-right: 0px;
        text-align: center;

    }
    #box
    {
        padding-right: 0px;
        padding-left: 0px;
    }
    #formbox
    {
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 20px;
    }

</style>
@section('content')

    <div class="row justify-content-center">
        <div class="container col-md-6" id="box" style="background: rgba(255,255,255,1);">
            <div id="header"><h3>Client Info</h3></div>

            <form method="POST" action="/submitEntry">

                @csrf

                <div id="formbox">
                <div class="form-group row">
                    <label for="name" class="col-sm-4 col-form-label">Company Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-4 col-form-label">Address</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="address" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="remarks" class="col-sm-4 col-form-label">Comment</label>
                    <div class="col-sm-8">
                        <textarea rows="3" class="form-control" name="remarks" required></textarea>
                    </div>
                </div>

                <div class="form-group row">

                    <label for="status" class="col-sm-4 col-form-label">Status</label>

                    <div class="col-md-8" id="status" name="status" style="text-align: left">
                        <div class="form-check form-check">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                   value="Interested" required>
                            <label class="form-check-label" for="inlineRadio1">Interested</label>
                        </div>
                        <div class="form-check form-check">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                   value="Pending">
                            <label class="form-check-label" for="inlineRadio2">Pending</label>
                        </div>
                        <div class="form-check form-check">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                                   value="Not Interested">
                            <label class="form-check-label" for="inlineRadio3">Not Interested</label>
                        </div>
                    </div>
                </div>
                </div>

                <div id="header"><h3>Additional Info</h3></div>

                <div id="formbox">

                <div class="form-group row">
                    <label for="requirement" class="col-sm-4 col-form-label">Requirement</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="requirement">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nextEvent" class="col-sm-4 col-form-label">Next Event Date</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="nextEvent">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="eventInfo" class="col-sm-4 col-form-label">Event Info</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="eventInfo">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="contactPerson" class="col-sm-4 col-form-label">Contact Person</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="contactPerson">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="contactNo" class="col-sm-4 col-form-label">Contact No.</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="contactNo">
                    </div>
                </div>
                </div>





                <button class="col-md-4 btn btn-primary" type="submit">Submit</button>


            </form>
        </div>
    </div>


@endsection

