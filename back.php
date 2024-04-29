<?php
  if(isset($_POST['red']) || isset($_POST['green']) || isset($_POST['blue'])){
    echo $_POST['red'];
    echo "\n" . $_POST['green'];
    echo "\n" . $_POST['blue'];
  } else {
    echo "black";
  }
  echo "\n\n\n";
  echo $_POST['chair'];
?>
