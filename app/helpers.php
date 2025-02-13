<?php
function timeAgo($timestamp){
    $datetime1=new DateTime("now");
    $datetime2=date_create($timestamp);
    $diff=date_diff($datetime1, $datetime2);
    $timemsg='';
    if($diff->y > 0){
        $timemsg = $diff->y .' year'. ($diff->y > 1?"'s":'');

    }
    else if($diff->m > 0){
    $timemsg = $diff->m . ' month'. ($diff->m > 1?"'s":'');
    }
    else if($diff->d > 0){
    $timemsg = $diff->d .' day'. ($diff->d > 1?"'s":'');
    }
    else if($diff->h > 0){
    $timemsg = $diff->h .' hour'.($diff->h > 1 ? "'s":'');
    }
    else if($diff->i > 0){
    $timemsg = $diff->i .' minute'. ($diff->i > 1?"'s":'');
    }
    else if($diff->s > 0){
    $timemsg = $diff->s .' second'. ($diff->s > 1?"'s":'');
    }

$timemsg = $timemsg.' ago';
return $timemsg;
}

function timeAgoSession($timestamp){
    $datetime1=new DateTime("now");
    $datetime2=date_create($timestamp);
    $diff=date_diff($datetime1, $datetime2);
    $timemsg='';

    if($diff->y > 0){
        $timemsg = $diff->y*365 ;
    }else if($diff->m > 0){
        $timemsg = $diff->m*30 ;
    }else if($diff->d > 0){
        $timemsg = $diff->d ;
    }else if($diff->h > 0){
        $timemsg = $diff->h/24 ;
    }else if($diff->i > 0){
        $timemsg = ($diff->i/60)/24 ;
    }else if($diff->s > 0){
        $timemsg = ($diff->s/(60*60))/24 ;
    }





return $timemsg;
}
?>
