

const menuItems = [
    {
        href: "#",
        icon: "ri-home-4-line",
        title: "Home",
        desc: "Halaman utama PALCO Grow"
    },
    {
        href: "#",
        icon: "ri-leaf-line",
        title: "Artikel",
        desc: "Tips & edukasi pertanian"
    },
    {
        href: "#",
        icon: "ri-customer-service-2-line",
        title: "Hubungi Kami",
        desc: "Kontak & bantuan"
    },
    {
        href: "#",
        icon: "ri-user-line",
        title: "Akun",
        desc: "Masuk ke akun Anda"
    }
];

const mobileMenu = document.getElementById("mobileMenu");

mobileMenu.innerHTML = menuItems.map(item => `
<a href="${item.href}"
   class="flex flex-col gap-1 py-3 px-4 w-full text-[15px]
          bg-white rounded-xl mb-3 shadow-sm hover:bg-green-50 transition">

    <div class="flex items-center gap-3">
        <span class="bg-green-100 px-3 py-2 rounded-lg">
            <i class="${item.icon} text-lg text-green-600"></i>
        </span>

        <div class="flex flex-col">
            <span class="text-gray-900 font-semibold">${item.title}</span>
            <span class="text-[12px] text-gray-500">${item.desc}</span>
        </div>
    </div>
</a>
`).join("");


const btn = document.getElementById('toggleBtn');
const menu = document.getElementById('mobileMenu');
const icon = document.getElementById('icon');

const overlay = document.getElementById('menuOverlay');

btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
    overlay.classList.toggle('hidden');

    icon.classList.toggle('ri-menu-line');
    icon.classList.toggle('ri-close-line');
});

overlay.addEventListener('click', () => {
    menu.classList.add('hidden');
    overlay.classList.add('hidden');

    icon.classList.add('ri-menu-line');
    icon.classList.remove('ri-close-line');
});


const navbar = document.getElementById('navbar');

window.addEventListener('scroll', () => {
    if (window.scrollY > 20) {
        navbar.classList.add(
            'bg-white/70',
            'backdrop-blur-md',
            'shadow-sm'
        );
    } else {
        navbar.classList.remove(
            'bg-white/70',
            'backdrop-blur-md',
            'shadow-sm'
        );
    }
});

const faqs = document.querySelectorAll('.faq-item');

faqs.forEach(faq => {
    faq.addEventListener('click', () => {
        const isActive = faq.classList.contains('active');

        faqs.forEach(f => {
            f.classList.remove('active');
            f.querySelector('.faq-icon').textContent = '+';

            const content = f.querySelector('.faq-content');
            content.style.maxHeight = "0"; // ganti null jadi "0"
            content.style.opacity = 0;
        });


        if (!isActive) {
            faq.classList.add('active');
            faq.querySelector('.faq-icon').textContent = '×';

            const content = faq.querySelector('.faq-content');
            // Buka konten dengan animasi
            content.style.maxHeight = content.scrollHeight + "px";
            content.style.opacity = 1;
        }
    });
});
