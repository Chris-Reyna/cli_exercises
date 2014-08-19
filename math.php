<?php
function error ($a, $b, $divide = false) {
	if (!is_numeric($a) || !is_numeric($b)) {
		echo "ERROR: {$a2} & {$b2} must BOTH be numbers\n";
	} elseif ($divide == true && $b == 0) {
		echo "ERROR: Cannot divide by {$b}\n";
	} else {
		return true;
	}
}

function add ($a, $b) {
	if (error($a, $b)) {
		return $a + $b;
	}
}

function subtract ($a, $b) {
	if (error($a, $b)) {
		return $a - $b;
	}
}

function multiply ($a, $b) {
	if (error($a, $b)) {
		return $a * $b;
	}
}

function divide ($a, $b) {
	if (error($a, $b, true)) {
		return $a / $b;
	}
}

function modulus ($a, $b) {
	if (error($a, $b, true)) {
		return $a % $b;
	}
}

add(2, 2);
subtract(2, 2);
multiply(2, 2);
divide(2, 2);
modulus(2, 2);

?>