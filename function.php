<?php

$length = $_GET['pass_length'];

// generate pss func
function generate_password($length)
{
   if (!empty($_GET['pass_length'])) {
      $char = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz~!@#$%^&*()_-+={[}]|\:;".?/<>,';
      return substr(str_shuffle($char), 0, $length);
   }
}
?>