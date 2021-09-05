<?php

$athletes1 = new stdClass();
$athletes1->symbol = 'O';
$athletes1->progress = 0;

$athletes2 = new stdClass();
$athletes2->symbol = '@';
$athletes2->progress = 0;

$athletes3 = new stdClass();
$athletes3->symbol = '%';
$athletes3->progress = 0;

$you = readline('Choose your character: ');
$distance = (int) readline('Choose distance: ');
$athletes4 = new stdClass();
$athletes4->symbol = $you;
$athletes4->progress = 0;

$athletes = [$athletes1, $athletes2, $athletes3, $athletes4];

while ($athletes1->progress <= $distance && $athletes2->progress <= $distance && $athletes3->progress <= $distance && $athletes4->progress <= $distance) {
    echo str_repeat('==', $distance/2) . PHP_EOL;
    echo str_repeat(' ', $athletes4->progress) . $athletes4->symbol . str_repeat(' ', $distance - $athletes4->progress) . PHP_EOL;
    echo str_repeat('- ', $distance/2) . PHP_EOL;
    echo str_repeat(' ', $athletes1->progress) . $athletes1->symbol . str_repeat(' ', $distance - $athletes1->progress) . PHP_EOL;
    echo str_repeat('- ', $distance/2) . PHP_EOL;
    echo str_repeat(' ', $athletes2->progress) . $athletes2->symbol . str_repeat(' ', $distance - $athletes2->progress) . PHP_EOL;
    echo str_repeat('- ', $distance/2) . PHP_EOL;
    echo str_repeat(' ', $athletes3->progress) . $athletes3->symbol . str_repeat(' ', $distance - $athletes3->progress) . PHP_EOL;
    echo str_repeat('==', $distance/2) . PHP_EOL;
    foreach ($athletes as $value) {
        $value->progress += rand(1, 2);
    }
    usleep(100000);
}

foreach ($athletes as $value) {
    if ($value->progress >= $distance) {
        echo "{$value->symbol} has won!";
    }
}

