<html>
<head>
  <title>Display Page</title>
</head>
<body>
  <center>
    <h2>Display Page</h2>
  <p>Is this question data correct?</p>
  <form method="post" action="savedata.php">
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
        echo "<input type='hidden' name='Question' value='" . $_POST['Question'] . "' />";
      }
      if(!empty($_POST['textarea'])){
        echo "<tr>";
        echo "<td width='20%'>Answer</td>";
        echo "<td>" . $_POST['textarea'] . "</td>";
        echo "</tr>";
        echo "<input type='hidden' name='textarea' value='" . $_POST['textarea'] . "' />";

      }
      if(!empty($_POST['Answer1'])){
        echo "<tr>";
        echo "<td width='20%'>Answer1</td>";
        echo "<td>" . $_POST['Answer1'] . "</td>";
        echo "</tr>";
        echo "<input type='hidden' name='Answer1' value='" . $_POST['Answer1'] . "' />";

      }
      if(!empty($_POST['Answer2'])){
        echo "<tr>";
        echo "<td width='20%'>Answer2</td>";
        echo "<td>" . $_POST['Answer2'] . "</td>";
        echo "</tr>";
        echo "<input type='hidden' name='Answer2' value='" . $_POST['Answer2'] . "' />";

      }
      if(!empty($_POST['Answer3'])){
        echo "<tr>";
        echo "<td width='20%'>Answer3</td>";
        echo "<td>" . $_POST['Answer3'] . "</td>";
        echo "</tr>";
        echo "<input type='hidden' name='Answer3' value='" . $_POST['Answer3'] . "' />";

      }
      if(!empty($_POST['Answer4'])){
        echo "<tr>";
        echo "<td width='20%'>Answer4</td>";
        echo "<td>" . $_POST['Answer4'] . "</td>";
        echo "</tr>";
        echo "<input type='hidden' name='Answer4' value='" . $_POST['Answer4'] . "' />";

      }
      if(!empty($_POST['solution'])){
        if($_POST['solution'] == "one"){
          $_POST['solution'] =  $_POST['Answer1']
        }
        if($_POST['solution'] == "two"){
          $_POST['solution'] =  $_POST['Answer2']
        }
        if($_POST['solution'] == "three"){
          $_POST['solution'] =  $_POST['Answer3']
        }
        if($_POST['solution'] == "four"){
          $_POST['solution'] =  $_POST['Answer4']
        }
        echo "<tr>";
        echo "<td width='20%'>Solution</td>";
        echo "<td>" . $_POST['solution'] . "</td>";
        echo "</tr>";
        echo "<input type='hidden' name='solution' value='" . $_POST['solution'] . "' />";

      }
      if(!empty($_POST['trueFalse'])){
        echo "<tr>";
        echo "<td width='20%'>Answer</td>";
        echo "<td>" . $_POST['trueFalse'] . "</td>";
        echo "</tr>";
        echo "<input type='hidden' name='trueFalse' value='" . $_POST['trueFalse'] . "' />";

      }
      </script>
  </table>
  </post>
  <input type="button" value="Back" onclick="window.history.back()"/>
  <input type="submit" value="Save"/>
</center>
</body>
</html>
