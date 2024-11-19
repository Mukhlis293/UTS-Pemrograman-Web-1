<div class="bg-white">
  <header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
      <!-- Logo -->
      <div class="flex lg:flex-1">
        <a href="index.php" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-20 w-auto" src="assets/logo3.png" alt="Logo">
        </a>
      </div>

      <!-- Mobile menu button (hamburger) -->
      <div class="flex lg:hidden relative z-60"> <!-- Add relative and z-60 -->
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>

      <!-- Desktop Navigation Menu -->
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="index.php" class="text-sm font-semibold text-gray-900 hover:text-indigo-600">Home</a>
        <a href="berita.php" class="text-sm font-semibold text-gray-900 hover:text-indigo-600">Berita</a>
        <a href="#" class="text-sm font-semibold text-gray-900 hover:text-indigo-600">Marketplace</a>
        <a href="#" class="text-sm font-semibold text-gray-900 hover:text-indigo-600">Company</a>
      </div>

      <!-- Login Button -->
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="login.php" class="text-sm font-semibold text-gray-900 hover:text-indigo-600">Log in <span aria-hidden="true">&rarr;</span></a>
      </div>
    </nav>

    <!-- Mobile Menu (hidden by default) -->
    <div id="mobile-menu" class="lg:hidden fixed inset-0 bg-white bg-opacity-95 z-50 transition-all duration-300 ease-in-out hidden">
      <!-- Menu Container -->
      <div class="space-y-2 px-6 py-4">
        <a href="index.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Home</a>
        <a href="berita.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Berita</a>
        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Company</a>
        <a href="login.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
      </div>
    </div>
  </header>
</div>

<!-- Script to toggle mobile menu -->
<script>
  const menuButton = document.querySelector('button[aria-controls="mobile-menu"]');
  const mobileMenu = document.getElementById('mobile-menu');
  
  menuButton.addEventListener('click', () => {
    const expanded = menuButton.getAttribute('aria-expanded') === 'true' || false;
    menuButton.setAttribute('aria-expanded', !expanded);
    mobileMenu.classList.toggle('hidden'); // Toggle visibility of mobile menu
  });
</script>
