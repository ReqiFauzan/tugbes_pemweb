<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Booking Bengkel</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
     <?php include '../navbar/navbar.php';?>
    <link rel="stylesheet" href="../navbar/nav.css">
    <script src="../navbar/nav.js"></script>

  <div class="container">
    <h2>Form Booking Bengkel</h2>
    <form id="bookingForm">
      <label for="lokasi">Lokasi Bengkel:</label>
      <select id="lokasi" required>
        <option value="">-- Pilih Lokasi --</option>
        <option value="Jakarta">Jakarta</option>
        <option value="Bandung">Bandung</option>
        <option value="Surabaya">Surabaya</option>
      </select>

      <label for="tanggal">Tanggal:</label>
      <input type="date" id="tanggal" required>

      <label for="jam">Jam:</label>
      <input type="time" id="jam" required>

      <label for="keluhan">Keluhan:</label>
      <textarea id="keluhan" rows="3" required></textarea>

      <label for="jenis">Jenis Mobil:</label>
      <input type="text" id="jenis" placeholder="Contoh: Toyota Avanza" required>

      <label for="montir">Pilih Montir:</label>
      <select id="montir" required>
        <option value="">-- Pilih Montir --</option>
        <option value="Montir A">Montir A</option>
        <option value="Montir B">Montir B</option>
        <option value="Montir C">Montir C</option>
      </select>

      <button type="submit">Booking Sekarang</button>
    </form>
    <div id="output"></div>
  </div>

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
