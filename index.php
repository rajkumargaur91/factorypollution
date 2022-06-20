<?php

function solution($A) {
    $target_pollution = array_sum($A)/2;
    $filtered_pollution = 0;
    $total_filters = 0;
    rsort($A);

	do {
	  $total_filters++;
	  $filtered_pollution += $A[0]/2;
	  $A[0] = $A[0]/2;
	  rsort($A);
	} while ($filtered_pollution < $target_pollution);

   return $total_filters;
}

// soluton b work in progress

function solutionb($A) {
    $target_pollution = array_sum($A)/2;
    $filtered_pollution = 0;
    $total_filters = 0;
	do {
	  rsort($A);
      if($A[0] > $A[1]*2){
        $rem = $A[0]%$A[1];
        $quo = ($A[0]-$rem)/$A[1];
      }else{
          $quo = 1;
      }
        $total_filters = $total_filters+$quo;
        $div = 2*$quo;
	  $filtered_pollution += $A[0]-$A[0]/$div;
	  $A[0] = $A[0]/$div;
	} while ($filtered_pollution < $target_pollution);
   return $total_filters;
}