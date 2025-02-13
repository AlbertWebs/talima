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
                        <h1> All Exams</h1>
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
                                    ExamsInfo
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Instructor</th>
                                                    <th>Curriculum</th>
                                                    <th>Number Of Questions</th>
                                                    <th>Questions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($Exam as $value)
                                                <tr class="odd gradeX">
                                                    
                                                    <td>
                                                         <?php
                                                             $Instructor = DB::table('teachers')->where('id',$value->Teacher_id)->get();
                                                             foreach ($Instructor as $key => $instructor) {
                                                                 echo $instructor->name;
                                                             }
                                                          ?>
                                                    </td>
                                                    <td>
                                                        <?php $Curriculum = DB::table('curriculum')->where('id',$value->Course)->get() ?>
                                                        @foreach($Curriculum as $curriculum)
                                                            <?php $Course = DB::table('product')->where('id',$curriculum->course_id)->get() ?>
                                                                @foreach($Course as $course)
                                                                  {{$course->name}}-Level{{$curriculum->level}}
                                                                @endforeach
                                                        @endforeach
                                                    </td>
                                                    <td>{{$value->question_lenth}}</td>
                                                    
                                                    <td>
                                                    <center><a class="btn btn-success" href="{{url('admin')}}/questions/{{$value->id}}">Check</a>
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