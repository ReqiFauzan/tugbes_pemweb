navLinks.forEach(link => {
  link.addEventListener('click', (event) => {
    // Hapus class active dari semua
    navLinks.forEach(l => l.classList.remove('active'));
    // Tambahkan ke yang diklik
    link.classList.add('active');
  });
});