<?php
function Palindroom($String) {
  $l = 0;
  $r = strlen($String) - 1;
  $flag = 0;

  while($r > $l){
    if ($String[$l] != $String[$r]){
      $word = 1;
      break;
    }
    $l++;
    $r--;
  }

  if ($word == 0){
    echo $String." is a Palindrome string.\n";
  } else {
    echo $String." is not a Palindrome string.\n";
  }
}

Palindroom("malayalam");
?>
