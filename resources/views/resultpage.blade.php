<html>
  @include('layouts.head')
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-[#fcfaf8] group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        @include('components.header')

        <div class="px-2 sm:px-6 md:px-20 flex flex-1 justify-center py-3">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">

            <!-- Container for intro text and mood -->
            <div class="flex flex-col items-center gap-2 sm:gap-3 py-3 px-2 text-center max-w-[600px] mx-auto">
              <div class="flex flex-col sm:flex-row items-center justify-center gap-2 sm:gap-4">
                <img src="{{ asset('image/mood.png') }}" alt="Mood Icon" class="w-28 h-28 sm:w-32 sm:h-32" />
                <h1 class="text-[#1b140d] text-base sm:text-xl font-semibold leading-snug">
                  You have discovered what your mood is today
                </h1>
              </div>
              
              <h2 class="text-[#1b140d] tracking-light text-[22px] sm:text-[26px] font-bold leading-tight mt-1">
                Your Mood: {{ $mood['dominant_moods'][0]['mood'] }} 
              </h2>
              <p class="text-[#1b140d] text-sm sm:text-base font-normal leading-normal">
                {{ $mood['analysis'] }}
              </p>
            </div>

            <div class="flex flex-col md:flex-row gap-4 sm:gap-6 px-2 overflow-visible md:overflow-x-auto scroll-smooth md:scroll-snap-x snap-mandatory scrollbar-thin scrollbar-thumb-[#eaadd6] scrollbar-track-transparent">
              @foreach($recipes as $recipe)
                <div
                  class="flex flex-col rounded-xl shadow-[0_0_4px_rgba(0,0,0,0.1)] bg-[#fcfaf8] p-4 min-w-full md:min-w-[260px] max-w-full md:max-w-[300px] snap-start"
                  style="scroll-snap-align: start;"
                >
                  <p class="text-[#1b140d] text-lg font-bold leading-tight tracking-[-0.015em] mb-2">{{ $recipe['name'] }}</p>
                  <p class="text-[#9a734c] text-sm sm:text-base font-normal leading-normal mb-2">
                    <strong>Ingredients:</strong><br>
                    @foreach($recipe['ingredients'] as $ingredient)
                      {{ $ingredient }}<br>
                    @endforeach
                  </p>
                  <p class="text-[#9a734c] text-sm sm:text-base font-normal leading-normal mb-2">
                    <strong>Method:</strong> {{ $recipe['method'] }}
                  </p>
                  <p class="text-[#9a734c] text-sm sm:text-base font-normal leading-normal">
                    <strong>Serving suggestion:</strong> {{ $recipe['serving_suggestion'] }}
                  </p>
                </div>
              @endforeach
            </div>

            <!-- رفع الأزرار شوي -->
            <div class="flex justify-center mt-2 sm:mt-5">
              <div class="flex flex-1 gap-2 sm:gap-3 flex-wrap px-2 py-2 max-w-[480px] justify-center">
                <button
                  onclick="window.location.href='{{ route('home') }}';"
                  class="self-start bg-[#eaadd6] hover:bg-[#f280cd] text-[#191016] px-5 py-2 sm:px-6 sm:py-3 rounded-full font-semibold transition-transform duration-200 ease-in-out hover:scale-[1.03] hover:shadow-lg"
                >
                  Try Again
                </button>

                <button
                  class="self-start bg-[#eaadd6] hover:bg-[#f280cd] text-[#191016] px-5 py-2 sm:px-6 sm:py-3 rounded-full font-semibold transition-transform duration-200 ease-in-out hover:scale-[1.03] hover:shadow-lg"
                >
                  Share
                </button>
              </div>
            </div>

          </div>
        </div>
        
        @include('components.footer')
      </div>
    </div>
  </body>
</html>
