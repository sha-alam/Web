<!DOCTYPE html>
<html>
  <head>
    <title>Electricity Bill Calculator</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
        color: #333;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
      }
      .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
      }
      h1 {
        margin-top: 0;
        font-size: 36px;
        text-align: center;
      }
      form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 20px;
      }
      label {
        font-weight: bold;
        margin-bottom: 10px;
      }
      input[type="number"] {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        width: 100%;
        max-width: 300px;
        margin-bottom: 20px;
        box-sizing: border-box;
      }
      button[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
      }
      button[type="submit"]:hover {
        background-color: #3e8e41;
      }
      p.result {
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        margin-top: 0;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Electricity Bill Calculator</h1>
      <form method="post">
        <label for="units">Units Consumed:</label>
        <input type="number" id="units" name="units" required>
        <button type="submit">Calculate</button>
      </form>
      <?php
        if(isset($_POST['units'])) {
          $units = $_POST['units'];
          $bill = 0;
          if ($units <= 50) {
            $bill = $units * 3.50;
          } elseif ($units <= 100) {
            $bill = 50 * 3.50 + ($units - 50) * 4.00;
          } elseif ($units <= 200) {
            $bill = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
          } else {
            $bill = 50 * 3.50 + 50 * 4.00 + 150 * 5.20 + ($units - 250) * 6.50;
          }
          echo "<p class='result'>Electricity bill for $units units: Taka $bill</p>";
        }
      ?>
    </div>
  </body>
</html>
