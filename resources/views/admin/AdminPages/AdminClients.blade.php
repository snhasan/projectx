@extends('admin.master')

@section('content')


         
    <style>

        .fa {

            margin-right: : 2px;
            }


        .btn {
            position: relative;

            margin:20px 0px;
            }


    </style>




                <div class="row">
                    <div class="col-lg-12">
                        
             
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Client List
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Client ID</th>
                                        <th>Client Name</th>
                                        <th>Company Name</th>
                                        <th>Address</th>
                                        <th>Location</th>
                                        <th>Contact Number</th>
                                        <th>Status</th>
                                        <th>Next Event</th>
                                        <th>Event Info</th>
                                        <th>Requirements</th>
                                        <th>Remarks</th>
                                        <th>Deadline</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                    foreach ($clients as $client){
                                    ?>
                                    <tr class="odd gradeX">

                                        <td><?php echo $client->id ?></td>
                                        <td> <a href="{{ url('AdminClientProfile',$client->id) }}"> <?php echo $client->Contact_Person?></a></td>
                                        <td><a href="{{ url('AdminClientProfile',$client->id) }}">  <?php echo $client->Company_Name?></a></td>
                                        <td><?php echo $client->Address?></td>
                                        <td><?php echo $client->Location?></td>

                                        <td><?php echo $client->Contact_Number?></td>


                                        <td><?php echo $client->Status?></td>
                                        <td><?php echo $client->Next_Event?></td>
                                        <td><?php echo $client->Event_Info?></td>
                                        <td><?php echo $client->Requirement?></td>
                                        <td><?php echo $client->Remarks?></td>
                                        <td><?php echo $client->Deadline?></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>





                                    </tbody>
                                </table>
                                <!-- /.table-responsive -->

                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>





@endsection