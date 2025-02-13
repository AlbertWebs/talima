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
                        <h1> Add Material </h1>
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
                   <!-- CHART & CHAT  SECTION -->
              
                 <!--END CHAT & CHAT SECTION -->
               
                  <!-- Inner Content Here -->
                 
            <div class="inner">
                

              <div class="row">
               <center>
                 @if(Session::has('message'))
							   <div class="alert alert-success">{{ Session::get('message') }}</div>
				@endif

                @if(Session::has('messageError'))
							   <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
				@endif
                 </center>
                 

                 <form class="form-horizontal" method="post"  action="{{url('/admin/add_material')}}" enctype="multipart/form-data">
                 <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Title</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="title" value="" placeholder="e.g Introduction" class="form-control" />
                        </div>
                    </div>
                 

          
                  <div class="form-group">
                    <label class="control-label col-lg-4">Curriculum</label>
                    <div class="col-lg-8">
                        <select name="curriculum_id" data-placeholder="Choose Curriculum" class="form-control chzn-select" tabindex="2">
                          
                           <?php $Curriculum = DB::table('curriculum')->get(); ?>
                           @foreach($Curriculum as $value)
                              <option value="{{$value->id}}">
                                  <?php 
                                      $CourseID = $value->course_id;
                                      $Course = DB::table('product')->where('id',$CourseID)->get();
                                      foreach ($Course as $key => $valuee) {
                                          # code...
                                          echo $valuee->name;
                                          echo " | Level";
                                          echo $value->level;
                                          echo " | ";
                                          echo $value->title;
                                      }
                                  ?>
                              </option>
                           @endforeach

                        </select>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Video Link</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="video" value="" placeholder="e.g VRSZHSG7JS" class="form-control" />
                        </div>
                    </div>

                    
                   

                    <div class="form-group">
                        <label class="control-label col-lg-4">PDF/Document File</label>
                        <div class="col-lg-8">
                            <div class="fileupload fileupload-new" data-provides="fileupload">



                                <div class="input-group">
                                    

                                    <span class="btn btn-file btn-info">
                                        <span class="fileupload-new">Select file</span>
                                        <span class="fileupload-exists">Change</span>
                                        <input type="file" name="pdf"/>
                                    </span> 
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    
                                    <br /> <br />
                                    <div class="col-lg-3">
                                        <i class="icon-file fileupload-exists"></i>
                                        <span class="fileupload-preview"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <br><br>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Add Material</button>
                    </div>
                    
                    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                <form>
              </div>

            </div>
                  <!-- Inner Content Ends Here -->



                
            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
        @include('admin.right')
         <!-- END RIGHT STRIP  SECTION -->
    </div>

@endsection