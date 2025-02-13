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
                        <h1> Edit Topic </h1>
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
                 

                 <form class="form-horizontal" method="post"  action="{{url('/admin/edit_topic')}}/{{$Topic->id}}" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Title</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="title" value="{{$Topic->title}}" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Video</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="video" value="{{$Topic->video}}" placeholder="MKDHHHS3D" class="form-control" />
                        </div>
                    </div>

               

                    
               

                     <div class="form-group">
                    <label class="control-label col-lg-4">Lesson</label>

                    
                        

                    <div class="col-lg-8">
                        <select name="course_id" data-placeholder="Choose Course" class="form-control chzn-select" tabindex="2">
                             <option selected="selected"  value="{{$Topic->lesson_id}}"><?php $Lesson = DB::table('lessons')->where('id',$Topic->lesson_id)->get(); ?>@foreach($Lesson as $lesson) {{$lesson->title}} @endforeach</option>
                              <?php  $Course = DB::table('lessons')->get(); ?>
                              @foreach($Course as $course)
                              <option  value="{{$course->id}}">Lesson: {{$course->title}} In <?php $CatMajor = DB::table('curriculum')->where('id',$course->course_id)->get() ?>@foreach($CatMajor as $catmajor) {{$catmajor->title}} @endforeach</option>
                              @endforeach
                            
                          

                        </select>
                    </div>
                    </div>
          
                    
          
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Topic Objectives</h5>
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
                                    
                                        <textarea name="objective" id="wysihtml5" class="form-control" rows="10">{{$Topic->content}}</textarea>

                                    
                                </div>
                            </div>
                        </div>
                   
                   

                    <hr>
                    File:
                    <embed src= "{{url('/')}}/uploads/file/{{$Topic->file}}" width= "100%" height= "200">
                    <hr>
                   
                    <br><br>
                    <br><br>
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
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-check icon-white"></i> Save</button>
                    </div>
                    
                    
                    <input type="hidden" name="pdf_cheat" value="{{$Topic->file}}">
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