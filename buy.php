<?php

include "code/bootstrap.php";

$bananas = new CountedItem("banana", 0.50, 5);
$apples = new CountedItem("apple", 0.30, 3);
$watermelon = new CountedItem("watermelon", 6.90, 1);

$strawberries = new WeightedItem("strawberry", 3.80, 2);
$cherries = new WeightedItem("cherry", 4.70, 1);
$raspberries = new WeightedItem("raspberry", 5.60, 0.5);

$bananas->__printInCheque();
$apples->__printInCheque();
$watermelon->__printInCheque();

$strawberries->__printInCheque();
$cherries->__printInCheque();
$raspberries->__printInCheque();
