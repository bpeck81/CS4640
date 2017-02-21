<html>
<head>
  <title>Display Page</title>
</head>

<body>
  <center>
    <h2>Display Page</h2>
  <p>Is this question data correct?</p>
  <table cellSpacing=1 cellPadding=1 width="75%" border=1 bgColor="lavender">
    <tr bgcolor="#FFFFFF">
      <td align="center"><strong>Parameter</strong></td>
      <td align="center"><string>Value</string></td>
    </tr>
      <script language="PHP">
      if(!empty($_POST['Question'])){
        echo "<tr>";
        echo "<td width='20%'>Question</td>";
        echo "<td>" . $_POST['Question'] . "</td>";
        echo "</tr>";
      }
      if(!empty($_POST['textarea'])){
        echo "<tr>";
        echo "<td width='20%'>Answer</td>";
        echo "<td>" . $_POST['textarea'] . "</td>";
        echo "</tr>";
      }
      if(!empty($_POST['Answer1'])){
        echo "<tr>";
        echo "<td width='20%'>Answer1</td>";
        echo "<td>" . $_POST['Answer1'] . "</td>";
        echo "</tr>";
      }
      if(!empty($_POST['Answer2'])){
        echo "<tr>";
        echo "<td width='20%'>Answer2</td>";
        echo "<td>" . $_POST['Answer2'] . "</td>";
        echo "</tr>";
      }
      if(!empty($_POST['Answer3'])){
        echo "<tr>";
        echo "<td width='20%'>Answer3</td>";
        echo "<td>" . $_POST['Answer3'] . "</td>";
        echo "</tr>";
      }
      if(!empty($_POST['Answer4'])){
        echo "<tr>";
        echo "<td width='20%'>Answer4</td>";
        echo "<td>" . $_POST['Answer4'] . "</td>";
        echo "</tr>";
      }
      if(!empty($_POST['solution'])){
        echo "<tr>";
        echo "<td width='20%'>Solution</td>";
        echo "<td>" . $_POST['solution'] . "</td>";
        echo "</tr>";
      }
      if(!empty($_POST['trueFalse'])){
        echo "<tr>";
        echo "<td width='20%'>Answer</td>";
        echo "<td>" . $_POST['trueFalse'] . "</td>";
        echo "</tr>";
      }
      </script>
  </table>
  <input type="submit" value="Save" />
  <input type="button" value="Back" />
</center>
</body>
</html>
<?php

  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $data = array();
    foreach ($_POST as $key => $value) {
      $data[$key] = $value;
    }
    $current = file_get_contents("question_data.txt");
    $current .= serialize($data);
    file_put_contents("question_data.txt", $current);
    echo "Question Saved";
  }
  if($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo 'called';
  }


 ?>
