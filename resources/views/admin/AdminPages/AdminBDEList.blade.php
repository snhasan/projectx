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
                                        <th>user ID</th>
                                        <th>user Name</th>
                                        <th>user email</th>
                                        <th>Address</th>
                                        <th>Contact Number</th>
                                      
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                    foreach ($users as $user){
                                    ?>
                                    <tr class="odd gradeX">

                                        <td><?php echo $user->id ?></td>
                                        <td> <a href="{{ url('AdminBDEProfile',$user->id) }}"> <?php echo $user->name?></a></td>
                                        <td><?php echo $user->email?></td>
                                        <td><?php echo $user->address?></td>

                                        <td><?php echo $user->phone?></td>

                                    
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