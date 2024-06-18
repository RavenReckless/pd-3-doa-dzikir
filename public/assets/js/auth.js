document.addEventListener('DOMContentLoaded', function() {
  const sign_in_btn = document.querySelector("#sign-in-btn");
  const sign_up_btn = document.querySelector("#sign-up-btn");
  const container = document.querySelector(".container");

  sign_up_btn.addEventListener("click", function() {
      container.classList.add("sign-up-mode");
  });

  sign_in_btn.addEventListener("click", function() {
      container.classList.remove("sign-up-mode");
  });

  // Validasi Form Register
  const form = document.getElementById('register-form');
  form.addEventListener('submit', function(event) {
    let valid = true;

    // Hapus pesan kesalahan sebelumnya dari Laravel
    document.getElementById('name-error').innerText = '';
    document.getElementById('password-error').innerText = '';
    document.getElementById('password-confirmation-error').innerText = '';

    // Validasi username
    const name = document.getElementById('name').value;
    if (name === '') {
      document.getElementById('name-error').innerText = 'Username diperlukan.';
      valid = false;
    }

    // Validasi password
    const password = document.getElementById('password').value;
    if (password.length < 8) {
      document.getElementById('password-error').innerText = 'Password harus minimal 8 karakter.';
      valid = false;
    }

    // Validasi konfirmasi password
    const passwordConfirmation = document.getElementById('password_confirmation').value;
    if (password !== passwordConfirmation) {
      document.getElementById('password-confirmation-error').innerText = 'Password tidak cocok.';
      valid = false;
    }

    if (!valid) {
      event.preventDefault(); // Cegah pengiriman formulir jika validasi gagal
    }
  });
});
