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
                        <h2> Rooms </h2>
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
                                    All Products
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                   
                                                    <th>Image</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                            @foreach($Room as $value)
                                                <tr class="odd gradeX">
                                                    <td>{{$value->id}}</td>
                                                    <td>{{$value->name}}
                                                    <hr>
                                                    Hotel : <?php $Hotel = DB::table('hotels')->where('id',$value->hotel_id)->get(); ?> 
                                                            @foreach($Hotel as $hotel)
                                                               {{$hotel->name}}
                                                            @endforeach
                                                            <br>
                                                    </td>
                                                    
                                                    
                                                    <td class="center"><img width="100%" height="200" src="{{url('/')}}/uploads/rooms/{{$value->image_one}}"></td>
                                                    <td class="center"><a href="{{url('/admin')}}/editRoom/{{$value->id}}"   class="btn btn-info"><i class="icon-pencil icon-white"></i> Edit</a>
                                                     @if($value->availability == 0)
                                                         <br><hr><br><a href="{{url('/admin')}}/swapRoom/{{$value->id}}"   class="btn btn-success"><i class="icon-check icon-white"></i> Mark Available</a>
                                                     @else
                                                          <br><hr><br><a href="{{url('/admin')}}/swapRoom/{{$value->id}}"   class="btn btn-danger"><i class="icon-frawn icon-white"></i> Mark Unavailable</a>
                                                     @endif

                                                    
                                                    </td>
                                                    <td class="center"><a onclick="return confirm('Do you want to delete this Hotel?')" href="{{url('/admin')}}/deleteRoom/{{$value->id}}"   class="btn btn-danger"><i class="icon-trash icon-white"></i> Del</a></td>
                                                  
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