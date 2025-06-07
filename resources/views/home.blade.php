
<html>
  @include('layouts.head')
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-[#fcf8fa] group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        @include('components.header')
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="@container">
              <div class="@[480px]:p-4">
                <div
                  class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-xl items-center justify-center p-4"
                  style='background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.4) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCqisg9DIjYq_jxGiUhoCFj6C_MHF8FyxeyECdQX0NAvsligAvgbjb3OIRCdl0x0twJSAFkzNOUDfXAULYEawoWAITaGRSz4m1BwvdrhIRKaUmBwI0b-sbhI23o3JaiF8QWwabbBTUPv5kH-IvobbMDaRRdDnAIuQVrTL1KxfWWQea0MCXYK6RiHQGJLQ_icrSr4N5eRyOYKt6cFTTfn1CGTpfmvr9dCje7ntdYLBc94X5c_bM_u11R_5WIku1n4Z9NFT4JECR69psC");'
                >
                  <div class="flex flex-col gap-2 text-center">
                    <h1
                      class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]"
                    >
                      Discover the perfect food for your mood
                    </h1>
                    <h2 class="text-white text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">
                      Uncover personalized food recommendations tailored to your emotional state. Start your journey to a happier, healthier you.
                    </h2>
                  </div>
                  <button onclick="window.location.href='{{ route('qpage') }}';"
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#ea47b4] text-[#fcf8fa] text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em]"
                  >
                    <span class="truncate">Ready to discover yourself?</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        @include('components.footer')
      </div>
    </div>
  </body>
</html>