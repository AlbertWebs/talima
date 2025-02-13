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
                        <center><h2> Booking </h2></center>
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
                   <!-- CHART & CHAT  SECTION -->
              
                 <!--END CHAT & CHAT SECTION -->
                 <!-- COMMENT AND NOTIFICATION  SECTION -->
                <div class="row">
                    <div class="col-lg-12">

                        <div class="chat-panel panel panel-success">
                            <div class="panel-heading">
                                <i class="icon-money"></i>
                                Booking
                            
                            </div>

                            <div class="panel-body">
                           
                            <center>
                                
                                
                                <h3>User Info:</h3>
                               
                                    
                                    
                                        <strong>Name :</strong> {{$Booking->name}} <br>
                                        <strong>Email :</strong> {{$Booking->email}} <br>
                                        <strong>Mobile :</strong> {{$Booking->mobile}} <br>
                                        <strong>Book Type :</strong> {{$Booking->category}} <br>
                                        
                                   
                                

 
                                <hr />
                                <h3>Booking Info:</h3>
                                @if($Booking->category == 'car')
                                <?php $Destinations = DB::table('cars')->where('id',$Booking->product_id)->get(); ?>
                                @foreach($Destinations as $dest)
                                        <strong>Title :</strong> {{$dest->name}} <br>
                                        <strong>Price :</strong>  {!!html_entity_decode($dest->price)!!}<br>
                                        <strong>Meta Data :</strong> {{$dest->meta}} <br>
                                      
                                @endforeach
                                @elseif($Booking->category == 'tour')
                                <?php $Destinations = DB::table('experiences')->where('id',$Booking->product_id)->get(); ?>
                                @foreach($Destinations as $dest)
                                        <strong>Title :</strong> {{$dest->title}} <br>
                                        <strong>Price :</strong> {{$dest->price}} <br>
                                        <strong>Meta Data :</strong> {{$dest->meta}} <br>
                                        <!-- <strong>Boo Info :</strong><br> -->
                                        
                                @endforeach
                                @else
                                <?php $Rooms = DB::table('rooms')->where('id',$Booking->product_id)->get(); ?>
                                @foreach($Rooms as $dest)
                                        <strong>Hotel :</strong> <?php $Hotel = DB::table('hotels')->where('id',$dest->hotel_id)->get(); ?>  @foreach($Hotel as $hotel) {{$hotel->name}} @endforeach<br>
                                        <strong>Title :</strong> {{$dest->name}} <br>
                                        <strong>Price :</strong> {{$dest->price}} <br>
                                        <strong>Meta Data :</strong> {{$dest->meta}} <br>
                                        <!-- <strong>Boo Info :</strong><br> -->
                                        
                                @endforeach
                                @endif
                                
                                
                              
                                @if($Booking->status == '0')
                                <a href="{{url('/admin')}}/swapBooking/{{$Booking->id}}"  class="btn btn-success"><i class="icon-check icon-white"></i> Mark Confirm </a>
                                @else
                                <a href="{{url('/admin')}}/swapBooking/{{$Booking->id}}"  class="btn btn-info"><i class="icon-close icon-white"></i> Mark Pending </a>
                                @endif
                                
                            </center>
                           
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