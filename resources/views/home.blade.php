<html lang="en" dir="ltr">
  @include('layouts.head')
  <body>
    <div class="relative flex min-h-screen flex-col bg-[#fcf8fa] font-sans overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex grow flex-col">
        @include('components.header')

        <main class="flex flex-1 justify-center items-center px-4 py-10 max-w-7xl mx-auto gap-16 flex-col-reverse md:flex-row">

          <!-- Text content -->
          <div class="max-w-md flex flex-col justify-center text-left space-y-6">
            <h1 class="text-xl sm:text-3xl md:text-5xl font-extrabold text-[#111] leading-tight">
              <span class="text-[#e63946]">🍴</span> MoodFood
            </h1>
            <p class="text-base sm:text-lg text-[#4d3b39] leading-relaxed">
              Uncover personalized food recommendations tailored to your emotional state. Start your journey to a happier, healthier you.
            </p>
            <button
              onclick="window.location.href='{{ route('qpage') }}';"
              class="self-start bg-[#eaadd6] hover:bg-[#f280cd] text-[#191016] px-6 py-3 rounded-full font-semibold transition-transform duration-200 ease-in-out hover:scale-[1.03] hover:shadow-lg"
            >
              Ready to discover yourself?
            </button>
          </div>

          <!-- Image -->
          <div class="max-w-md">
            <img
              src="{{ asset('image\brain.png') }}"
              alt="Food Mood Brain"
              class="w-full h-auto rounded-lg"
            />
          </div>
        </main>

        @include('components.footer')
      </div>
    </div>
  </body>
</html>
