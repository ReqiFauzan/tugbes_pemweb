document.getElementById('bookingForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const lokasi = document.getElementById('lokasi').value;
  const tanggal = document.getElementById('tanggal').value;
  const jam = document.getElementById('jam').value;
  const keluhan = document.getElementById('keluhan').value;
  const jenis = document.getElementById('jenis').value;
  const montir = document.getElementById('montir').value;

  const output = document.getElementById('output');
  output.style.display = 'block';
  output.innerHTML = `
    <strong>Booking Berhasil!</strong><br>
    Lokasi: ${lokasi}<br>
    Tanggal: ${tanggal}<br>
    Jam: ${jam}<br>
    Jenis Mobil: ${jenis}<br>
    Montir: ${montir}<br>
    Keluhan: ${keluhan}
  `;
});

const toggle = document.getElementById("darkModeToggle");
toggle.addEventListener("change", () => {
  document.body.classList.toggle("dark-mode", toggle.checked);
});



