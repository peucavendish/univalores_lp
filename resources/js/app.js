import './bootstrap';

const $ = (sel, root = document) => root.querySelector(sel);

function initHero() {
    const root = $('#hero-carousel');
    if (!root) return;

    const slides = [...root.querySelectorAll('[data-hero-slide]')];
    const copies = [...root.querySelectorAll('[data-hero-copy]')];
    const dots = [...root.querySelectorAll('[data-hero-dot]')];
    let i = 0;
    const show = (n) => {
        i = ((n % slides.length) + slides.length) % slides.length;
        slides.forEach((el, j) => el.classList.toggle('hero-slide--active', j === i));
        copies.forEach((el, j) => el.classList.toggle('hidden', j !== i));
        dots.forEach((el, j) => {
            el.classList.toggle('bg-white', j === i);
            el.classList.toggle('bg-white/40', j !== i);
        });
    };

    show(0);
    setInterval(() => show(i + 1), 8000);
    dots.forEach((dot, j) => dot.addEventListener('click', () => show(j)));
}

function initNav() {
    const btn = $('#nav-toggle');
    const panel = document.getElementById('nav-panel');
    const icon = $('#nav-toggle-icon');
    if (!btn || !panel) return;

    const close = () => {
        panel.classList.add('max-lg:invisible', 'max-lg:-translate-x-full');
        icon?.classList.remove('rotate-180');
    };
    const open = () => {
        panel.classList.remove('max-lg:invisible', 'max-lg:-translate-x-full');
        icon?.classList.add('rotate-180');
    };

    btn.addEventListener('click', () => {
        if (panel.classList.contains('max-lg:invisible')) open();
        else close();
    });

    panel.querySelectorAll('a').forEach((a) => a.addEventListener('click', close));
}

function initContactForm() {
    const form = $('#form-contato');
    const ok = $('#form-sucesso');
    if (!form || !ok) return;

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        form.classList.add('hidden');
        ok.classList.remove('hidden');
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initHero();
    initNav();
    initContactForm();
});
