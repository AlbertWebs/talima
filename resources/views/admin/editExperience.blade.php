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
                        <h2> Edit Holidays/Experiences </h2>
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
                 

                 <form class="form-horizontal" method="post"  action="{{url('/admin/edit_Experience')}}/{{$Experience->id}}" enctype="multipart/form-data">
                    
                 <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Destination Title</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="title" value="{{$Experience->title}}" placeholder="e.g Gurtnellen, Swetzerland " class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Location</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="location" value="{{$Experience->location}}" placeholder="e.g Gurtnellen, Swetzerland " class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Price</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="price" value="{{$Experience->price}}" placeholder="e.g Gurtnellen, Swetzerland " class="form-control" />
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Duration</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="duration" value="{{$Experience->duration}}" placeholder="e.g 2 Days 3 Nights " class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Date</label>

                        <div class="col-lg-8">
                        <input type="date" id="date2" name="date" value="{{$Experience->date}}" class="form-control" />
                        </div>
                    </div>

                   

                    <div class="form-group">
                    <label class="control-label col-lg-4">Guides</label>

                    
                        

                    <div class="col-lg-8">
                        <select name="guide" data-placeholder="Select Guide" class="form-control chzn-select" tabindex="2">
                        <option selected value="{{$Experience->guide}}"><?php $Guide = DB::table('guides')->where('id',$Experience->guide)->get();   ?>@foreach($Guide as $guide) {{$guide->name}} @endforeach</option>
                           <?php $TheCategoryList = DB::table('guides')->get(); ?>
                           @foreach($TheCategoryList as $value) 
                              <option value="{{$value->id}}">{{$value->name}}</option>
                           @endforeach

                        </select>
                    </div>
                    </div>
                       
                    <div class="form-group">
                        <label class="control-label col-lg-4">Country</label>
    
                        
                            
    
                        <div class="col-lg-8">
                            <select name="country" data-placeholder="Select Country" class="form-control chzn-select" tabindex="2">
                            <option selected value="{{$Experience->country}}"><?php $Guide = DB::table('countries')->where('id',$Experience->country)->get();   ?>@foreach($Guide as $guide) {{$guide->title}} @endforeach</option>
                               <?php $TheCategoryList = DB::table('countries')->get(); ?>
                               @foreach($TheCategoryList as $value) 
                                  <option value="{{$value->id}}">{{$value->title}}</option>
                               @endforeach
    
                            </select>
                        </div>
                    </div>

                    <!--  -->
                    <div class="form-group">
                    <label class="control-label col-lg-4">Town</label>

                    
                        

                    <div class="col-lg-8">
                        <select name="town" data-placeholder="Select Guide" class="form-control chzn-select" tabindex="2">
                           <option selected value="{{$Experience->destination}}">{{$Experience->destination}}</option>
                           <?php $TheCategoryList = DB::table('towns')->get(); ?>
                           @foreach($TheCategoryList as $value)
                              <option value="{{$value->name}}">{{$value->name}}</option>
                           @endforeach
                           <option value="Other">Other</option>
                        </select>
                    </div>
                    </div>
                    <!--  -->

                    <div class="form-group">
                    <label class="control-label col-lg-4">Category</label>

                    
                        

                    <div class="col-lg-8">
                        <select name="cat" data-placeholder="Select Guide" class="form-control chzn-select" tabindex="2">
                        <option selected value="{{$Experience->cat}}"><?php $Guide = DB::table('category')->where('id',$Experience->cat)->get();   ?>@foreach($Guide as $guide) {{$guide->cat}} @endforeach</option>
                           <?php $TheCategoryList = DB::table('category')->get(); ?>
                           @foreach($TheCategoryList as $value) 
                              <option value="{{$value->id}}">{{$value->cat}}</option>
                           @endforeach

                        </select>
                    </div>
                    </div>

                    

                    <div class="form-group">
                        <label for="limiter" class="control-label col-lg-4">Meta Data</label>

                        <div class="col-lg-8">
                            <textarea id="limiter-experience" name="meta" class="form-control">{{$Experience->meta}}</textarea>
                            <p class="help-block">Add Limited Words To Describe The News</p>
                        </div>
                    </div>


                  
          
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5> Description</h5>
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
                                    
                                        <textarea name="content" id="wysihtml5" class="form-control" rows="10">{{$Experience->content}}</textarea>

                                    
                                </div>
                            </div>
                        </div>
                   
                        <center>
                    <div class="form-group col-lg-12">
                    <div class="form-group col-lg-4">
                        <label class="control-label">Featured (500by333)</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/experiences/{{$Experience->image_one}}" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_one" type="file" /></span>
                                    <!--  -->
                                    <a href="{{url('/')}}/admin/deleteImage/{{$Experience->id}}/image_one/experiences" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
                                    <!--  -->
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-lg-4">
                        <label class="control-label">Image Two</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/experiences/{{$Experience->image_two}}" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_two" type="file" /></span>
                                    <!--  -->
                                    <a href="{{url('/')}}/admin/deleteImage/{{$Experience->id}}/image_two/experiences" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
                                    <!--  -->
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-lg-4">
                        <label class="control-label">Image Three</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/experiences/{{$Experience->image_three}}" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_three" type="file" /></span>
                                    <!--  -->
                                    <a href="{{url('/')}}/admin/deleteImage/{{$Experience->id}}/image_three/experiences" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
                                    <!--  -->
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-lg-4">
                        <label class="control-label">Image Four</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/experiences/{{$Experience->image_four}}" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_four" type="file" /></span>
                                    <!--  -->
                                    <a href="{{url('/')}}/admin/deleteImage/{{$Experience->id}}/image_four/experiences" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
                                    <!--  -->
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-lg-4">
                        <label class="control-label">Image Five</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/experiences/{{$Experience->image_five}}" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_five" type="file" /></span>
                                    <!--  -->
                                    <a href="{{url('/')}}/admin/deleteImage/{{$Experience->id}}/image_five/experiences" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
                                    <!--  -->
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-lg-4">
                        <label class="control-label">Image Six</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/experiences/{{$Experience->image_six}}" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_six" type="file" /></span>
                                    <!--  -->
                                    <a href="{{url('/')}}/admin/deleteImage/{{$Experience->id}}/image_six/experiences" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
                                    <!--  -->
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   
                   

                    
                    </div>
                    </center>
                    <br><br>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-check icon-white"></i> Save </button>
                    </div>
                    
                    <input type="hidden" name="image_one_cheat" value="{{$Experience->image_one}}">
                    <input type="hidden" name="image_two_cheat" value="{{$Experience->image_two}}">
                    <input type="hidden" name="image_three_cheat" value="{{$Experience->image_three}}">
                    <input type="hidden" name="image_four_cheat" value="{{$Experience->image_four}}">
                    <input type="hidden" name="image_five_cheat" value="{{$Experience->image_five}}">
                    <input type="hidden" name="image_six_cheat" value="{{$Experience->image_six}}">
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