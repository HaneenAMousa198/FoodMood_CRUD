<html>
  @include('layouts.head')

  <body>
    <div class="relative flex min-h-screen flex-col bg-[#fbf9fa] font-sans overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex grow flex-col">
        
        {{-- Header --}}
        @include('components.header')

        {{-- About Section --}}
        <section class="w-full bg-gradient-to-b from-[#fbf9fa] to-[#fbf9fa] py-16 px-4">
          <div class="max-w-[960px] mx-auto flex flex-col items-center text-center gap-8">
            
            <h2 class="text-4xl font-extrabold text-[#191016]">About MoodFood</h2>
            <p class="text-[#4d3b39] text-lg leading-relaxed max-w-[700px]">
              MoodFood is a wellness-focused food platform that recommends meals tailored to how you're feeling.
              Whether you're happy, stressed, or just need a pick-me-up, we help you choose food that matches your emotions.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 w-full mt-4">
              <div class="bg-white rounded-2xl shadow-lg p-6 text-left border border-[#e4d3de] hover:shadow-xl transition duration-300">
                <div class="mb-3">
                  <svg class="w-8 h-8 text-[#eaadd6]" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2a10 10 0 100 20 10 10 0 000-20zM11 11V7h2v4h-2zm0 2h2v2h-2v-2z"/>
                  </svg>
                </div>
                <h3 class="text-xl font-semibold text-[#191016] mb-2">Our Mission</h3>
                <p class="text-[#4d3b39] text-sm leading-relaxed">
                  Empowering individuals to make food choices that support their emotional well-being, using mood-driven suggestions.
                </p>
              </div>

              <div class="bg-white rounded-2xl shadow-lg p-6 text-left border border-[#e4d3de] hover:shadow-xl transition duration-300">
                <div class="mb-3">
                  <svg class="w-8 h-8 text-[#eaadd6]" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 6.42 
                             3.42 5 5.5 5c1.74 0 3.41 1.01 
                             4.13 2.44H14.5c2.21 0 4 1.79 
                             4 4 0 1.46-.79 2.75-2 3.45V17l-2 1.5V14.9a5.996 5.996 0 01-4.5 2.6z"/>
                  </svg>
                </div>
                <h3 class="text-xl font-semibold text-[#191016] mb-2">Why Mood-Based?</h3>
                <p class="text-[#4d3b39] text-sm leading-relaxed">
                  Food impacts our feelings. Choosing meals based on emotions creates a deeper, healthier connection between mind and body.
                </p>
              </div>
            </div>
          </div>
        </section>

        {{-- Footer --}}
        @include('components.footer')

      </div>
    </div>
  </body>
</html>
