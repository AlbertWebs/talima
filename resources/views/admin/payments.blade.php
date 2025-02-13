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
                        <h1> All Payments</h1>
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
                                    Payments
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Student</th>
                                                    <th>Description</th>
                                                    <th>Transaction ID</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($Payment as $value)
                                                <tr class="odd gradeX">
                                                    <td>{{$value->id}}</td>
                                                    <td>
                                                         <?php
                                                             $Student = DB::table('users')->where('id',$value->user_id)->get();
                                                             foreach ($Student as $key => $student) {
                                                                 echo $student->name;
                                                                 echo "<br>";
                                                                 echo $student->email;
                                                                 echo "<br>";
                                                                 echo $student->mobile;
                                                                 echo "<br>";
                                                                
                                                             }
                                                          ?>
                                                    </td>
                                                    <td>
                                                    Course:
                                                        <?php $Course =  DB::table('curriculum')->where('id',$value->course_id)->get();
                                                         foreach ($Course as $key => $valuee) {
                                                            echo $valuee->title;
                                                        }?>
                                                    <br>
                                                    Cost:$ 
                                                    <?php 
                                                    foreach ($Course as $key => $valuee) {
                                                        echo $valuee->price;
                                                    }
                                                    ?>
                                                    <br>
                                                    Balance:$
                                                    
                                                    @foreach ($Course as $valuee) 
                                                    <?php
                                                        $cost = $valuee->price;
                                                        $paid = $value->amount;
                                                        $balance = $cost-$paid;
                                                        echo $balance;
                                                    ?>
                                                                                                        
                                                    <br>
                                                    @if($balance <= 0)
                                                    <?php 
                                                       $status = $value->status;
                                                       if($status == 1){
                                                         $action = 'Roll Back';
                                                         $button = 'danger';
                                                         $icon = 'remove';
                                                       }else{
                                                        $action = 'Approve';
                                                        $button = 'success';
                                                        $icon = 'check';
                                                       }
                                                       
                                                    ?>
                                                    <center><a onclick="return confirm('{{$action}} This Course')" href="{{url('/admin')}}/approvepay/{{$value->id}}/{{$status}}"   class="btn btn-{{$button}}"><i class="icon-{{$icon}} icon-white"></i> {{$action}}</a></center>
                                                    @endif
                                                    @endforeach
                                                    
                                                    </td>
                                                    <td>{{$value->TransactionID}}</td>
                                                    <td>{{$value->amount}}</td>
                                                    <td>
                                                    <center>
                                                        <?php
                                                            $Status = $value->status;
                                                            if($Status == '0'){
                                                                echo "Pending...";
                                                            }else if($Status == '1'){
                                                                echo "Approved";
                                                            }else{
                                                                echo "Unknown";
                                                            }
                                                        ?>
                                                    </center>
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