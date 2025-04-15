// Smooth scroll saat klik link nav
document.querySelectorAll('nav a').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetSection = document.getElementById(targetId);

        targetSection.scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Console log saat halaman selesai dimuat
window.addEventListener('load', () => {
    console.log("Website berhasil dimuat!");
});

// Navbar blur + hide on scroll down
const navbar = document.getElementById('navbar');
let lastScrollY = window.scrollY;

window.addEventListener('scroll', () => {
    const currentScroll = window.scrollY;

    // Tambah kelas blur jika scroll > 10px
    if (currentScroll > 10) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }

    // Scroll ke bawah → sembunyikan navbar
    // Scroll ke atas → tampilkan navbar
    if (currentScroll > lastScrollY) {
        navbar.style.top = '-100px';
    } else {
        navbar.style.top = '0';
    }

    lastScrollY = currentScroll;
});
