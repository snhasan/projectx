@extends('BDExecutive.master')


@section('content')
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text], select, textarea{
            background-color: #E6E6E6;
            width: 100%;
            padding: 12px;
            border: 1px solid #BDBDBD;
            border-radius: 4px;
            box-sizing: border-box;
            resize: horizontal;
            font-family: "Times New Roman", Times, serif;


        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
            background-color: #A4A4A4;
            width: 80%;
            font-size: 15px;
            border-radius: 4px;
            font-family: "Times New Roman", Times, serif;
        }

        input[type=submit] {
            background-color: #848484;
            color: white;
            padding: 12px 20px;
            border: 3px;
            border-radius: 4px;
            cursor: pointer;
            width: 75%;
            margin-top: 25px;
            font-family: "Times New Roman", Times, serif;



        }

        input[type=submit]:hover {
            background-color: #2E2E2E;
        }



        .container {
            border-radius: 5px;
            background-color: #FFFFFF;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 20%;
            margin-top: 6px;

        }

        .col-75 {
            float: left;
            width: 55%;
            margin-top: 6px;

        }

        .col-25:hover {
            transform: scale(1.05); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }

        .col-75:hover {
            transform: scale(1.05); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }


        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media (max-width: 500px) {
            .col-25, .col-75, input[type=submit] {
                width: 70%;
                margin-top: 0;
            }
        }
    </style>









    <div class="container">
        <form method="POST" action="{{url('/submitClientInfo')}}">
            @csrf
            <div class="row">
                <div class="col-25">
                    <label for="fname">Client's Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="name" name="name" placeholder="Client's name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fname">Company Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="Cname" name="CompanyName" placeholder="Company name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fname">Address</label>
                </div>
                <div class="col-75">
                    <input type="text" id="Address" name="Address" placeholder="Address name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fname">Location</label>
                </div>
                <div class="col-75">
                    <input type="text" id="Location" name="Location" placeholder="Location..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Contact Number</label>
                </div>
                <div class="col-75">
                    <input type="text" id="Phone" name="Phone" placeholder="Contact Number..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="country">Status</label>
                </div>
                <div class="col-75">
                    <select id="country" name="Status">
                        <option value="interested">Interested</option>
                        <option value="notInterested">Not Interested</option>
                        <option value="pending">Pending</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="lname">Event Info</label>
                </div>
                <div class="col-75">
                    <input type="text" id="EventInfo" name="EventInfo" placeholder="Event Info..">
                </div>
            </div>



            {{--<div class="row">--}}
                {{--<div class="col-25">--}}
                    {{--<label for="lname">Agent ID</label>--}}
                {{--</div>--}}
                {{--<div class="col-75">--}}
                    {{--<input type="text" id="AgentID" name="AgentID" placeholder="Agent ID..">--}}
                {{--</div>--}}
            {{--</div>--}}

            <div class="row">
                <div class="col-25">
                    <label for="lname">Requirements</label>
                </div>
                <div class="col-75">
                    <input type="text" id="Requirement" name="Requirement" placeholder="Requirements..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="lname">Next Event</label>
                </div>
                <div class="col-75">
                    <input type="date" style="background-color: #E6E6E6;
                           width: 50%;
                           padding: 12px;
                           border: 1px solid #BDBDBD;
                           border-radius: 4px;
                           box-sizing: border-box;
                           resize: horizontal;
                           font-family: serif;"   id="NextEvent" name="NextEvent" placeholder="Next Event ..">
                </div>
            </div>


            <div class="row">
                <div class="col-25">
                    <label for="lname">Deadline</label>
                </div>
                <div class="col-75">
                    <input type="date" style="background-color: #E6E6E6;
            width: 50%;
            padding: 12px;
            border: 1px solid #BDBDBD;
            border-radius: 4px;
            box-sizing: border-box;
            resize: horizontal;
            font-family: serif;" id="Deadline" name="Deadline" placeholder="Deadline..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Remarks</label>
                </div>
                <div class="col-75">
                    <textarea id="Report" name="Remarks" placeholder="Write something.." style="height:100px" required></textarea>
                </div>
            </div>


            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection