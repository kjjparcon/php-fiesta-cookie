<?php
	$headache = array(

			1 => array( "id" => 1, "species" => 'Bulbasaur', "type_1" => 'Grass', "type_2" =>'Poison', "ability" =>'Overgrow', "hp" => 45, "attack" => 49, "defense" => 49),
			2 => array( "id" => 2, "species" =>'Ivysaur', "type_1" =>"	Grass", "type_2" =>'Poison', "ability" =>'Overgrow', "hp" =>60, "attack" =>62, "defense" => 63),
			3 => array( "id" => 3, "species" =>'Venusaur', "type_1" =>'Grass', "type_2" =>'Poison', "ability" =>'Overgrow', "hp" => 80, "attack" =>82, "defense" => 83),
			4 => array( "id" => 4, "species" =>'Charmander', "type_1" =>'Fire', "type_2" =>'N/A', "ability" =>"Blaze	", "hp" =>39, "attack" =>52, "defense" => 43),
			5 => array( "id" => 5, "species" =>'Charmeleon', "type_1" =>'Fire', "type_2" =>'N/A', "ability" =>"Blaze	", "hp" =>58, "attack" =>64, "defense" => 58),
			6 => array( "id" => 6, "species" =>'Charizard', "type_1" =>'Fire', "type_2" =>'Flying', "ability" =>"Blaze	", "hp" =>78, "attack" =>84, "defense" => 78),
			7 => array( "id" => 7, "species" =>'Squirtle', "type_1" =>'Water', "type_2" =>'N/A', "ability" =>"Torrent	", "hp" =>44, "attack" =>48, "defense" => 65),
			8 => array( "id" => 8, "species" =>'Wartotle', "type_1" =>'Water', "type_2" =>'N/A', "ability" =>"Torrent	", "hp" =>59, "attack" =>63, "defense" => 80),
			9 => array( "id" => 9, "species" =>'Blastoise', "type_1" =>'Water', "type_2" =>'N/A', "ability" =>"Torrent	", "hp" =>79, "attack" =>83, "defense" => 100),
			10 => array( "id" => 10, "species" =>'Caterpie', "type_1" =>'Bug', "type_2" =>'N/A', "ability" =>'Shield Dust', "hp" =>50, "attack" =>20, "defense" => 55)
	);

	echo "<pre>";
echo "id\t\tspecies\t\ttype 1\t\ttype 2\t\tability\t\t\thp\t\tattack\t\tdefense";
foreach ( $headache as $var ) {
    echo "\n", $var['id'], "\t\t", $var['species'], "\t", $var['type_1'], "\t\t", $var['type_2'], "\t\t", $var['ability'], "\t\t", $var['hp'], "\t\t", $var['attack'], "\t\t", $var['defense'];

    
    								#Help with the formatting
    #https://stackoverflow.com/questions/12651864/how-to-print-multidimensional-arrays-in-php
}

echo '<br>';
	echo '<br>';
	
	echo'Number of Elements Per Row: ';
	foreach($headache as $totalElements)
	{
	echo '<br>'. count($totalElements);
	}

echo '<br>';
	echo '<br>Favorite Species:	';
		echo $favorite = $headache[10]['species'];

echo '<br>';
	echo '<br>';

	echo 'Every Species:	';
	foreach($headache as $eachSpecies)
	{
		echo '<br>'.$eachSpecies['species'];
	}

?>