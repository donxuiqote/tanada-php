document.addEventListener('DOMContentLoaded', () => {
    const counters = [
        { id: 'jumlah-siswa', endValue: 120 },
        { id: 'tenaga-pendidik', endValue: 19 },
        { id: 'tata-usaha', endValue: 2 }
    ];

    const startCounting = (element, endValue) => {
        let currentValue = 0;
        const increment = endValue / 160;

        const updateCounter = () => {
            if (currentValue < endValue) {
                currentValue += increment;
                element.textContent = Math.ceil(currentValue);
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = endValue;
            }
        };

        updateCounter();
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const { target } = entry;
                const counter = counters.find(counter => counter.id === target.id);
                if (counter) {
                    startCounting(target, counter.endValue);
                    observer.unobserve(target);
                }
            }
        });
    });

    counters.forEach(counter => {
        const element = document.getElementById(counter.id);
        if (element) {
            observer.observe(element);
        }
    });

    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.getElementById('navMenu');

    menuToggle.addEventListener('click', () => {
        navMenu.classList.toggle('open');
        menuToggle.classList.toggle('active');
    });

    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    const items = document.querySelectorAll('.fasilitas-item');
    const galleries = document.querySelectorAll('.gallery');

    items.forEach(item => {
        item.addEventListener('click', () => {
            galleries.forEach(gallery => {
                if (gallery !== document.querySelector(item.getAttribute('data-target'))) {
                    gallery.classList.remove('active');
                    item.classList.remove('active');
                }
            });

            const targetId = item.getAttribute('data-target');
            const targetGallery = document.querySelector(targetId);
            if (targetGallery.classList.contains('active')) {
                targetGallery.classList.remove('active');
                item.classList.remove('active');
            } else {
                targetGallery.classList.add('active');
                item.classList.add('active');
            }
        });
    });
});
