<!DOCTYPE html>
<html>
  <head>
    <title>Simple Calculator</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: skyblue;
      }
      h1 {
        text-align: center;
        color: #333;
      }
      form {
        width: 50%;
        margin: auto;
        border: 2px solid #333;
        padding: 20px;
      }
      input[type=number] {
        padding: 5px;
        border-radius: 5px;
        border: none;
        width: 100%;
        box-sizing: border-box;
        margin-bottom: 10px;
      }
      select {
        padding: 5px;
        border-radius: 5px;
        border: none;
        width: 100%;
        box-sizing: border-box;
        margin-bottom: 10px;
      }
      button[type=submit] {
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
      }
      button[type=submit]:hover {
        background-color: #555;
      }
      p {
        margin-top: 20px;
        text-align: center;
        font-size: 24px;
        color: #333;
      }
      .error {
        color: red;
        text-align: center;
        margin-top: 10px;
      }
    </style>
  </head>
  <body>
    <h1>Simple Calculator</h1>
    <form method="post">
      <label for="num1">Number 1:</label>
      <input type="number" id="num1" name="num1" required>
      <br><br>
      <label for="num2">Number 2:</label>
      <input type="number" id="num2" name="num2" required>
      <br><br>
      <label for="operation">Operation:</label>
      <select id="operation" name="operation" required>
        <option value="">Select operation</option>
        <option value="add">Addition</option>
        <option value="subtract">Subtraction</option>
        <option value="multiply">Multiplication</option>
        <option value="divide">Division</option>
      </select>
      <br><br>
      <button type="submit">Calculate</button>
    </form>
    <?php
      if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        switch($operation) {
          case 'add':
            $result = $num1 + $num2;
            break;
          case 'subtract':
            $result = $num1 - $num2;
            break;
          case 'multiply':
            $result = $num1 * $num2;
            break;
          case 'divide':
            if($num2 != 0) {
              $result = $num1 / $num2;
            } else {
              echo '<p style="color: red;">Error: Division by zero</p>';
            }
            break;
          default:
            echo '<p style="color: red;">Error: Invalid operation</p>';
        }
        if(isset($result)) {
          echo '<p>The result is: '.$result.'</p>';
        }
      }
    ?>
  </body>
</html>
