<?php

$answer = mt_rand(1,100);


$attempts = 0;

do {
	
	fwrite(STDOUT, 'Pick a number bewteen 1 and 100:');

	$guess = fgets(STDIN);

	$attempts++;

	if ($guess > $answer){
		
		echo "LOWER!\n";
	
	}elseif($guess < $answer){
		
		echo "HIGHER!\n";
		
		$attempts++;
	}

}while ($guess != $answer);

echo "Good Guess!! It took {$attempts} attempte.\n";
