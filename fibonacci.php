
<?php 


function fibonacci($nbIteration)
{
   $FibArray[] = 0;
   $FibArray[] = 1;
   for ($i=2; $i <= $nbIteration; $i++) { 
       $FibArray[] = $FibArray[$i-2] + $FibArray[$i-1];

       
   }
   return $FibArray[$nbIteration-1];
}




echo(fibonacci(6)."\n");











