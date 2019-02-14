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
        print_r($this->square(8));
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
    	return $data[$rowIndex];
    }

    
    public function column(int $columnIndex): array
    {
        for ($i=0; $i < count($data); $i++) { 
            $column[$i] = $data[$i][$columnIndex]; 
        }
    	return $column;
    }

    public function square(int $squareIndex): array
    {
        $squareTab;
        for ($j=0; $j < count($this->data); $j+=3) {

            for ($i=0; $i < count($this->data[$j]); $i+=3)
            { 
                $a=  array_slice($this->data[$j], $i,3);
                $b= array_slice($this->data[$j+1], $i,3) ;
                $c=array_slice($this->data[$j+2], $i,3) ;
                $squareTab[]= array_merge($a,$b,$c);
            }
        }

    	return $squareTab[$squareIndex];
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

    public function createSquare($data)
    {
        
    }
}
