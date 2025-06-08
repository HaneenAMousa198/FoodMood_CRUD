<html>
  @include('layouts.head')
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-[#fcfaf8] group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        @include('components.header')
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <h2 class="text-[#1b140d] tracking-light text-[28px] font-bold leading-tight px-4 text-center pb-3 pt-5">Your Mood: Happy 😀</h2>
            <p class="text-[#1b140d] text-base font-normal leading-normal pb-3 pt-1 px-4 text-center">
              Based on your responses, we think you're feeling happy! Here are some food suggestions to match your mood:
            </p>

            <div class="p-4 @container">
              <div class="flex flex-col items-stretch justify-start rounded-xl @xl:flex-row @xl:items-start shadow-[0_0_4px_rgba(0,0,0,0.1)] bg-[#fcfaf8]">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB1d9PGDYgyCbZn00pfMeyJRZQhyXe2nIIsEKoGyg4bQl2oW9QgY2k7zcxlvbc52OPpQCBR3HSIzzyoRkHVwQBrp-jFPC23QNYRyIvrj9pD5hEmpGV5WaM-QI-pKj3zd8AaN5j03qn0Xfem7v15H085Ts2NwvYJCpU-alcJxJbL0u5VzkX6Qx3KCk5ySwHcsej2U82bt-0xsGfWuHaCIMZ-U8L639k3rGKBMmGCjEPsHB82h5MwqMQznhZ3xEXyapoRPO5y4c4YrMhz");'
                ></div>
                <div class="flex w-full min-w-72 grow flex-col items-stretch justify-center gap-1 py-4 @xl:px-4 px-4">
                  <p class="text-[#1b140d] text-lg font-bold leading-tight tracking-[-0.015em]">Pasta Carbonara</p>
                  <div class="flex items-end gap-3 justify-between">
                    <div class="flex flex-col gap-1">
                      <p class="text-[#9a734c] text-base font-normal leading-normal">Creamy pasta with bacon and cheese</p>
                      <p class="text-[#9a734c] text-base font-normal leading-normal">A classic comfort food that brings joy with every bite.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="p-4 @container">
              <div class="flex flex-col items-stretch justify-start rounded-xl @xl:flex-row @xl:items-start shadow-[0_0_4px_rgba(0,0,0,0.1)] bg-[#fcfaf8]">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCLzgFFGMMM8NVku0gl3DC7yy_g8Mg6Oui6zO8EI409a3CRiXiSmPwxJsD0TIl1O7pCPjx2mRCRPmz6p0tASljDt2wFg0eAScdTYMRT2JsoSsJd_D7CT3R3d0uxxEiKlz9uwyKnlOq4ftb-wWjsQWJy4jPGwc-7iTZFBt_1wWl-t1WRes3ClC5XifZPVviAK89X7ynqY5HLTbh5XPA02KfOqNSvEL3nzWAgH7dzVFLQb065vyjePaGJ5cDQ6gnfaWx-QjyQOseQwq3n");'
                ></div>
                <div class="flex w-full min-w-72 grow flex-col items-stretch justify-center gap-1 py-4 @xl:px-4 px-4">
                  <p class="text-[#1b140d] text-lg font-bold leading-tight tracking-[-0.015em]">Chocolate Cake</p>
                  <div class="flex items-end gap-3 justify-between">
                    <div class="flex flex-col gap-1">
                      <p class="text-[#9a734c] text-base font-normal leading-normal">Rich and decadent chocolate cake</p>
                      <p class="text-[#9a734c] text-base font-normal leading-normal">A sweet treat that can brighten any day.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="p-4 @container">
              <div class="flex flex-col items-stretch justify-start rounded-xl @xl:flex-row @xl:items-start shadow-[0_0_4px_rgba(0,0,0,0.1)] bg-[#fcfaf8]">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCfAtlXzn-DcuEgWzdzzamUa1enId8DbzTHbVmxJjQjJb0d04tHsY7hVdUskykRuBNfp3ZZxaRUBom8dGnA90LHKJR4SSYM-XUQvzo4qyZOcH_RTSoTlrFIZhIKVblv-QC70Fs_Bx3FjSYpL4iMgBegRgbsLKuWMWzBxHY4hZ_6GcOvkQcKWFuV1BmJpDKpkMHKdNwRHTPWNGAdMghIS0tUpV5DUrl69i3U_gTamdWBoWeVD_6wFIe9UKByWaEocY3hE8dFDMr057b8");'
                ></div>
                <div class="flex w-full min-w-72 grow flex-col items-stretch justify-center gap-1 py-4 @xl:px-4 px-4">
                  <p class="text-[#1b140d] text-lg font-bold leading-tight tracking-[-0.015em]">Fruit Salad</p>
                  <div class="flex items-end gap-3 justify-between">
                    <div class="flex flex-col gap-1">
                      <p class="text-[#9a734c] text-base font-normal leading-normal">A mix of fresh and colorful fruits</p>
                      <p class="text-[#9a734c] text-base font-normal leading-normal">A refreshing and light option for a happy mood.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="flex justify-center">
              <div class="flex flex-1 gap-3 flex-wrap px-4 py-3 max-w-[480px] justify-center">

                <!-- زر Try Again بعد التعديل -->
                <button
                  onclick="window.location.href='{{ route('home') }}';"
                  class="self-start bg-[#eaadd6] hover:bg-[#f280cd] text-[#191016] px-6 py-3 rounded-full font-semibold transition-transform duration-200 ease-in-out hover:scale-[1.03] hover:shadow-lg"
                >
                  Try Again
                </button>

                <!-- زر Share بعد التعديل -->
                <button
                  class="self-start bg-[#eaadd6] hover:bg-[#f280cd] text-[#191016] px-6 py-3 rounded-full font-semibold transition-transform duration-200 ease-in-out hover:scale-[1.03] hover:shadow-lg"
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
