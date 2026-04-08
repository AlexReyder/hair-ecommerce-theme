document.addEventListener('click', (event) => {
  const toggle = event.target.closest('[data-before-after-toggle]');

  if (!toggle) {
    return;
  }

  const card = toggle.closest('[data-before-after-card]');

  if (!card) {
    return;
  }

  const state = toggle.getAttribute('data-before-after-toggle');
  card.setAttribute('data-before-after-state', state || 'before');
});
