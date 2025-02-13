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
                        <h1> Questions </h1>
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
                                Questions
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Curriculum</th>
                                                    <th>Question</th>
                                                    <th>Answer</th>
                                                    <th>Edit</th>
                                                   
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($Questions as $value)
                                                <tr class="odd gradeX">
                                                    <td>
                                                       <?php
                                                          $ExamInfo = DB::table('examinfos')->where('id',$value->quiz_id)->get();
                                                          foreach ($ExamInfo as $key => $exam) {
                                                              $Curriculum  = DB::table('curriculum')->where('id',$exam->Course)->get();
                                                              foreach ($Curriculum as $key => $curriculum) {
                                                                  $Course = DB::table('product')->where('id',$curriculum->course_id)->get();
                                                                  foreach ($Course as $key => $course) {
                                                                      echo $course->name;
                                                                  }
                                                              }
                                                          }
                                                       ?>
                                                    </td>
                                                    <td>{{$value->question}}</td>
                                                    <td>{{$value->answer}}</td>
                                                    <td><center><a class="btn btn-primary" href="{{url('admin')}}/editQuestions/{{$value->id}}">Edit</a></center></td>
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