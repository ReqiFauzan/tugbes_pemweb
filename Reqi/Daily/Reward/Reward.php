<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitur Reward Voucher</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAVIGATION BAR -->
<div class="navbar">
    <div class="nav-left">
        <a href="javascript:history.back()">
            <img src="gambar1.png" alt="kembali" class="img-content">
        </a>
    </div>
    <div class="nav-center">
        <h1 class="link-text">Reward Voucher</h1>
    </div>
    <div class="nav-right">
        <a href="favorit.html"><img src="gambar2.png" alt="love" class="img-right"></a>
        <a href="keranjang.html"><img src="gambar3.png" alt="toko" class="img-right"></a>
    </div>
</div>

<div class="container">
    <h1>Daftar Voucher</h1>

    <?php
    // Ambil data voucher dari database
    $sql = "SELECT * FROM vouchers ORDER BY expiry_date ASC";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0):
        while ($row = $result->fetch_assoc()):
    ?>
        <div class="voucher-item">
            <h2><?= htmlspecialchars($row['title']) ?></h2>
            <p><?= htmlspecialchars($row['description']) ?></p>
            <p class="expiry-date">Kedaluwarsa: <?= date("d F Y", strtotime($row['expiry_date'])) ?></p>
            <button onclick="klaimVoucher(<?= $row['id'] ?>)">Klaim Voucher</button>
        </div>
    <?php
        endwhile;
    else:
        echo "<p>Tidak ada voucher tersedia.</p>";
    endif;
    ?>
</div>

<script>
function klaimVoucher(id) {
    if (confirm("Yakin ingin klaim voucher ini?")) {
        fetch('/TubesWeb1/Bengkel/Reward/claim_voucher.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: 'voucher_id=' + encodeURIComponent(id)
        })
        .then(res => res.text())
        .then(data => alert(data))
        .catch(err => alert("Terjadi kesalahan: " + err));
    }
}
</script>
<script>
document.querySelectorAll('.claim-button').forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault();
        const voucherId = this.getAttribute('data-id');

        fetch('claim_voucher.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: `voucher_id=${voucherId}`
        })
        .then(response => response.text())
        .then(data => alert(data))
        .catch(err => alert("Terjadi kesalahan saat klaim."));
    });
});
</script>

</body>
</html>
