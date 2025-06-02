<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Jadwal Servis</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
    body {
      font-family: 'Poppins', sans-serif;
      background: #f0f0f0;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      color: #333;
    }

    .judul {
    background-color: hsl(210, 1%, 26%);
    width: 630px;
    padding: 1.5rem;
    color: white;
    text-align: center;
    box-shadow: 0 4px 10px rgba(73, 74, 75, 0.4);
    }

    main {
      padding: 2rem;
      width: 600px;
      background: white;
      border-radius: 12px;
      margin: 2rem 0;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    ul.jadwal-list {
      list-style: none;
      padding: 0;
    }

    ul.jadwal-list li {
      background: #f9f9f9;
      margin-bottom: 1rem;
      padding: 1rem 1.2rem;
      border-radius: 8px;
      display: flex;
      justify-content: space-between;
    }

    ul.jadwal-list li span.date {
      font-weight: bold;
    }
    
    footer {
      text-align: center;
      padding: 1rem 0;
      font-size: 0.9rem;
      color: #666;
    }
  </style>
</head>
<body>
   <?php include '../navbar/navbar.php';?>
    <link rel="stylesheet" href="../navbar/nav.css">
    <script src="../navbar/nav.js"></script>

  
    <h1 class="judul">Jadwal Servis</h1>

  <main>
    <h2>Jadwal Servis Anda</h2>
    <ul class="jadwal-list" id="jadwalList"></ul>
  </main>
  <footer>
    &copy; 2024 Jadwal Servis
  </footer>

<script>
  const jadwalServis = [
    { tanggal: '2024-07-15', keterangan: 'Servis Mesin Mobil' },
    { tanggal: '2024-08-10', keterangan: 'Ganti Oli' },
    { tanggal: '2024-09-05', keterangan: 'Pemeriksaan Rem' },
    { tanggal: '2024-10-20', keterangan: 'Tune Up' }
  ];

  const jadwalList = document.getElementById('jadwalList');

  function tampilkanJadwal() {
    jadwalServis.forEach(item => {
      const li = document.createElement('li');
      li.innerHTML = `<span class="date">${item.tanggal}</span><span>${item.keterangan}</span>`;
      jadwalList.appendChild(li);
    });
  }

  tampilkanJadwal();
</script>
</body>
</html>
