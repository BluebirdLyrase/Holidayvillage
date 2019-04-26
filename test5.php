<?php

console_log("asdasdsd");

function console_log($data) {
    echo "do this";
    $output  = "<script>console.log( 'PHP debugger: ";
    $output .= json_encode(print_r($data, true));
    $output .= "' );</script>";
    echo $output;
  }

?>