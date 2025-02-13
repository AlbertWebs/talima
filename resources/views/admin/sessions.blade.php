@extends('admin.master')

@section('content')
<div id="wrap" >
        

        <!-- HEADER SECTION -->
        @include('admin.top')
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
        @include('admin.left')
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1> Sessions Monitoring </h1>
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        @include('admin.panel')

                    </div>

                </div>
                  <!--END BLOCK SECTION -->
                <hr />
                 
                 <!-- COMMENT AND NOTIFICATION  SECTION -->
                   <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Sessions Monitoring
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>

                                                    <th>No</th>
                                                    <th>Student</th>
                                                    <th>Last Ip Address</th>
                                                    <th>Last Login</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($Users as $value)
                                                <tr class="odd gradeX">
                                                    <td>{{$value->id}}</td>
                                                    <td>
                                                    <center>
                                                         <?php
                                                             
                                                            
                                                                 echo $value->name;
                                                                 echo "<br>";
                                                                 echo $value->email;
                                                                 echo "<br>";
                                                                 echo $value->mobile;
                                                                 echo "<br>";
                                                                
                                                             
                                                          ?>
                                                    </center>
                                                    </td>
                                                    <td>
                                                       <center>{{$value->last_login_ip}}</center>
                                                    
                                                    </td>
                                                    <td>
                                                    <center>
                                                    <?php  
                                                        $timestamp = $value->last_login_at;
                                                         $rangee =  timeAgo($timestamp);
                                                        echo $rangee;
                                                    ?>
                                                    </center>
                                                    </td>
                                                    
                                                    <td>
                                                    <center>
                                                    <!-- Find Time Difference -->
                                                    <?php  
                                                        $timestamp = $value->last_login_at;
                                                         $range =  timeAgoSession($timestamp);
                                                       
                                                    ?>
                                                   
                                                    @if($range <= 7)
                                                      <a href="#"   class="btn btn-success"><i class="icon-smile icon-white"></i> Active </a>
                                                    @elseif($range <= 14)
                                                      <a href="#"   class="btn btn-info"><i class="icon-smile icon-white"></i>Fairly Active </a>
                                                    @elseif($range <= 21)
                                                      <a href="#"   class="btn btn-warning"><i class="icon-frown icon-white"></i> Inactive </a>
                                                    @elseif($range > 30)
                                                    <a href="#"   class="btn btn-danger"><i class="icon-frown icon-white"></i>Very Inactive </a>
                                                    @else
                                                    <a href="#"   class="btn btn-danger"><i class="icon-frown icon-white"></i>Error </a>
                                                    @endif
                                                    </center>
                                                    </td>
                                                    <?php 
                                                        if($range > 7){
                                                            // Mail The Admin
                                                        }
                                                    ?>
                                                  
                                                </tr>
                                            @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- END COMMENT AND NOTIFICATION  SECTION -->
                



                
            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
         @include('admin.right')
         <!-- END RIGHT STRIP  SECTION -->
    </div>

@endsection