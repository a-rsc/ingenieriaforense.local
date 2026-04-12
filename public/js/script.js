// Preloader
window.addEventListener('load', () => {
  const loader = document.getElementById('Lfa-page-loading');
  if (loader) {
    loader.classList.add('hidden');
  }
});

document.addEventListener('DOMContentLoaded', () => {
  'use strict';

  // Navbar collapse on outside click
  const navbar = document.querySelector('.navbar');
  const collapseEl = document.getElementById('navbarSupportedContent');
  const toggler = document.querySelector('.navbar-toggler');

  if (navbar && collapseEl && toggler && typeof bootstrap !== 'undefined') {
    const navLinks = collapseEl.querySelectorAll('.nav-link');

    document.addEventListener('click', (event) => {
      const isOpen = collapseEl.classList.contains('show');
      const clickedInsideNavbar = navbar.contains(event.target);

      if (isOpen && !clickedInsideNavbar) {
        bootstrap.Collapse.getOrCreateInstance(collapseEl).hide();
      }
    });

    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        if (collapseEl.classList.contains('show')) {
          bootstrap.Collapse.getOrCreateInstance(collapseEl).hide();
        }
      });
    });
  }

  // Contact form handling
  const form = document.querySelector('.contact__form');
  const msg = document.querySelector('.contact__msg');

  if (form && msg) {
    const showMsg = (text, type) => {
      msg.classList.remove('alert-success', 'alert-danger');
      msg.classList.add(type === 'error' ? 'alert-danger' : 'alert-success');
      msg.textContent = text || '';
      msg.style.display = 'block';

      if (msg._timeoutId) clearTimeout(msg._timeoutId);
      msg._timeoutId = setTimeout(() => {
        msg.style.display = 'none';
      }, 3000);
    };

    let sending = false;

    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      if (sending) return;

      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }

      const hp = form.querySelector('[name="hp"]')?.value;
      if (hp) return;

      sending = true;

      const submitBtn = form.querySelector('[type="submit"]');
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.setAttribute('aria-busy', 'true');
      }

      try {
        const formData = new FormData(form);

        const response = await fetch(form.action, {
          method: 'POST',
          body: formData,
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
          }
        });

        const contentType = response.headers.get('content-type') || '';
        const data = contentType.includes('application/json')
          ? await response.json()
          : await response.text();

        if (!response.ok) {
          throw { data };
        }

        let txt = '';
        if (typeof data === 'object' && data) {
          txt = data.message || data.msg || '';
        }

        if (!txt) {
          txt = (typeof data === 'string' && data) || 'Tu mensaje se envió correctamente.';
        }

        showMsg(txt, 'success');
        form.reset();

      } catch (err) {
        let txt = 'Error al enviar el formulario. Inténtalo de nuevo.';

        if (err.data) {
          if (typeof err.data === 'object') {
            txt = err.data.error || err.data.message || txt;
          } else if (typeof err.data === 'string') {
            txt = err.data;
          }
        }

        showMsg(txt, 'error');
      } finally {
        sending = false;

        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.removeAttribute('aria-busy');
        }
      }
    });
  }
});