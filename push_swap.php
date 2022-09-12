<?php



$la = [12, 23, 34, 23];
$lb = [34, 55, 66, 90];

/*foreach($argv as $key => $value){
    if($value != "push_swap.php"){
        if(isset($argv[$key]) && isset($argv[$key+1])){
            if($argv[$key] < $argv[$key+1]){
                echo $argv[$key]." plus petit que ".$argv[$key+1]."\n";
            }else{
                echo $argv[$key]." plus grand que ".$argv[$key+1]."\n";
            }
        }
    }
}*/

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
        $la[0] = $lb[0];
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
        echo " la: ";
        print_r($la);
        echo " lb: ";
        print_r($lb);
    }else{
        echo "pas assez d'éléments\n";
    }
}

?>