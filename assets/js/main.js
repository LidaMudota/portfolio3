const header = document.querySelector('[data-elevate]');
const nav = document.querySelector('.nav');
const navToggle = document.querySelector('.nav__toggle');
const navLinks = document.querySelectorAll('.nav__list a');

const setHeaderState = () => {
  header?.classList.toggle('is-elevated', window.scrollY > 12);
};

setHeaderState();
window.addEventListener('scroll', setHeaderState, { passive: true });

navToggle?.addEventListener('click', () => {
  const isOpen = nav?.classList.toggle('is-open') ?? false;
  navToggle.setAttribute('aria-expanded', String(isOpen));
});

navLinks.forEach((link) => {
  link.addEventListener('click', () => {
    nav?.classList.remove('is-open');
    navToggle?.setAttribute('aria-expanded', 'false');
  });
});

const revealElements = document.querySelectorAll('.reveal');
const revealObserver = 'IntersectionObserver' in window
  ? new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      });
    }, { threshold: 0.16, rootMargin: '0px 0px -40px' })
  : null;

revealElements.forEach((element) => {
  if (!revealObserver) {
    element.classList.add('is-visible');
    return;
  }
  revealObserver.observe(element);
});

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
const tiltCards = document.querySelectorAll('[data-tilt-card]');

const resetTilt = (card) => {
  card.style.setProperty('--tilt-x', '0deg');
  card.style.setProperty('--tilt-y', '0deg');
};

const handleTilt = (event) => {
  if (prefersReducedMotion.matches) return;
  const card = event.currentTarget;
  const rect = card.getBoundingClientRect();
  const x = (event.clientX - rect.left) / rect.width - 0.5;
  const y = (event.clientY - rect.top) / rect.height - 0.5;
  card.style.setProperty('--tilt-x', `${(-y * 7).toFixed(2)}deg`);
  card.style.setProperty('--tilt-y', `${(x * 7).toFixed(2)}deg`);
};

tiltCards.forEach((card) => {
  card.addEventListener('pointermove', handleTilt);
  card.addEventListener('pointerleave', () => resetTilt(card));
  card.addEventListener('blur', () => resetTilt(card), true);
});
