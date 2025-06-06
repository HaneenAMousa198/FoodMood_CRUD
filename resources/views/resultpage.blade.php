<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800"
    />

    <title>foodmood</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-[#fcfaf8] group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f3ede7] px-10 py-3">
          <div class="flex items-center gap-4 text-[#1b140d]">
            <h2 class="text-[#1b140d] text-lg font-bold leading-tight tracking-[-0.015em]">MoodFood</h2>
          </div>
          <div class="flex flex-1 justify-end gap-8">
            <div class="flex items-center gap-9">
              <a class="text-[#1b140d] text-sm font-medium leading-normal" href="{{ route('home') }}">Home</a>
              <a class="text-[#1b140d] text-sm font-medium leading-normal" href="{{ route('qpage') }}">test</a>
              <a class="text-[#1b140d] text-sm font-medium leading-normal" href="#">About</a>
              <a class="text-[#1b140d] text-sm font-medium leading-normal" href="#">Contact</a>
            </div>
            <button
              class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 bg-[#f3ede7] text-[#1b140d] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5"
            >
              <div class="text-[#1b140d]" data-icon="User" data-size="20px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"
                  ></path>
                </svg>
              </div>
            </button>
            <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
              style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA2DK51bguLwZeROlfATxVVOYS7ACpSjfnGC3TQQiB402feASA_X3416OqwQDx2ILIu4gJh79kJxf2oFMHI2uJLomghINW3CWta9ESC5Kwy6-OQoiLb2lXGi31fc1s3W-iCftHeGAp17_Zxs3s92OTDNEpUTHQoQUJMHLrErGJyHg89uy71MyuHfqnRgZd47gclYAkxNDwWRllk2p669U7gsdlfbIkWqswFjjDPnoUBjjmeR7VgDkWlleZqJUkq5sh9s8D4qkqVbqTI");'
            ></div>
          </div>
        </header>
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
                <button  onclick="window.location.href='{{ route('home') }}';"
                  class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-[#ef9842] text-[#1b140d] text-sm font-bold leading-normal tracking-[0.015em] grow"
                >
                  <span class="truncate">Try Again</span>
                </button>
                <button
                  class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-[#f3ede7] text-[#1b140d] text-sm font-bold leading-normal tracking-[0.015em] grow"
                >
                  <span class="truncate">Share</span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <footer class="flex justify-center">
          <div class="flex max-w-[960px] flex-1 flex-col">
            <footer class="flex flex-col gap-6 px-5 py-10 text-center @container">
              <div class="flex flex-wrap items-center justify-center gap-6 @[480px]:flex-row @[480px]:justify-around">
                <a class="text-[#9a734c] text-base font-normal leading-normal min-w-40" href="#">Privacy Policy</a>
                <a class="text-[#9a734c] text-base font-normal leading-normal min-w-40" href="#">Terms of Service</a>
              </div>
              <div class="flex flex-wrap justify-center gap-4">
                <a href="#">
                  <div class="text-[#9a734c]" data-icon="TwitterLogo" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M247.39,68.94A8,8,0,0,0,240,64H209.57A48.66,48.66,0,0,0,168.1,40a46.91,46.91,0,0,0-33.75,13.7A47.9,47.9,0,0,0,120,88v6.09C79.74,83.47,46.81,50.72,46.46,50.37a8,8,0,0,0-13.65,4.92c-4.31,47.79,9.57,79.77,22,98.18a110.93,110.93,0,0,0,21.88,24.2c-15.23,17.53-39.21,26.74-39.47,26.84a8,8,0,0,0-3.85,11.93c.75,1.12,3.75,5.05,11.08,8.72C53.51,229.7,65.48,232,80,232c70.67,0,129.72-54.42,135.75-124.44l29.91-29.9A8,8,0,0,0,247.39,68.94Zm-45,29.41a8,8,0,0,0-2.32,5.14C196,166.58,143.28,216,80,216c-10.56,0-18-1.4-23.22-3.08,11.51-6.25,27.56-17,37.88-32.48A8,8,0,0,0,92,169.08c-.47-.27-43.91-26.34-44-96,16,13,45.25,33.17,78.67,38.79A8,8,0,0,0,136,104V88a32,32,0,0,1,9.6-22.92A30.94,30.94,0,0,1,167.9,56c12.66.16,24.49,7.88,29.44,19.21A8,8,0,0,0,204.67,80h16Z"
                      ></path>
                    </svg>
                  </div>
                </a>
                <a href="#">
                  <div class="text-[#9a734c]" data-icon="InstagramLogo" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"
                      ></path>
                    </svg>
                  </div>
                </a>
                <a href="#">
                  <div class="text-[#9a734c]" data-icon="FacebookLogo" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm8,191.63V152h24a8,8,0,0,0,0-16H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,0-16H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0,0,16h24v63.63a88,88,0,1,1,16,0Z"
                      ></path>
                    </svg>
                  </div>
                </a>
              </div>
              <p class="text-[#9a734c] text-base font-normal leading-normal">@2024 MoodFood. All rights reserved.</p>
            </footer>
          </div>
        </footer>
      </div>
    </div>
  </body>
</html>