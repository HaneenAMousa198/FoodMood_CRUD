<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoodFood</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="min-h-screen bg-[#fcf8fa] font-sans overflow-x-hidden">

    <div class="layout-container flex flex-col h-full">
        @include('components.header')

        <body>
    <!-- الحاوية الرئيسية للموقع -->
    <div class="relative flex size-full min-h-screen flex-col bg-[#fcf8fa] group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
      
      <div class="layout-container flex h-full grow flex-col">
        <!-- المحتوى الرئيسي -->
        < class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="@container">
              <div class="@[480px]:p-4">
                
                <!-- خلفية ترحيبية رئيسية -->
                <div class="flex min-h-[480px] flex-col gap-6 items-center justify-center bg-cover bg-center p-4"
                  style='background-image: linear-gradient(...), url("رابط الخلفية");'>
                  
                  <!-- عناوين ترحيبية -->
                  <div class="flex flex-col gap-2 text-center">
                    <h1 class="text-white text-4xl font-black">Discover the perfect food for your mood</h1>
                    <h2 class="text-white text-sm font-normal">Uncover personalized food recommendations...</h2>
                  </div>

                  <!-- زر للانتقال إلى صفحة الاختبار -->
                  <button onclick="window.location.href='{{ route('qpage') }}';"
                    class="rounded-full h-10 px-4 bg-[#ea47b4] text-white text-sm font-bold">
                    <span>Ready to discover yourself?</span>
                  </button>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

        @include('components.footer')
    </div>

</body>
</html>
