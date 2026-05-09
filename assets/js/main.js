(function () {
  const html = document.documentElement;
  const savedTheme = localStorage.getItem('phpstrap-theme');
  if (savedTheme) html.setAttribute('data-bs-theme', savedTheme);

  function updateIcon(theme) {
    const icon = document.querySelector('#themeToggle i');
    if (icon) icon.className = theme === 'dark' ? 'fa-solid fa-sun' : 'fa-solid fa-moon';
  }

  const toggle = document.getElementById('themeToggle');
  if (toggle) {
    updateIcon(html.getAttribute('data-bs-theme') || 'light');
    toggle.addEventListener('click', function () {
      const next = html.getAttribute('data-bs-theme') === 'dark' ? 'light' : 'dark';
      html.setAttribute('data-bs-theme', next);
      localStorage.setItem('phpstrap-theme', next);
      updateIcon(next);
    });
  }
})();
