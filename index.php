<?php
  $welcome_message="Eric showed Joey a string";
  //Declare the above in two more ways
  $welcome_message1="Eric showed Joey a loop";
  $welcome_message2= <<<WMK
  Arwings showed Paul an array.
WMK;

  //Declare every word of the string above on a newline
  //Split this string

  $welcome_message_array= explode(' ', $welcome_message);
  foreach ($welcome_message_array as $word) {
    echo "{$word}<br/>";
  }
?>
