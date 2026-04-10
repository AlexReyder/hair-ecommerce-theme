(function () {
  const header = document.querySelector('.nh-site-header--home');
  if (!header) return;

  const toggle = header.querySelector('.nh-site-header__toggle');
  const drawer = header.querySelector('.nh-site-header__drawer');
  if (!toggle || !drawer) return;

  const closers = drawer.querySelectorAll('[data-nh-drawer-close]');
  const drawerLinks = drawer.querySelectorAll('a');
  let closeTimer = null;

  function openDrawer() {
    if (closeTimer) {
      clearTimeout(closeTimer);
      closeTimer = null;
    }
    drawer.hidden = false;
    // Force reflow so the transform transition runs.
    void drawer.offsetWidth;
    drawer.classList.add('is-open');
    toggle.setAttribute('aria-expanded', 'true');
    toggle.setAttribute('aria-label', 'Close menu');
    document.body.classList.add('nh-drawer-open');
  }

  function closeDrawer() {
    drawer.classList.remove('is-open');
    toggle.setAttribute('aria-expanded', 'false');
    toggle.setAttribute('aria-label', 'Open menu');
    document.body.classList.remove('nh-drawer-open');
    closeTimer = setTimeout(() => {
      drawer.hidden = true;
    }, 350);
  }

  toggle.addEventListener('click', () => {
    if (toggle.getAttribute('aria-expanded') === 'true') {
      closeDrawer();
    } else {
      openDrawer();
    }
  });

  closers.forEach((el) => el.addEventListener('click', closeDrawer));
  drawerLinks.forEach((a) => a.addEventListener('click', closeDrawer));

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && toggle.getAttribute('aria-expanded') === 'true') {
      closeDrawer();
    }
  });
})();
