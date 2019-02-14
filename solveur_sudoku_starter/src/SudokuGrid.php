<?php

class SudokuGrid implements GridInterface
{
    public static function loadFromFile($filepath): ?SudokuGrid
    {
        $dataString = file_get_contents($filepath);
        $data = json_decode($dataString);
    	return new SudokuGrid($data,$dataString);
    }


    public function __construct(array $data, string $dataString)
    {
        $this->data = $data;
        $this->display = $dataString;
    }

    public function get(int $rowIndex, int $columnIndex): int
    {
    	return $this->data[$columnIndex][$rowIndex];
    }

    
    public function set(int $rowIndex, int $columnIndex, int $value): void
    {
    	$this->data[$columnIndex][$rowIndex] = $value;
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
    	return $this->display;
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
