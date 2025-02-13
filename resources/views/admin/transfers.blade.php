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
                    <div class="col-lg-12 text-center">
                        <h2> Transfers </h1>
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
                                    Transfers
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Details</th>
                                                    
                                                    <th>Image</th>
                                                    <th>Edit</th>
                                                    <th>Del</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($Transfer as $value)
                                                <tr class="odd gradeX">
                                                    <td>{{$value->id}}</td>
                                                    <td>
                                                        From: {{$value->from}}<br>
                                                        To: {{$value->to}}<br>
                                                        Depature Time: {{$value->dep}}<br>
                                                        Duration: {{$value->duration}}<br>
                                                        Mode: {{$value->mode}}<br>
                                                        Capacity: {{$value->capacity}}<br>
                                                        Price: {{$value->price}}<br>
                                                    </td>
                                                    <td class="center"><img width="200"  src="{{url('/')}}/uploads/transfers/{{$value->image}}"></td>
                                                    <td class="center"><a href="{{url('/admin')}}/editTransfer/{{$value->id}}"   class="btn btn-info"><i class="icon-pencil icon-white"></i> Edit</a></td>
                                                    <td class="center"><a onclick="return confirm('Delete this transfer? You may not be able to undo this step')" href="{{url('/admin')}}/deleteTransfer/{{$value->id}}"   class="btn btn-danger"><i class="icon-trash icon-white"></i> Del</a></td>
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