<?php
class Calculatrice{
    public $a = [];
    public $b =[];

// public function Additionx($a,$b)
//     {
//         $total = array_sum($a)+array_sum($b);
//         return $total;
//     }


public function __construct($a,$b)
{
    $this->a = $a;
    $this->b = $b;
}
public function Addition(){
    // foreach($a as $value){
        
    //     foreach($b as $valueb){
    //     }
    //     $total =+ $value+$valueb;
    // }
    // echo "$total <br>";


    for($i=0;$i<=count($this->a);$i++){
        $total =[];
        for($j=0; $j<=count($this->b); $j++){
           
            $total[] = $this->a[$i] +$this->b[$j];


    
        }

    }
}


    // public function Addition($a,$b)
    // {if(is_int($a) && is_int($b)){
    //     $resultat = $a+$b;
    //     return $resultat;
    // }else{
    //     echo "Veuillez entrer un nombre";
    // }
    // }

    public function Soustraction($a,$b)
    {if(is_int($a) && is_int($b)){
        $resultat = $a-$b;
        return $resultat;
    }else{
        echo "Veuillez entrer un nombre";
    }
    }

    public function Mutiplication($a,$b)
    {if(is_int($a) && is_int($b)){
        $resultat = $a*$b;
        return $resultat;
    }else{
        echo "Veuillez entrer un nombre";
    }
    }

    public function Division($a,$b)
    {if(is_int($a) && is_int($b)){
        $resultat = $a/$b;
        return $resultat;
    }else{
        echo "Veuillez entrer un nombre";
    }
    }
}

