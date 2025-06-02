<?php
session_start();

// untuk menyimpan nama
if (isset($_SESSION['username'])) {
    $loggedInUser = $_SESSION['username'];
} else {
    $loggedInUser = "Pengguna tidak terdaftar";
}
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="nav.css"> 
</head>
<body>
    <header>
        <div class="profile">
            <img src="../lobi/img/th.jpeg" alt="user profile">
            <span><?php echo $loggedInUser; ?></span>
        </div>

       <?php
$current = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar">
    <a href="../lobi/lobi.php" class="nav-link <?php if($current == 'lobi.php') echo 'active'; ?>">Home</a>
    <a href="../activities/riwayat.php" class="nav-link <?php if($current == 'riwayat.php') echo 'active'; ?>">Activities</a>
    <a href="../booking/index.php" class="nav-link <?php if($current == 'index.php') echo 'active'; ?>">Booking</a>
</nav>


      <title>Dropdown Settings</title>
    
        <div class="dropdown-container">
        <button class="settings">⚙️</button>

        <div class="dropdown-menu">
            <a href="../profile/profile.php">Profile</a>
            <a href="../lobi/lobi.php">Home</a>
            <a href="../tukangservis/rating.php">Rating</a>
            <a href="../jadwalservis/jadwal.php">jadwal servis</a>
            <a href="../lobi/logout.php">Logout</a>
        </div>
  </header>
    <script src="nav.js"></script>
</body>
</html>

