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
                        
                        <center><h2> Blog Posts </h2></center>
                        
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
                                    Our Past Works
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Title</th>
                                                    <th>Author</th>
                                                    <th>Image</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($Blog as $value)
                                                <tr class="odd gradeX">
                                                    <td>{{$value->id}}</td>
                                                    <td>{{$value->title}}<br>
                                                    <hr>
                                                    <h3>Breaking News</h3>

                                                    @if($value->breaking == 1)
                                                     <center><b>Breaking News Status: Active</b></center>
                                                    @else
                                                    <a href="{{url('/admin')}}/swapBreaking/{{$value->id}}"   class="btn btn-success"><i class="icon-refresh icon-white"></i> Activate</a>
                                                    @endif
                                                    <hr>
                                                    <h3>Featured Post</h3>
                                                    @if($value->featured == 1)
                                                    <a href="{{url('/admin')}}/swapFeatured/{{$value->id}}"   class="btn btn-danger"><i class="icon-refresh icon-white"></i> Disable Featured</a>
                                                    @else
                                                    <a href="{{url('/admin')}}/swapFeatured/{{$value->id}}"   class="btn btn-success"><i class="icon-refresh icon-white"></i> Enable Featured</a>
                                                    @endif
                                                    <hr>
                                                    
                                                    @if($value->slider_position == 0)
                                                     <center>
                                                     <b>
                                                     <h3>Slider Position</h3>
                                                       <form method="post" action="{{url('/admin/changePosition')}}" id="positionForm_{{$value->id}}">
                                                       {{ csrf_field() }}
                                                           <select name="slider_position">
                                                              <option value="1">1</option>
                                                              <option value="2">2</option>
                                                              <option value="3">3</option>
                                                              <option value="4">4</option>
                                                           </select>
                                                           <input type="hidden" value="{{$value->id}}" name="id">
                                                           <button id="positionBtn_{{$value->id}}" class="btn btn-primary" type="submit">Update</button>
                                                       </form>
                                                     </b>
                                                     </center>
                                                    @else
                                                    <b>Slider Position: </b>{{ $value->slider_position }}
                                                    @endif
                                                    
                                                    </td>
                                                    <td>{{$value->author}}</td>
                                                    @if($value->video == 1)
                                                    <td class="center"><iframe width="100%" height="315"
                                                        src="https://www.youtube.com/embed/{{$value->link}}">
                                                    </iframe> </td>
                                                    @else
                                                    <td class="center"><img width="80" height="80" src="{{url('/')}}/uploads/blog/{{$value->image_one}}"></td>
                                                    @endif
                                                    
                                                    <td class="center"><a href="{{url('/admin')}}/editBlog/{{$value->id}}"   class="btn btn-info"><i class="icon-pencil icon-white"></i> Edit</a></td>
                                                    <td class="center"><a onclick="return confirm('Do you want to delete this Post?')" href="{{url('/admin')}}/delete_Blog/{{$value->id}}"   class="btn btn-danger"><i class="icon-trash icon-white"></i> Del</a></td>
                                                  
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