<script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('#header-nav');
    const overlay = document.querySelector('.menu-overlay');
    const closeButton = document.querySelector('.menu-close');

    if (!toggle || !nav || !overlay) {
      return;
    }

    function setMenuState(isOpen) {
      nav.classList.toggle('open', isOpen);
      overlay.classList.toggle('visible', isOpen);
      toggle.setAttribute('aria-expanded', String(isOpen));
      document.body.classList.toggle('menu-open', isOpen);
    }

    toggle.addEventListener('click', function () {
      const isOpen = !nav.classList.contains('open');
      setMenuState(isOpen);
    });

    if (closeButton) {
      closeButton.addEventListener('click', function () {
        setMenuState(false);
      });
    }

    overlay.addEventListener('click', function () {
      setMenuState(false);
    });

    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape' && nav.classList.contains('open')) {
        setMenuState(false);
      }
    });
  });
</script>
</body>
</html>