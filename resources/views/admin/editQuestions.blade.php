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
                        <h1> Edit Questions </h1>
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
                 

                 <form class="form-horizontal" method="post"  action="{{url('/admin/edit_Questions')}}/{{$Question->id}}" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Question</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="question" value="{{$Question->question}}"  class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">choice 1</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="choice1" value="{{$Question->choice1}}"  class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">choice 2</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="choice2" value="{{$Question->choice2}}"  class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">choice 3</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="choice3" value="{{$Question->choice3}}"  class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">choice 4</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="choice4" value="{{$Question->choice4}}"  class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Answer</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="answer" value="{{$Question->answer}}"  class="form-control" />
                        </div>
                    </div>

                   

                   
                     
          
                   
                    
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-check icon-white"></i> Save </button>
                      <a href="{{url('admin/addQuestion/')}}/{{$Question->quiz_id}}"  class="btn btn-success"><i class="icon-plus icon-white"></i> Add Questions </a>
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