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
                <center>
                    <div class="col-lg-12 text-center">
                        <h2> Certificates </h2>
                    </div>
                </center>
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
                                Material
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>ID</th>
                                                    <th>Cat</th>
                                                    
                                                    <th>Image</th>
                                                    <th>Edit/Delete</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($Certificate as $material)
                                                <tr class="odd gradeX">
                                                    <td>{{$material->id}}</td>
                                                    <td>
                                                    <?php $Category = DB::table('category')->where('id',$material->cat)->get(); ?>
                                                    @foreach($Category as $value)
                                                        {{$value->cat}}
                                                    @endforeach
                                                    </td>
                                                    <td class="center"><img width="100%" height="200" src="{{url('/')}}/uploads/certificates/{{$material->cert}}"></td>
                                                    <td class="center"><a  href="{{url('/admin')}}/editCert/{{$material->id}}"   class="btn btn-info"><i class="icon-pencil icon-white"></i> Edit</a>
                                                    <br><br><a onclick="return confirm('Are You Sure You Want To Delete This Certificate?')"  href="{{url('/admin')}}/deleteCert/{{$material->id}}"   class="btn btn-danger"><i class="icon-trash icon-white"></i> Delete</a>
                                                    </td>
                                                  
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