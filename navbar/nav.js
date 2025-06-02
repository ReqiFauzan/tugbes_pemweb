const settingsButton = document.querySelector('.settings');
const dropdownContainer = document.querySelector('.dropdown-container');

settingsButton.addEventListener('click', () => {
  dropdownContainer.classList.toggle('active');
});

document.addEventListener('click', (event) => {
  if (!dropdownContainer.contains(event.target)) {
    dropdownContainer.classList.remove('active');
  }
}); 

//tombol menu nafbar
const navLinks = document.querySelectorAll('.nav-link');

navLinks.forEach(link => {
  link.addEventListener('click', (event) => {
    // Hapus class active dari semua
    navLinks.forEach(l => l.classList.remove('active'));
    // Tambahkan ke yang diklik
    link.classList.add('active');
  });
});