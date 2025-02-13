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
                        <h2> Edit: {{$Car->name}} </h2>
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
                 

                 <form class="form-horizontal" method="post"  action="{{url('/admin/edit_Car')}}/{{$Car->id}}" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Car Name</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="name" value="{{$Car->name}}" placeholder="e.g Chrysler 300" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Model</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="model" value="{{$Car->model}}" placeholder="e.g Chrysler" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Price</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="price" value="{{$Car->price}}" placeholder="e.g KES 20000 per Day " class="form-control" />
                        </div>
                    </div>
                    
                    <!-- Metrix  -->
                    <hr>
                    <center><strong class="text-center">Metrix</strong></center>
                    <p class="help-block text-center">Year of Make, Milage, Engine,Capacity, Top Speed, luggage, Doors, Fuel</p>
                    <div class="form-group">
                        
                        <div class="col-lg-3">
                            <input type="text" id="text1" name="year" value="{{$Car->year}}" placeholder="e.g 2019" class="form-control" />
                        </div>
                        <div class="col-lg-3">
                            <input type="text" id="text1" name="milage" value="{{$Car->milage}}" placeholder="e.g 12000KM" class="form-control" />
                        </div>
                        <div class="col-lg-3">
                            <input type="text" id="text1" name="engine" value="{{$Car->engine}}" placeholder="e.g 2800cc" class="form-control" />
                        </div>
                        <div class="col-lg-3">
                            <input type="text" id="text1" name="capacity" value="{{$Car->capacity}}" placeholder="e.g 7 Seater" class="form-control" />
                        </div>
                        
                    </div>

                    <div class="form-group">
                        
                        <div class="col-lg-3">
                            <input type="text" id="text1" name="speed" value="{{$Car->speed}}" placeholder="e.g 240KMPH" class="form-control" />
                        </div>
                        <div class="col-lg-3">
                            <input type="text" id="text1" name="luggage" value="{{$Car->luggage}}" placeholder="e.g 3 for 3 big luggages " class="form-control" />
                        </div>
                        <div class="col-lg-3">
                            <input type="text" id="text1" name="engine" value="{{$Car->engine}}" placeholder="e.g 4 for 4 Doors" class="form-control" />
                        </div>
                        <div class="col-lg-3">
                            <input type="text" id="text1" name="fuel" value="{{$Car->fuel}}" placeholder="e.g Disel" class="form-control" />
                        </div>
                        
                    </div>
                    <hr>
                    <!-- Metrix -->

                    <!-- Metrix  -->
                    <hr>
                    <center><strong class="text-center">Additional Features</strong></center>
                    <p class="help-block text-center">Navigation System,Child Seat, Music System</p>
                    <div class="form-group">
                        
                        <div class="col-lg-4">
                            <input type="text" id="text1" name="navigation" value="{{$Car->navigation}}" placeholder="e.g Available" class="form-control" />
                        </div>
                        <div class="col-lg-4">
                            <input type="text" id="text1" name="child" value="{{$Car->child}}" placeholder="e.g 1200 for 1200/=" class="form-control" />
                        </div>
                        <div class="col-lg-4">
                            <input type="text" id="text1" name="music" value="{{$Car->music}}" placeholder="e.g Available" class="form-control" />
                        </div>
                      
                        
                    </div>

                    
                    <hr>
                    <!-- Metrix -->

                    
                    

                   

                    <div class="form-group">
                    <label class="control-label col-lg-4">Transmission</label>

                    
                        

                    <div class="col-lg-8">
                        <select name="transmission" data-placeholder="Select transmission" class="form-control chzn-select" tabindex="2">
                        
                        <option selected value="{{$Car->transmission}}">Auto</option>
                              <option value="Auto">Auto</option>
                              <option value="manual">Manual</option>
                 
                        </select>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-lg-4">Car Type</label>

                    
                        

                    <div class="col-lg-8">
                        <select name="cartype" data-placeholder="Select Car type" class="form-control chzn-select" tabindex="2">
                           
                           <?php $CarType = DB::table('cartypes')->where('id',$Car->category)->get(); ?>
                           @foreach($CarType as $Alien)
                           <option selected="selected" value="{{$Car->category}}">{{$Alien->name}}</option>
                           @endforeach
                           <?php $TheCategoryList = DB::table('cartypes')->get(); ?>
                           @foreach($TheCategoryList as $value)
                              <option value="{{$value->id}}">{{$value->name}}</option>
                           @endforeach
                           

                        </select>
                    </div>
                    </div>



                    

                    <div class="form-group">
                        <label for="limiter" class="control-label col-lg-4">Meta Data</label>

                        <div class="col-lg-8">
                            <textarea id="limiter" name="meta" class="form-control">{{$Car->meta}}</textarea>
                            <p class="help-block">Add Limited Words To Describe The News</p>
                        </div>
                    </div>


                  
          
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Description</h5>
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
                                    
                                        <textarea name="content" id="wysihtml5" class="form-control" rows="10">{{$Car->content}}</textarea>

                                    
                                </div>
                            </div>
                        </div>
                   
                    <center>
                    <div class="form-group col-lg-12">
                    <div class="form-group col-lg-4">
                        <label class="control-label">Featured Image</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/Cars/{{$Car->image_one}}" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_one" type="file" /></span>
                                    <!--  -->
                                    <a href="{{url('/')}}/admin/deleteImage/{{$Car->id}}/image_one/cars" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
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
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/Cars/{{$Car->image_two}}" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_two" type="file" /></span>
                                    <!--  -->
                                    <a href="{{url('/')}}/admin/deleteImage/{{$Car->id}}/image_two/cars" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
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
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/Cars/{{$Car->image_three}}" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_three" type="file" /></span>
                                    <!--  -->
                                    <a href="{{url('/')}}/admin/deleteImage/{{$Car->id}}/image_three/cars" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
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
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/Cars/{{$Car->image_four}}" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_four" type="file" /></span>
                                    <!--  -->
                                    <a href="{{url('/')}}/admin/deleteImage/{{$Car->id}}/image_four/cars" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
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
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/Cars/{{$Car->image_five}}" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_five" type="file" /></span>
                                    <!--  -->
                                    <a href="{{url('/')}}/admin/deleteImage/{{$Car->id}}/image_five/cars" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
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
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/Cars/{{$Car->image_six}}" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_six" type="file" /></span>
                                    <!--  -->
                                    <a href="{{url('/')}}/admin/deleteImage/{{$Car->id}}/image_six/cars" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
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
                    
                    <input type="hidden" name="image_one_cheat" value="{{$Car->image_one}}">
                    <input type="hidden" name="image_two_cheat" value="{{$Car->image_two}}">
                    <input type="hidden" name="image_three_cheat" value="{{$Car->image_three}}">
                    <input type="hidden" name="image_four_cheat" value="{{$Car->image_four}}">
                    <input type="hidden" name="image_five_cheat" value="{{$Car->image_five}}">
                    <input type="hidden" name="image_six_cheat" value="{{$Car->image_six}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                <form>
                <br>
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