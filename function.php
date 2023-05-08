<?php
// generate pss func
function generate_password($length, $char)
{
   return substr(str_shuffle($char), 0, $length);
}
?>