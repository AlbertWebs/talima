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
                        <h1> Study Curiculum </h1>
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
                                Material
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Curriculum</th>
                                                    <th>Video</th>
                                                    
                                                    <th>PDF</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($Material as $material)
                                                <tr class="odd gradeX">
                                                    
                                                    <td>
                                                    <?php $Curriculum = DB::table('curriculum')->where('id',$material->curriculum_id)->get(); ?>
                                                    @foreach($Curriculum as $value)
                                                        <option selected="selected" value="{{$value->id}}">
                                                            <?php 
                                                                $CourseID = $value->course_id;
                                                                $Course = DB::table('product')->where('id',$CourseID)->get();
                                                                foreach ($Course as $key => $valuee) {
                                                                    # code...
                                                                    echo $valuee->name;
                                                                    echo " | Level";
                                                                    echo $material->level;
                                                                }
                                                            ?>
                                                        </option>
                                                    @endforeach
                                                    </td>
                                                    <td id="vid"><embed src="https://www.youtube.com/embed/{{$material->video}}?rel=0" allowfullscreen="true" autoplay="false" height="100" width="100"  /></td>
                                                    
                                                    <td><embed src= "{{url('/')}}/uploads/file/{{$material  ->pdf}}" width= "200" height= "200"></td>
                                                    <td class="center"><a  href="{{url('/admin')}}/editMaterial/{{$material->id}}"   class="btn btn-info"><i class="icon-pencil icon-white"></i> Edit</a>
                                                    <br><br><a onclick="return confirm('Are You Sure You Want To Delete This Material?')"  href="{{url('/admin')}}/deleteMaterial/{{$material->id}}"   class="btn btn-danger"><i class="icon-trash icon-white"></i> Delete</a>
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