<?php

/* Build Tower
Build Tower by the following given argument:
number of floors (integer and always greater than 0).

Tower block is represented as *

Python: return a list;
JavaScript: returns an Array;
C#: returns a string[];
PHP: returns an array;
C++: returns a vector<string>;
Haskell: returns a [String];
Ruby: returns an Array;
Lua: returns a Table;
Have fun!

for example, a tower of 3 floors looks like below

[
  '  *  ', 
  ' *** ', 
  '*****'
]
and a tower of 6 floors looks like below

[
  '     *     ', 
  '    ***    ', 
  '   *****   ', 
  '  *******  ', 
  ' ********* ', 
  '***********'
]
 */

 // code

 function tower_builder(int $n): array {
    // Build your tower here
    string $star;
    string $space; 
    array $tower = [];
    
    for($i = 1; $i <= $n; $i++){
      $space = str_repeat(' ', $n - $i);
      $star = str_repeat('*', (2*$i) - 1);
      array_push($tower, $space.$star.$space);
    }
    return $tower;
  }

  tower_builder(4);