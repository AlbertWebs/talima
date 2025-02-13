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
                        <h1> Courses </h1>
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
                                Courses
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Title</th>
                                                    <th>Category</th>
                                                    <th>Level</th>
                                                    <th>Objectives</th>
                                                   
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($Curriculum as $value)
                                                <tr class="odd gradeX">
                                                    <td>{{$value->id}}</td>
                                                    <td>{{$value->title}}</td>
                                                    <td>
                                                        <?php
                                                          $course_id = $value->course_id; 
                                                          $Course = DB::table('product')->where('id',$course_id)->get();
                                                          foreach ($Course as $key => $valuee) {
                                                              echo $valuee->name;
                                                          }
                                                        ?>
                                                    </td>
                                                    <td>{{$value->level}}</td>
                                                    <td>{!!html_entity_decode($value->objectives)!!}</td>
                                                    <td class="center"><a  href="{{url('/admin')}}/editCurriculum/{{$value->id}}"   class="btn btn-info"><i class="icon-pencil icon-white"></i> Edit</a>
                                                    <br><br>
                                                    <a onclick="return confirm('Are You Sure You Want To Delete This Curriculum?')"  href="{{url('/admin')}}/deleteCurriculum/{{$value->id}}"   class="btn btn-danger"><i class="icon-trash icon-white"></i> Delete</a>
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