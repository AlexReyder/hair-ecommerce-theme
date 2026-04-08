document.addEventListener('click', (event) => {
  const trigger = event.target.closest('[data-popup-target]');

  if (!trigger) {
    return;
  }

  event.preventDefault();
  const popupId = trigger.getAttribute('data-popup-target');
  document.dispatchEvent(new CustomEvent('nice-hair:popup-open', { detail: { popupId } }));
});
