<?php

$path = "/Users/andrieuwilliam/Documents/GitHub/AlgoAvance/solveur_sudoku_starter/grids/grid1.json";

$string = file_get_contents($path);

json_decode($string);


SudokuGrid::loadFromFile();













