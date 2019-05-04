<?php

function console_log($data) {
    $output  = "<script>console.log( 'PHP debugger: ";
    $output .= json_encode(print_r($data, true));
    $output .= "' );</script>";
    echo $output;
  }
////////////////////////////////////////////////////////////////////////////////////////
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}


?>