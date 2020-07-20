<?php
print<<<ENDOFPRINT
<!-- Everything in here prints literal ; and this is a comment -->

<html>
<center>A calculator</center>
<form name="calculator">
<input type="text" name="first_number" value="Enter a number"></input>
<select name="operator">
<option value="x">*</option>
<option value="add">+</option>
<option value="subtract">-</option>
<option value="divide">/</option>

</select>
<input type="text" name="second_number" value="Enter a number"></input>
<input type=Submit value="Calculate!">
<input type=hidden value=1 name="doIt">
</form>

</html>
ENDOFPRINT;

if ($_GET['doIt'] == 1) {

  switch ($_GET['operator']) {
    case 'x':
      print('Multiplication');
      $answer = $_GET['first_number'] * $_GET['second_number'];
      print('<h1><center>The answer is: '.$answer.'</h1></center>');
      break;
    case "add":
      print('Addition');
      $answer = $_GET['first_number'] + $_GET['second_number'];
      print('<h1><center>The answer is: '.$answer.'</h1></center>');
      break;
    case "subtract":
      print('Subtraction');
      $answer = $_GET['first_number'] - $_GET['second_number'];
    print('<h1><center>The answer is: '.$answer.'</h1></center>');
      break;
    case "divide":
    print('Division');
    $answer = $_GET['first_number'] / $_GET['second_number'];
    print('<h1><center>The answer is: '.$answer.'</h1></center>');
      break;
    default:
      // code...
      break;
  }


}








 ?>
