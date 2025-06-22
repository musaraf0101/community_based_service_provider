<style>
  .dark-mode {
    background-color: #121212;
    color: black;
  }

  /* Optional: adjust other elements */
  .dark-mode a.nav-link {
    color: #ccc !important;
  }

  .dark-mode .btn-outline-primary {
    color: #ddd;
    border-color: #ddd;
  }

  .dark-mode .btn-outline-primary:hover {
    background-color: #444;
    border-color: #555;
    color: white;
  }
</style>

<nav class="navbar navbar-expand-lg bg-light" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/contact-us">Contact us</a>
        </li>
      </ul>

      <!-- Login, Register Buttons, and Dark Mode Toggle on the right -->
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item me-2">
          <a class="btn btn-outline-primary" href="/login">Login</a>
        </li>
        <!-- Dark Mode Toggle Button -->
        <li class="nav-item">
          <button id="darkModeToggle" class="btn btn-outline-secondary" aria-label="Toggle Dark Mode">
            <svg id="darkModeIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-moon" viewBox="0 0 16 16">
              <path
                d="M6 0a6 6 0 0 0 0 12c2.09 0 3.96-1.16 4.88-2.86a.5.5 0 0 0-.82-.57A5 5 0 1 1 6 1a.5.5 0 0 0 0-1z" />
            </svg>
          </button>
        </li>
      </ul>
    </div>
  </div>
</nav>


<script>
  const toggleBtn = document.getElementById('darkModeToggle');
  const icon = document.getElementById('darkModeIcon');
  const navbar = document.getElementById('navbar');

  // Check for saved preference in localStorage
  if (localStorage.getItem('darkMode') === 'enabled') {
    enableDarkMode();
  }

  toggleBtn.addEventListener('click', () => {
    if (document.body.classList.contains('dark-mode')) {
      disableDarkMode();
    } else {
      enableDarkMode();
    }
  });

  function enableDarkMode() {
    document.body.classList.add('dark-mode');
    navbar.classList.remove('bg-light');
    navbar.classList.add('bg-dark', 'navbar-dark');

    // Change icon to sun for light mode toggle
    icon.innerHTML = `
      <path d="M8 4.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7z"/>
      <path d="M8 0a.5.5 0 0 1 .5.5V2a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 8 0zm4.546 2.05a.5.5 0 1 1 .708.708l-1.06 1.06a.5.5 0 0 1-.708-.708l1.06-1.06zm3.454 6.45a.5.5 0 0 1 .5.5h-1.5a.5.5 0 0 1 0-1h1zm-6.5 6.5a.5.5 0 0 1-.5-.5v-1.5a.5.5 0 0 1 1 0v1.5a.5.5 0 0 1-.5.5zm-4.546-2.05a.5.5 0 1 1-.708-.708l1.06-1.06a.5.5 0 0 1 .708.708l-1.06 1.06zM0 8a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H.5A.5.5 0 0 1 0 8zm2.05-4.546a.5.5 0 1 1 .708-.708l1.06 1.06a.5.5 0 0 1-.708.708l-1.06-1.06z" />
    `;

    localStorage.setItem('darkMode', 'enabled');
  }

  function disableDarkMode() {
    document.body.classList.remove('dark-mode');
    navbar.classList.remove('bg-dark', 'navbar-dark');
    navbar.classList.add('bg-light');

    // Change icon back to moon
    icon.innerHTML = `
      <path d="M6 0a6 6 0 0 0 0 12c2.09 0 3.96-1.16 4.88-2.86a.5.5 0 0 0-.82-.57A5 5 0 1 1 6 1a.5.5 0 0 0 0-1z" />
    `;

    localStorage.setItem('darkMode', 'disabled');
  }
</script>