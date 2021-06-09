<?php 

require_once "Pokemon.php";

class Fight{
	// public $attacks1;
	// public $attacks2;

	public function __construct($pokemon1, $pokemon2)
    {
        var_dump($pokemon1);
        $test = $pokemon1->GetName();
        echo $test;

        $attacks1 = $pokemon1->GetAttacks();
        var_dump($attacks);
        
        echo "<br>Pikachu attacks Charmeleon with ".$attacks1[0]->attackName.".<br>";
        echo $attacks1[0]->attackDamage;

        $type1 = $pokemon1->GetEnergyType();
        $type2 = $pokemon2->GetEnergyType();
        echo $type1;
        echo $type2;

        $weakness1 = $pokemon1->GetWeakness();
        $weakness2 = $pokemon2->GetWeakness();
        echo $weakness1->weaknessName;
        echo $weakness2->weaknessName;

        $resistance1 = $pokemon1->GetResistance();
        $resistance2 = $pokemon2->GetResistance();
        echo $resistance1->resistanceName;
        echo $resistance2->resistanceName;

        if( $weakness2->weaknessName == $type1){
            $damage = $attacks1[0]->attackDamage * $weakness2->weaknessMultiplier;
        } else if($resistance2->resistanceName == $type1){
            $damage = $attacks1[0]->attackDamage - $resistance2->resistanceMultiplier; 
        }else{
            $damage = $attacks1[0]->attackDamage; 
        }
        $currentHealth = $pokemon2->GetHealth();
        $pokemon2->SetHealth($currentHealth-$damage);
        echo $pokemon2->GetHealth();
    }
       
}

