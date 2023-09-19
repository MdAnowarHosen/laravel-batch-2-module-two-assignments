<?php


# for loop print all even numbers between 1 to 20
function forLoopFun(int $int, int $length, int $step)
{
   $arrayVal = [];
   for ($length; $int <= $length; $length = $length - $step)
   {
      # keep value into a array
      $arrayVal[] = $length;
   }

   # reverse the array
   $arrayRev = array_reverse($arrayVal);
   foreach ($arrayRev as $key => $row)
   {
      echo $row . "<br/>";
   }
}

# while loop print all even numbers between 1 to 20
function whileLoopFun(int $int, int $length, int $step)
{
   $arrayVal = [];
   while ($int <= $length)
   {
      $arrayVal[] = $length;
      $length = $length - $step;
   }

   # reverse the array
   $arrayRev = array_reverse($arrayVal);
   foreach ($arrayRev as $key => $row)
   {
      echo $row . "<br/>";
   }
}

# do while loop print all even numbers between 1 to 20
function doWhileLoopFun(int $int, int $length, int $step)
{
   $arrayVal = [];
   do
   {
      $arrayVal[] = $length;
      $length = $length - $step;
   } while ($int <= $length);

   # reverse the array
   $arrayRev = array_reverse($arrayVal);
   foreach ($arrayRev as $key => $row)
   {
      echo $row . "<br/>";
   }
}

# call functions
echo "With for loop output: <br/>";
forLoopFun(1, 20, 2);

echo "With while loop output: <br/>";
whileLoopFun(1, 20, 2);


echo "With do while loop output: <br/>";
doWhileLoopFun(1, 20, 2);
