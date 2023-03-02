<?php

// So chessBoard(6,4) should return an array like this:

// [
//     ["O","X","O","X"],
//     ["X","O","X","O"],
//     ["O","X","O","X"],
//     ["X","O","X","O"],
//     ["O","X","O","X"],
//     ["X","O","X","O"]
// ]


// function chessBoard($rows, $columns) {
//     $mas = [];
//     $f = "O";
//     $s = "X";
//     for ($j=0; $j < $rows; $j++) { 
//         for ($i=0; $i < $columns; $i++) { 
//             if($j%2 == 0 && $i%2 == 0){
//                 array_push($mas, $f);
//             }
//             if($j%2 == 0 && $i%2 == 1){
//                 array_push($mas, $s);
//             }
//             if($j%2 == 1 && $i%2 == 0){
//                 array_push($mas, $s);
//             }
//             if($j%2 == 1 && $i%2 == 1){
//                 array_push($mas, $f);
//             }
//             if(count(($mas))> $rows * $columns){
//               array_splice($mas, -1);
//             }
//         }
//     }
//     $mas = array_chunk($mas, $columns);
   
//     return $mas;
// }

function chessBoard($rows, $columns) {
    $board = [];
    for ($row = 0; $row < $rows; $row++) {
      for ($column = 0; $column < $columns; $column++) {
        $board[$row][$column] = ($row + $column) % 2 ? "X" : "O";
      }
    }
    
    return $board;
  }



print_r(chessBoard(3, 7));