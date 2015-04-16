<?php
  $words=array('l' => 'lemon', 'o' => 'orange', 'b' => 'banana');

  function echo_words($value, $key, $prefix){
      //echo "$prefix:$key=>$value". PHP_EOL;
      echo "$key=>$value". PHP_EOL;
  }

  array_walk($words,'echo_words','words');
