<?php

class SudokuGrid implements GridInterface
{
    public static function loadFromFile($filepath): ?SudokuGrid
    {
    	return null;
    }


    public function __construct(array $data)
    {

    }

    public function get(int $rowIndex, int $columnIndex): int
    {
    	return null;
    }

    
    public function set(int $rowIndex, int $columnIndex, int $value): void
    {
    	
    }

    public function row(int $rowIndex): array
    {
    	return null;
    }

    
    public function column(int $columnIndex): array
    {
    	return $array= [0];
    }

    public function square(int $squareIndex): array
    {
    	return null;
    }

    
    public function display(): string
    {
    	return null;
    }

    
    public function isValueValidForPosition(int $rowIndex, int $columnIndex, int $value): bool
    {
    	return null;
    }

    
    public function getNextRowColumn(int $rowIndex, int $columnIndex): array
    {
    	return null;
    }


    public function isValid(): bool
    {
    	return null;
    }


    public function isFilled(): bool
    {
    	return null;
    }
}
