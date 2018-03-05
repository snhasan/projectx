@extends('admin.master')

@section('content')

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="background-color:  #3498db   ; padding: 15px 15px; margin: 0 auto; border-color: #0D59AF">Meeting</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Meeting List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Contact Person</th>
                                    <th>Company Name</th>
                                    <th>Status</th>
                                    <th>Address</th>
                                    <th>Next Meeting</th>
                                    <th>Remarks</th>
                                    <th>Deadline</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                foreach ($clients as $client){
                                    ?>

                                <tr>

                                    <td><?php echo $client->Contact_Person ?></td>
                                    <td><?php echo $client->Company_Name ?></td>
                                    <td><?php echo $client->Status ?></td>
                                    <td><?php echo $client->Address ?></td>
                                    <td><?php echo $client->Next_Event ?></td>
                                    <td><?php echo $client->Remarks ?></td>
                                    <td><?php echo $client->Deadline ?></td>
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
            <!-- /.row -->


    <!-- /#wrapper -->

    <!-- jQuery -->


    <!-- Bootstrap Core JavaScript -->


    <!-- Metis Menu Plugin JavaScript -->


    <!-- DataTables JavaScript -->


@endsection