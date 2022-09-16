<?php

class PushSwap {

    private $la = [];
    private $lb = [];

    function __construct($la){

        $this->la = $la;
        array_shift($this->la);
        $this->nb();

    }

    function nb(){
        $la = $this->la;
        $lb = $this->lb;

        $isChanged = true;

        while($isChanged == true){

            $tempLa = $la;
            
            if(sizeof($la) == 1){
                $this->pb();
                $isChanged = false;
            }else{
                $min = min($la);
            }

            if($la[0] == $min){
                $this->pb();
            }
            else{
                $this->rra();
            }

            echo " ";

            $la = $this->la;
            $lb = $this->lb;

            if($la == $tempLa){
                $isChanged = false;
            }
        }

        for($i = 0; $i != sizeof($lb); $i++){
            $this->pa();
            if($i != sizeof($lb) - 1){
                echo " ";
            }
        }
        echo"\n";
    }
    
    function sa(){

        $la = $this->la;

        if(sizeof($la) > 1){
            
            $temp = $la[0];
            $la[0] = $la[1];
            $la[1] = $temp;
    
            echo "sa";
    
            $this->la = $la;
        }
    }
    
    function sb() {
        
        $lb = $this->lb;

        if(sizeof($lb) > 1){
                   
            $temp = $lb[0];
            $lb[0] = $lb[1];
            $lb[1] = $temp;
    
            echo "sb";

            $this->lb = $lb;
        }
    }
    
    function sc(){

        $la = $this->la;
        $lb = $this->lb;
    
        if(sizeof($la) > 1 && sizeof($lb) > 1){        
            $temp = $la[0];
            $la[0] = $la[1];
            $la[1] = $temp;
    
            $temp2 = $lb[0];
            $lb[0] = $lb[1];
            $lb[1] = $temp2;
    
            echo "sc";

            $this->la = $la;
            $this->lb = $lb;
        }
    }
    
    function pa(){

        $la = $this->la;
        $lb = $this->lb;
    
        if(sizeof($lb) > 0){
            array_unshift($la, $lb[0]);
            array_shift($lb);
            echo "pa";
            
            $this->la = $la;
            $this->lb = $lb;
        }
    }
    
    function pb(){

        $la = $this->la;
        $lb = $this->lb;

        if(sizeof($la) > 0){
            array_unshift($lb, $la[0]);
            array_shift($la);
            echo "pb";
            $this->la = $la;
            $this->lb = $lb;
        }
    }
    
    function ra(){

        $la = $this->la;

        if(sizeof($la) >= 2){
            array_push($la, $la[0]);
            array_shift($la);
            echo "ra";
            $this->la = $la;
        }
    }
    
    function rb(){

        $lb = $this->lb;

        if(sizeof($lb) >= 2){
            array_push($lb, $lb[0]);
            unset($lb[0]);
            echo "rb";
            $this->lb = $lb;
        }
    }
    
    function rr(){

        $la = $this->la;
        $lb = $this->lb;    

        if(sizeof($la) >= 2 && sizeof($lb) >= 2){
            array_push($la, $la[0]);
            unset($la[0]);
            array_push($lb, $lb[0]);
            unset($lb[0]);
            echo "rr";

            $this->la = $la;
            $this->lb = $lb;
        }
    }
    
    function rra(){

        $la = $this->la;

        if(sizeof($la) >= 2){
            array_unshift($la, $la[sizeof($la) - 1]);
            unset($la[sizeof($la) - 1]);
            echo "rra";
            $this->la = $la;
        }
    }
    
    function rrb(){

        $lb = $this->lb;    

        if(sizeof($lb) >= 2){
            array_unshift($lb, $lb[sizeof($lb) - 1]);
            unset($lb[sizeof($lb) - 1]);
            echo "rrb";
            $this->lb = $lb;
        }
    }
    
    function rrr(){
        
        $la = $this->la;
        $lb = $this->lb;

        if(sizeof($la) >= 2 && sizeof($lb) >= 2){
            array_unshift($la, $la[sizeof($la) - 1]);
            unset($la[sizeof($la) - 1]);
            array_unshift($lb, $lb[sizeof($lb) - 1]);
            unset($lb[sizeof($lb) - 1]);
            echo "rrr";

            $this->la = $la;
            $this->lb = $lb;
        }
    }

}

?>