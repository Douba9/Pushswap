<?php



$la = $argv;
$lb = [];

$isChanged = true;

while($isChanged == true){
    $tempLb = $lb;
    foreach($la as $key => $value){
        if($value != "push_swap.php"){
            if(isset($la[$key]) && isset($la[$key+1])){
                if($la[$key] < $la[$key+1]){
                    echo $la[$key]." plus petit que ".$la[$key+1]."\n";
                }else{
                    echo $la[$key]." plus grand que ".$la[$key+1]."\n";
                }
            }
        }
    }
    if($lb == $tempLb){
        $isChanged = false;
    }
}

function sa($la){
    if(sizeof($la) > 1){
        print_r($la);
        
        $temp = $la[0];
        $la[0] = $la[1];
        $la[1] = $temp;

        print_r($la);
    }else{
        echo "pas assez d'éléments\n";
    }
}

function sb($lb) {
    if(sizeof($lb) > 1){
        print_r($lb);
        
        $temp = $lb[0];
        $lb[0] = $lb[1];
        $lb[1] = $temp;

        print_r($lb);
    }else{
        echo "pas assez d'éléments\n";
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
    }else{
        echo "pas assez d'éléments\n";
    }

}

function pa($la, $lb){

    if(sizeof($lb) > 0){
        echo "la: ";
        print_r($la);
        echo " lb: ";
        print_r($lb);
        array_unshift($la, $lb[0]);
        echo " la: ";
        print_r($la);
        echo " lb: ";
        print_r($lb);
    }else{
        echo "pas assez d'éléments\n";
    }

}

function pb($la, $lb){
    if(sizeof($la) > 0){
        echo "la: ";
        print_r($la);
        echo " lb: ";
        print_r($lb);
        $lb[0] = $la[0];
        array_unshift($lb, $la[0]);
        echo " la: ";
        print_r($la);
        echo " lb: ";
        print_r($lb);
    }else{
        echo "pas assez d'éléments\n";
    }
}

function ra($la){
    if(sizeof($la) >= 2){
        print_r($la);
        $la[0] = $la[sizeof($la) - 1];
        print_r($la);
    }else{
        echo "pas assez délément";
    }
}

function rb($lb){
    if(sizeof($lb) >= 2){
        print_r($lb);
        $lb[0] = $lb[sizeof($lb) - 1];
        print_r($lb);
    }else{
        echo "pas assez délément";
    }
}

function rr($la, $lb){
    if(sizeof($la) >= 2 && sizeof($lb) >= 2){
        echo "la: ";
        print_r($la);
        echo " lb: ";
        print_r($lb);
        $la[0] = $la[sizeof($la) - 1];
        $lb[0] = $lb[sizeof($lb) - 1];
        echo "la: ";
        print_r($la);
        echo " lb: ";
        print_r($lb);
    }else{
        echo "pas assez délément";
    }
}

function rra($la){
    if(sizeof($la) >= 2){
        print_r($la);
        $la[sizeof($la) - 1] = $la[0];
        print_r($la);
    }else{
        echo "pas assez délément";
    }
}

function rrb($lb){
    if(sizeof($lb) >= 2){
        print_r($lb);
        $lb[sizeof($lb) - 1] = $lb[0];
        print_r($lb);
    }else{
        echo "pas assez délément";
    }
}

function rrr($la, $lb){
    if(sizeof($la) >= 2 && sizeof($lb) >= 2){
        echo "la: ";
        print_r($la);
        echo " lb: ";
        print_r($lb);
        $la[sizeof($la) - 1] = $la[0];
        $lb[sizeof($lb) - 1] = $lb[0];
        echo "la: ";
        print_r($la);
        echo " lb: ";
        print_r($lb);
    }else{
        echo "pas assez délément";
    }
}

?>