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

                            <a title="Course Categories" class="quick-btn" href="{{url('/admin/deals')}}">
                                <i class="icon-map-marker  icon-2x"></i>
                                <span> Deals </span>
                                <span class="label label-success"><?php $Product = DB::table('deals')->get(); $Count = count($Product); echo $Count ?></span>
                            </a>





                            <a class="quick-btn" href="{{url('/admin/experiences')}}">
                                <i class="icon-check icon-2x"></i>
                                <span>Experiences</span>
                                <span class="label label-info"><?php $Admins = DB::table('experiences')->get(); $Count = count($Admins); echo $Count ?></span>
                            </a>





                    </div>
