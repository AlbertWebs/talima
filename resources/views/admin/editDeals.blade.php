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
                        <h2> Add Deals </h2>
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


                 <form class="form-horizontal" method="post"  action="{{url('/admin/edit_Deals')}}/{{$Deal->id}}" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Deals Title</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="title" value="{{$Deal->title}}" placeholder="e.g Deals" class="form-control" />
                        </div>
                    </div>


                    <center>
                            <div class="form-group col-lg-12">
                            <div class="form-group col-lg-12">
                                <label class="control-label">Featured Image</label>
                                <div class="">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{$Deal->image}}" alt="" /></div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_one" type="file" /></span>
                                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                    <br><br>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Add Deals</button>
                    </div>


                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="image_cheat" value="{{$Deal->image}}">


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


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        $(document).ready(function (e) {
            $('#cat').on('change', e => {
                var val = $('#cat').val();
                $('#sub_cat').empty()
                $.ajax({
                    url: `/admin/get-subcategories/${val}`,
                    success: function(data){
                            var toAppend = '';
                            $.each(data,function(i,o){
                            toAppend += '<option value="'+o.id+'">'+o.title+'</option>';
                        });
                        $('#sub_cat').append(toAppend);


                        }
                })
            })
        })
    </script>
@endsection
