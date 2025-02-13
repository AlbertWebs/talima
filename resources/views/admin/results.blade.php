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
                        <h1> Results </h1>
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
                                Results
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Student</th>
                                                    <th>Exam</th>
                                                    <th>Score</th>
                                                    <th>Action</th>
                                                   
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($Results as $value)
                                                <tr class="odd gradeX">
                                                    <td>
                                                       <?php
                                                          $Student = DB::table('users')->where('id',$value->student_id)->get();
                                                          foreach ($Student as $key => $student) {
                                                             echo $student->name;
                                                              
                                                          }
                                                       ?>
                                                    </td>

                                                    <td>
                                                       <?php
                                                         
                                                          $ExamInfo = DB::table('examinfos')->where('uniqueid',$value->uniqueid)->first();
                                                            $Curriculum  = DB::table('curriculum')->where('id',$ExamInfo->Course)->first();
                                                                $Course = DB::table('product')->where('id',$Curriculum->course_id)->get();
                                                                foreach ($Course as $key => $course) {
                                                                    echo $course->name;
                                                                }
                                                       ?>
                                                    </td>
                                                    <td>
                                                    <?php
                                                          $ExamInfo = DB::table('examinfos')->where('uniqueid',$value->uniqueid)->first();
                                                          
                                                             echo $score = $value->score;
                                                             echo " out of ";
                                                             echo $total = $ExamInfo->question_lenth;
                                                            
                                                          
                                                       ?>
                                                    </td>
                                                    
                                                    <td><center><a class="btn btn-primary" href="{{url('admin')}}/action/{{$value->id}}">Action</a></center></td>
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