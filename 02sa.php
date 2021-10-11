<?php 
	//FUNCTIONS

	//HP SUM 
	function hp_sum($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10)
	{
		return $num1+$num2+$num3+$num4+$num5+$num6+$num7+$num8+$num9+$num10;
	}

	echo 'HP Sum: ';
	echo '<br>';
	echo hp_sum(45,60,80,39,58,78,44,59,79,50);

	echo '<br>';
	echo '<br>';

	//AVERAGE ATTACK
	$attack_arr = array(49,62,82,52,64,84,48,63,83,20);

	$ave_attack = ceil(array_sum($attack_arr) / count($attack_arr) );

	echo 'Average Attack: ';
	echo '<br>';
	echo $ave_attack;


				#Help with the formatting
	#https://thisinterestsme.com/get-an-average-number-with-php/
?>