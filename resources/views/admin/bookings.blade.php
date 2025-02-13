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
                        
                        <center><h2> Bookings </h2></center>
                        
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
                                    Bookings
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Booking Type</th>
                                                    <th>View</th>
                                                    <th>Mark</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($Booking as $value)
                                                <tr class="odd gradeX">
                                                    <td>{{$value->id}}</td>
                                                    <td><b>Name:</b> {{$value->name}}<br> <b>Email:</b> {{$value->email}}</td>
                                                    <td>{{$value->category}}</td>
                                                    <td class="center"><a href="{{url('/admin')}}/bookings/explore/{{$value->id}}"   class="btn btn-info"><i class="icon-folder icon-white"></i> View</a></td>
                                                    <td class="center">
                                                    <center>
                                                            @if($value->status == '0')
                                                            <a href="{{url('/admin')}}/swapBooking/{{$value->id}}"  class="btn btn-success"><i class="icon-check icon-white"></i> Mark Confirm </a>
                                                            @else
                                                            <a href="{{url('/admin')}}/swapBooking/{{$value->id}}"  class="btn btn-info"><i class="icon-close icon-white"></i> Mark Pending </a>
                                                            @endif
                                                         
                                                    </center>
                                                    </td>
                                                    <td class="center"><a onclick="return confirm('Delete This Item?')" href="{{url('/admin')}}/deleteBooking/{{$value->id}}"   class="btn btn-danger"><i class="icon-trash icon-white"></i> Del</a></td>
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