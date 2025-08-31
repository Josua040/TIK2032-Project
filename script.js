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


window.addEventListener('load', () => {
    console.log("Website berhasil dimuat!");
});


const navbar = document.getElementById('navbar');
let lastScrollY = window.scrollY;

window.addEventListener('scroll', () => {
    const currentScroll = window.scrollY;


    if (currentScroll > 10) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }

    if (currentScroll > lastScrollY) {
        navbar.style.top = '-100px';
    } else {
        navbar.style.top = '0';
    }

    lastScrollY = currentScroll;
});

document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();

    const contactData = {
        name,
        email,
        message,
        timestamp: new Date().toISOString()
    };

    const messages = JSON.parse(localStorage.getItem('messages')) || [];
    messages.push(contactData);
    localStorage.setItem('messages', JSON.stringify(messages));

    document.getElementById('confirmation').textContent = "Thanks! Your message has been saved (simulation).";
    this.reset();
});

