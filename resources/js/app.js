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
    const header = document.getElementById('site-header');
    const icon = $('#nav-toggle-icon');
    if (!btn || !panel) return;

    const close = () => {
        panel.classList.remove('max-lg:translate-x-0');
        panel.classList.add('max-lg:-translate-x-full');
        icon?.classList.remove('rotate-180');
        header?.classList.remove('site-header--menu-open');
        btn.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('overflow-hidden');
        window.dispatchEvent(new CustomEvent('site-header:menu-closed'));
    };

    const open = () => {
        panel.classList.remove('max-lg:-translate-x-full');
        panel.classList.add('max-lg:translate-x-0');
        icon?.classList.add('rotate-180');
        header?.classList.add('site-header--menu-open');
        btn.setAttribute('aria-expanded', 'true');
        if (window.matchMedia('(max-width: 63.99rem)').matches) {
            document.body.classList.add('overflow-hidden');
        }
    };

    btn.addEventListener('click', () => {
        if (panel.classList.contains('max-lg:-translate-x-full')) open();
        else close();
    });

    panel.querySelectorAll('a').forEach((a) => a.addEventListener('click', close));

    window.addEventListener('resize', () => {
        if (window.matchMedia('(min-width: 64rem)').matches) {
            document.body.classList.remove('overflow-hidden');
        }
    });
}

function initSiteHeaderScheme() {
    const header = document.getElementById('site-header');
    const panel = document.getElementById('nav-panel');
    if (!header) return;

    const zones = document.querySelectorAll('[data-header-scheme]');
    const hasZones = zones.length > 0;

    const navHashLinks = panel
        ? [...panel.querySelectorAll('a[href^="#"]')].filter((a) => a.hash.length > 1)
        : [];
    const sectionIds = [...new Set(navHashLinks.map((a) => decodeURIComponent(a.hash.slice(1))))];
    let spySections = sectionIds.map((id) => document.getElementById(id)).filter(Boolean);
    spySections.sort((a, b) => a.offsetTop - b.offsetTop);

    let ticking = false;

    const applyScheme = () => {
        if (!hasZones) return;

        if (header.classList.contains('site-header--menu-open')) {
            return;
        }

        const rect = header.getBoundingClientRect();
        const x = Math.min(Math.max(window.innerWidth / 2, 8), window.innerWidth - 8);
        const y = Math.min(rect.bottom + 6, window.innerHeight - 8);
        const stack = document.elementsFromPoint(x, y);

        let scheme = 'light';
        for (const el of stack) {
            if (header.contains(el)) continue;
            const zone = el.closest('[data-header-scheme]');
            if (zone) {
                scheme = zone.dataset.headerScheme === 'dark' ? 'dark' : 'light';
                break;
            }
        }

        header.classList.toggle('site-header--dark', scheme === 'dark');
        header.classList.toggle('site-header--light', scheme === 'light');
    };

    const applyNavSpy = () => {
        if (!spySections.length || !panel) return;

        const headerOffset = header.offsetHeight + 12;
        const doc = document.documentElement;
        const nearBottom = window.scrollY + window.innerHeight >= doc.scrollHeight - 4;

        let activeId = '';
        if (nearBottom) {
            activeId = spySections[spySections.length - 1].id;
        } else {
            for (const section of spySections) {
                if (section.getBoundingClientRect().top <= headerOffset) {
                    activeId = section.id;
                }
            }
        }

        navHashLinks.forEach((link) => {
            const id = decodeURIComponent(link.hash.slice(1));
            const on = id === activeId;
            link.classList.toggle('site-header__link--active', on);
            if (on) link.setAttribute('aria-current', 'location');
            else link.removeAttribute('aria-current');
        });

        const cta = header.querySelector('.site-header__cta[href^="#"]');
        if (cta) {
            const onCta = activeId === 'cadastro-embaixador';
            cta.classList.toggle('site-header__cta--active', onCta);
        }
    };

    const apply = () => {
        applyScheme();
        applyNavSpy();
        ticking = false;
    };

    const schedule = () => {
        if (ticking) return;
        ticking = true;
        requestAnimationFrame(apply);
    };

    apply();
    window.addEventListener('scroll', schedule, { passive: true });
    window.addEventListener('resize', () => {
        spySections = sectionIds.map((id) => document.getElementById(id)).filter(Boolean);
        spySections.sort((a, b) => a.offsetTop - b.offsetTop);
        schedule();
    });
    window.addEventListener('site-header:menu-closed', schedule);
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
    initSiteHeaderScheme();
    initContactForm();
});
