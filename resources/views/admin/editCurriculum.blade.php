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
                        <h1> Edit Curriculum </h1>
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
                 

                 <form class="form-horizontal" method="post"  action="{{url('/admin/edit_curriculum')}}/{{$Curriculum->id}}" enctype="multipart/form-data">
                 <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Title</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="title" value="{{$Curriculum->title}}" placeholder="e.g Introduction to accounting" class="form-control" />
                        </div>
                </div>


                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Duration</label>

                    <div class="col-lg-8">
                        <input type="text" id="text1" required name="duration" value="{{$Curriculum->duration}}" placeholder="e.g Two weeks" class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Price</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" required name="price" value="{{$Curriculum->price}}" placeholder="Price in USD e.g 20" class="form-control" />
                        </div>
                    </div>
                 <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">
                        <?php
                                                          $course_id = $Curriculum->course_id; 
                                                          $Course = DB::table('product')->where('id',$course_id)->get();
                                                          foreach ($Course as $key => $valuee) {
                                                              echo $valuee->name;
                                                          }
                                                        ?>
                        </label>

                       
                    </div>
                    <div class="form-group">
                    <label class="control-label col-lg-4">Level</label>

                    
                        

                    <div class="col-lg-8">
                        <select name="level" data-placeholder="Choose level" class="form-control chzn-select" tabindex="2">
                          
                           
                              <option selected="selected" value="{{$Curriculum->level}}">{{$Curriculum->level}}</option>
                              <?php $maxP = 13 ;
	                          for($i=1;$i<$maxP;$i++){ ?>
                              <option  value="{{$i}}">{{$i}}</option>
                              <?php } ?>
                             
                            
                          

                        </select>
                    </div>
                    </div>
          
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Curriculum Objectives</h5>
                                    <ul class="nav pull-right">
                                        <li>
                                            <div class="btn-group">
                                                <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                                    href="#div-1">
                                                    <i class="icon-minus"></i>
                                                </a>
                                                 <button class="btn btn-danger btn-xs close-box">
                                                    <i
                                                        class="icon-remove"></i>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </header>
                                <div id="div-1" class="body collapse in">
                                    
                                        <textarea name="objective" id="wysihtml5" class="form-control" rows="10">{{$Curriculum->objectives}}</textarea>

                                    
                                </div>
                            </div>
                        </div>
                   
                    <br><br>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-check icon-white"></i> Save</button>
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