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
    <div class="relative flex size-full min-h-screen flex-col bg-[#fbf9fa] group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
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
            <div class="flex flex-col gap-3 p-4">
              <div class="flex gap-6 justify-between"><p class="text-[#191016] text-base font-medium leading-normal">1/5</p></div>
              <div class="rounded bg-[#e4d3de]"><div class="h-2 rounded bg-[#eaadd6]" style="width: 20%;"></div></div>
            </div>
            <h2 class="text-[#191016] tracking-light text-[28px] font-bold leading-tight px-4 text-center pb-3 pt-5">How are you feeling today?</h2>
            <div class="flex flex-wrap gap-3 p-4">
              <label
                class="text-sm font-medium leading-normal flex items-center justify-center rounded-xl border border-[#e4d3de] px-4 h-11 text-[#191016] has-[:checked]:border-[3px] has-[:checked]:px-3.5 has-[:checked]:border-[#eaadd6] relative cursor-pointer"
              >
                Happy
                <input type="radio" class="invisible absolute" name="ef52c821-c002-41fe-8610-ce3c2c3cfe3d" />
              </label>
              <label
                class="text-sm font-medium leading-normal flex items-center justify-center rounded-xl border border-[#e4d3de] px-4 h-11 text-[#191016] has-[:checked]:border-[3px] has-[:checked]:px-3.5 has-[:checked]:border-[#eaadd6] relative cursor-pointer"
              >
                Sad
                <input type="radio" class="invisible absolute" name="ef52c821-c002-41fe-8610-ce3c2c3cfe3d" />
              </label>
              <label
                class="text-sm font-medium leading-normal flex items-center justify-center rounded-xl border border-[#e4d3de] px-4 h-11 text-[#191016] has-[:checked]:border-[3px] has-[:checked]:px-3.5 has-[:checked]:border-[#eaadd6] relative cursor-pointer"
              >
                Stressed
                <input type="radio" class="invisible absolute" name="ef52c821-c002-41fe-8610-ce3c2c3cfe3d" />
              </label>
              <label
                class="text-sm font-medium leading-normal flex items-center justify-center rounded-xl border border-[#e4d3de] px-4 h-11 text-[#191016] has-[:checked]:border-[3px] has-[:checked]:px-3.5 has-[:checked]:border-[#eaadd6] relative cursor-pointer"
              >
                Relaxed
                <input type="radio" class="invisible absolute" name="ef52c821-c002-41fe-8610-ce3c2c3cfe3d" />
              </label>
            </div>
            <div class="flex justify-stretch">
              <div class="flex flex-1 gap-3 flex-wrap px-4 py-3 justify-between">
                <button
                  class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-[#f1e9ef] text-[#191016] text-sm font-bold leading-normal tracking-[0.015em]"
                >
                  <span class="truncate">Previous</span>
                </button>
                <button
                  class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-[#eaadd6] text-[#191016] text-sm font-bold leading-normal tracking-[0.015em]"
                >
                  <span class="truncate">Next</span>
                </button>

                <!-- <a href="{{ route('resultpage') }}">النتيجه</a> -->

                <button onclick="window.location.href='{{ route('resultpage') }}';"
                class="flex min-w-[90px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-[#eaadd6] text-[#191016] text-sm font-bold leading-normal tracking-[0.015em]"
                >
                <span class="truncate">Result</span>
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