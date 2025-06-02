<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Purchase History</title>
 <link rel="stylesheet" href="style.css">
     
</head>
<body>
  
 <?php include '../navbar/navbar.php';?>
    <link rel="stylesheet" href="../navbar/nav.css">
    <script src="../navbar/nav.js"></script>

  <h2>Purchase History</h2>

  <table class="history-table">
    <thead>
      <tr>
        <th>Date</th>
        <th>Item</th>
        <th>Price</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>2025-05-03</td>
        <td>oli</td>
        <td>Rp70.000</td>
        <td><span class="status paid">Paid</span></td>
      </tr>
      <tr>
        <td>2025-04-28</td>
        <td>spare part</td>
        <td>Rp80.000</td>
        <td><span class="status pending">Pending</span></td>
      </tr>
      <tr>
        <td>2025-04-20</td>
        <td>spion</td>
        <td>Rp8000</td>
        <td><span class="status failed">Failed</span></td>
      </tr>
    </tbody>
  </table>

  <div class="floating-switch">
    <span class="icon sun">☀️</span>
    <label class="switch">
        <input type="checkbox" id="darkModeToggle">
        <span class="slider round"></span>
    </label>
    <span class="icon moon">🌙</span>
    </div>


  <script src="script.js"></script>
</body>
</html>
