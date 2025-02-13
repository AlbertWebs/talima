<?php 
     $Updates = DB::table('updates')->where('status','0')->get();
 ?>
 @if($Updates->isEmpty())

 @else 
 <center>
 @foreach($Updates as $update)
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             
            <?php
                                $original_string = $update->content;
                                $num_words = 20;
                                $words = array();
                                $words = explode(" ", $original_string, $num_words);
                                $shown_string = "";
                                

                                if(count($words) == 20){
                                  $words[19] = "...";
                                }

                                $shown_string = implode(" ", $words);

                ?>
                {!!html_entity_decode($shown_string)!!}
            
            <a href="{{url('/admin/update')}}/{{$update->id}}" class="alert-link">Read Update</a>.
        </div>
@endforeach


</center>
 @endif

 <center>
 @if(Session::has('message-comment'))
<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <div class="alert alert-success">{{ Session::get('message-comment') }}</div>
</div> 
							   
@endif
</center>

                    <div style="text-align: center;">
                           
                            <a title="Course Categories" class="quick-btn" href="{{url('/admin/experiences')}}">
                                <i class="icon-map-marker  icon-2x"></i>
                                <span> Holidays </span>
                                <span class="label label-success"><?php $Product = DB::table('experiences')->get(); $Count = count($Product); echo $Count ?></span>
                            </a>

                            <a title="Cars for Hire" class="quick-btn" href="{{url('/admin/cars')}}">
                                <i class="icon-check icon-2x"></i>
                                <span> Transportation </span>
                                <span class="label label-default"><?php $Product = DB::table('cars')->get(); $Count = count($Product); echo $Count ?></span>
                            </a>

                            <a class="quick-btn" href="{{url('/admin/allMessages')}}">
                                <i class="icon-envelope icon-2x"></i>
                                <span>Messages</span>
                                <span class="label label-success"><?php $Messages = DB::table('messages')->get(); $Count = count($Messages); echo $Count ?></span>
                            </a>

             
                            <a class="quick-btn" href="{{url('/admin/admins')}}">
                                <i class="icon-user-md icon-2x"></i>
                                <span>Admins</span>
                                <span class="label label-danger"><?php $Admins = DB::table('admins')->get(); $Count = count($Admins); echo $Count ?></span>
                            </a>

                            <a class="quick-btn" href="{{url('/admin/checkSessions')}}">
                                <i class="icon-time icon-2x"></i>
                                <span>Sessions</span>
                                <span class="label label-danger"></span>
                            </a>

                            <a class="quick-btn" href="{{url('/admin/bookings')}}">
                                <i class="icon-check icon-2x"></i>
                                <span>Bookings</span>
                                <span class="label label-info"><?php $Admins = DB::table('bookings')->get(); $Count = count($Admins); echo $Count ?></span>
                            </a>

                            <a class="quick-btn" href="{{url('/admin/hotels')}}">
                                <i class="icon-home icon-2x"></i>
                                <span>Hotel</span>
                                <span class="label label-success"><?php $Admins = DB::table('hotels')->get(); $Count = count($Admins); echo $Count ?></span>
                            </a>
                            
                            
                            
                    </div>