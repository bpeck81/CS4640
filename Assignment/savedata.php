<?php
  //called after question is saved and redirects to main page

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = array();
    $current = "";
    $current .= file_get_contents("data/question_data.txt");
    foreach ($_POST as $key => $value) {
      $current .= (string) $key . ":" . (string) $value . "||";
    }
    file_put_contents("data/question_data.txt", $current);
  }
  header( "Location: jeopardy.php" );
 ?>
