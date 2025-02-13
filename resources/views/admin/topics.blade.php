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
                        <h1> Topics </h1>
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
                                curriculum
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Title</th>
                                                    <th>Parent Lesson</th>
                                                    
                                                    <th>Objectives</th>
                                                   
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($Topic as $value)
                                                <tr class="odd gradeX">
                                                    <td>{{$value->id}}</td>
                                                    <td>{{$value->title}}</td>
                                                    <td>
                                                        <?php
                                                          $course_id = $value->lesson_id; 
                                                          $Course = DB::table('lessons')->where('id',$course_id)->get();
                                                          foreach ($Course as $key => $valuee) {
                                                              echo $valuee->title;
                                                          }
                                                        ?>
                                                    </td>
                                                    
                                                    <td>{!!html_entity_decode($value->content)!!}
                                                    <hr>
                                                    Video:
                                                    <br>
                                                    <embed src="https://www.youtube.com/embed/{{$value->video}}?rel=0" allowfullscreen="true" autoplay="false" height="100" width="100"  />
                                                    <hr>
                                                    File:
                                                    <br>
                                                    <embed src= "{{url('/')}}/uploads/file/{{$value->file}}" width= "200" height= "200">
                                                    </td>
                                                    <td class="center"><a  href="{{url('/admin')}}/editTopic/{{$value->id}}"   class="btn btn-info"><i class="icon-pencil icon-white"></i> Edit</a>
                                                    <br><br>
                                                    <a onclick="return confirm('Are You Sure You Want To Delete This Curriculum?')"  href="{{url('/admin')}}/deleteTopics/{{$value->id}}"   class="btn btn-danger"><i class="icon-trash icon-white"></i> Delete</a>
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