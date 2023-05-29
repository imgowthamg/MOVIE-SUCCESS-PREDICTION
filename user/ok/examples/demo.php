<?php
if (PHP_SAPI != 'cli') {
	echo "<pre>";
}

$strings = array(
	1 => 'The product is bad',
	2 => 'the product is good, but price is high',
	3 => 'the product is not bad',
	4 => 'The product is not good',
	5 => 'nice product',
	6 => 'nice procuct with less features',
	7 => 'nice procuct with bad features',
        8 => 'His skills are mediocre',
);




require_once __DIR__ . '/../autoload.php';
$sentiment = new \PHPInsight\Sentiment();
foreach ($strings as $string) {

	// calculations:
	$scores = $sentiment->score($string);
	$class = $sentiment->categorise($string);

	// output:
	echo "String: $string\n";
	echo "Dominant: $class, scores: ";
	print_r($scores);
	echo "\n";
}
