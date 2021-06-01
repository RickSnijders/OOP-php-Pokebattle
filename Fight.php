<?php 

require_once "Pokemon.php";

class Fight{
	public $attacks1;
	public $attacks2;

	public function __construct($pokemon1, $pokemon2)
    {
        // echo $pokemon1->name;
        $attacks1 = $pokemon1->attack;
        $attacks2 = $pokemon2->attack;
        // echo $pokemon1->attack;
        // echo $pokemon2->name;

        
        $this->SplitAttacks($attacks1);
        $this->SplitAttacks($attacks2);
    }
    //Splits the attacks from the attack var
    public function SplitAttacks($value){
        $attackspok1 = explode(",", $value);
        // echo $attackspok1[0];
        // echo $attackspok1[1];

        $att1 = explode("|", $attackspok1[0]);
        $att1name = $att1[0];
        $att1damage = $att1[1];
        echo $att1name;
        echo $att1damage;

        $att2 = explode("|", $attackspok1[1]);
        $att2name = $att2[0];
        $att2damage = $att2[1];
        echo $att2name;
        echo $att2damage. "<br>";
    }
       
}

