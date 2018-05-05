<?php

$testCases = [];
$testResults = [];

#test case 1
$lim = 1;

for ($i=0;$i<=$lim; $i++) {
	for ($j=0; $j<=$lim;$j++) {
		if ($i!=$j) {
			$array[$i][$j] = [];
		}
	}
}

foreach ($array as $key => $val) {
	if ($key<$lim) {
		$test[$key] = (object)[];
	} else {
		$test[$key][$k] = $v;
	}
	foreach ($val as $k => $v) {
		if (is_object($test[$key])) {
			$test[$key]->{$k} = [];
		} else {
			$test[$key][$k] = [];
		}
	}
}

#test case 2
$testCases[1] = $test;

#bugfix
$testCases[2] = json_decode(json_encode($test), true);

#test case 3
$test = [
	0 => (object)[1 => []],
	1 => [1 => [],0 => []]
];

$testCases[3] = $test;

#run tests
foreach ($testCases as $key => $test) {
	$res = [];
	for ($i=0; $i<=$lim;$i++) {
		$a = ((array)$test)[$i];
		for ($j=0; $j<=$lim;$j++) {
			$res[] = ((array)$a)[$j];
		}
	}
	$testResults[$key] = $res;
}

print_r($testResults);


/*

$ php -v
PHP 7.1.7 (cli) (built: Jul 15 2017 18:08:09) ( NTS )
Copyright (c) 1997-2017 The PHP Group
Zend Engine v3.1.0, Copyright (c) 1998-2017 Zend Technologies

$ php72 -v
PHP 7.2.5 (cli) (built: May  4 2018 16:35:59) ( ZTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies

$ php index.php
Array
(
    [1] => Array
        (
            [0] => 
            [1] => 
            [2] => Array
                (
                )

            [3] => Array
                (
                )

        )

    [2] => Array
        (
            [0] => 
            [1] => Array
                (
                )

            [2] => Array
                (
                )

            [3] => Array
                (
                )

        )

    [3] => Array
        (
            [0] => 
            [1] => Array
                (
                )

            [2] => Array
                (
                )

            [3] => Array
                (
                )

        )

)
$ php72 index.php 
Array
(
    [1] => Array
        (
            [0] => 
            [1] => Array
                (
                )

            [2] => Array
                (
                )

            [3] => Array
                (
                )

        )

    [2] => Array
        (
            [0] => 
            [1] => Array
                (
                )

            [2] => Array
                (
                )

            [3] => Array
                (
                )

        )

    [3] => Array
        (
            [0] => 
            [1] => Array
                (
                )

            [2] => Array
                (
                )

            [3] => Array
                (
                )

        )

)

*/