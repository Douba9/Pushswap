<?php

yecou($argv);

function yecou($la){
    array_shift($la);
    $lb = [];
    $isChanged = true;

    print_r($la);
    
    a:

    $tempLa = $la;

    foreach($la as $key => $value){
        if(isset($la[$key]) && isset($la[$key+1])){
            if($la[$key] > $la[$key+1]){
                $la = sa($la);
            }else{
                $la = pb($la, $lb);
            }
        }
    }

    print_r($la);

    for($i = 0; $i < sizeof($lb) - 1; $i++){
        $la = pa($la, $lb);
        echo "pa";
    }

    //echo "-----------------------------------------------------\n";
    //print_r($la);
    //echo "-----------------------------------------------------\n";

    if($la != $tempLa){
        goto a;
    }
}

function sa($la){
    if(sizeof($la) > 1){
        
        $temp = $la[0];
        $la[0] = $la[1];
        $la[1] = $temp;

        echo "sa";

        return $la;
    }
}

function sb($lb) {
    if(sizeof($lb) > 1){
               
        $temp = $lb[0];
        $lb[0] = $lb[1];
        $lb[1] = $temp;

        echo "sb";
    }
}

function sc($la, $lb){

    if(sizeof($la) > 1 && sizeof($lb) > 1){        
        $temp = $la[0];
        $la[0] = $la[1];
        $la[1] = $temp;

        $temp2 = $lb[0];
        $lb[0] = $lb[1];
        $lb[1] = $temp2;

        echo "sc";
    }
}

function pa($la, $lb){

    if(sizeof($lb) > 0){
        array_unshift($la, $lb[0]);
        unset($lb[0]);
        echo "pa";
        return $la;
    }
}

function pb($la, $lb){
    if(sizeof($la) > 0){
        array_unshift($lb, $la[0]);
        echo "pb";
        return $la;
    }
}

function ra($la){
    if(sizeof($la) >= 2){
        array_push($la, $la[0]);
        unset($la[0]);
        echo "ra";
    }
}

function rb($lb){
    if(sizeof($lb) >= 2){
        array_push($lb, $lb[0]);
        unset($lb[0]);
        echo "rb";
    }
}

function rr($la, $lb){
    if(sizeof($la) >= 2 && sizeof($lb) >= 2){
        array_push($la, $la[0]);
        unset($la[0]);
        array_push($lb, $lb[0]);
        unset($lb[0]);
        echo "rr";
    }
}

function rra($la){
    if(sizeof($la) >= 2){
        array_unshift($la, $la[sizeof($la) - 1]);
        unset($la[sizeof($la) - 1]);
        echo "rra";
    }
}

function rrb($lb){
    if(sizeof($lb) >= 2){
        array_unshift($lb, $lb[sizeof($lb) - 1]);
        unset($lb[sizeof($lb) - 1]);
        echo "rrb";
    }
}

function rrr($la, $lb){
    if(sizeof($la) >= 2 && sizeof($lb) >= 2){
        array_unshift($la, $la[sizeof($la) - 1]);
        unset($la[sizeof($la) - 1]);
        array_unshift($lb, $lb[sizeof($lb) - 1]);
        unset($lb[sizeof($lb) - 1]);
        echo "rrr";
    }
}

?>