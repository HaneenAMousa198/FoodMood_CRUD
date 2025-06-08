<header
  class="relative flex items-center justify-between border-b border-solid border-b-[#f3ede7]
         px-6 py-3 md:px-10
         bg-white text-[#1b140d]">
  <div class="flex items-center gap-4">
    <h2 class="text-lg font-bold leading-tight tracking-[-0.015em]">
      MoodFood
    </h2>
  </div>

  <!-- زر البرغر فقط على الشاشات الصغيرة -->
  <button
    id="burger-btn"
    class="md:hidden flex items-center justify-center p-2 rounded-md
           hover:bg-[#f280cd] focus:outline-none">
    <svg class="w-6 h-6 text-[#1b140d]" fill="none" stroke="currentColor" stroke-width="2"
         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
  </button>

  <!-- قائمة الروابط في الشاشات الكبيرة -->
  <nav id="nav-links" class="hidden md:flex flex-1 justify-end gap-8 items-center">
    <div class="flex items-center gap-9">
      <a class="text-sm font-medium leading-normal text-[#1b140d]" href="{{ route('home') }}">Home</a>
      <a class="text-sm font-medium leading-normal text-[#1b140d]" href="{{ route('qpage') }}">test</a>
      <a class="text-sm font-medium leading-normal text-[#1b140d]" href="{{ route('about') }}">About</a>
      <a class="text-sm font-medium leading-normal text-[#1b140d]" href="{{ route('contact') }}">Contact</a>
    </div>
  </nav>

  <!-- القائمة المنسدلة على الشاشات الصغيرة -->
  <div id="mobile-menu"
       class="absolute top-full right-0 mt-2 w-48
              bg-white rounded-md shadow-lg border border-gray-200
              md:hidden hidden z-[9999]">
    <a href="{{ route('home') }}" class="block px-4 py-2 text-sm text-[#191016] hover:bg-[#f280cd]">Home</a>
    <a href="{{ route('qpage') }}" class="block px-4 py-2 text-sm text-[#191016] hover:bg-[#f280cd]">test</a>
    <a href="{{ route('about') }}" class="block px-4 py-2 text-sm text-[#191016] hover:bg-[#f280cd]">About</a>
    <a href="{{ route('contact') }}" class="block px-4 py-2 text-sm text-[#191016] hover:bg-[#f280cd]">Contact</a>
  </div>
</header>

<script>
  const burgerBtn = document.getElementById('burger-btn');
  const mobileMenu = document.getElementById('mobile-menu');

  burgerBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    mobileMenu.classList.toggle('hidden');
  });

  mobileMenu.addEventListener('click', (e) => {
    e.stopPropagation();
  });

  document.addEventListener('click', () => {
    mobileMenu.classList.add('hidden');
  });
</script>
