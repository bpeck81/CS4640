<html>
<head>
  <title>Simple form handler</title>
</head>

<body bgcolor="#EEEEEE">
  <center><h2>Simple Form Handler</h2></center>
  <p>
    The following table lists all parameter names and their values that were submitted from your form.
  </p>

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
      if(!empty($_POST['trueFalse'])){
        echo "<tr>";
        echo "<td width='20%'>Answer</td>";
        echo "<td>" . $_POST['trueFalse'] . "</td>";
        echo "</tr>";
      }
      </script>
  </table>

</body>
</html> 
