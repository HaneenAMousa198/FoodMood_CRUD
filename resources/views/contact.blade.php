<html>
  @include('layouts.head')

  <body>
    <div class="relative flex min-h-screen flex-col bg-[#fbf9fa] font-sans overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex grow flex-col">
        
        {{-- Header --}}
        @include('components.header')

        {{-- Contact Section --}}
        <section class="w-full bg-gradient-to-b from-[#fbf9fa] to-[#fbf9fa] py-20 px-4">
          <div class="max-w-[960px] mx-auto flex flex-col items-center text-center gap-10">
            
            <h2 class="text-4xl font-extrabold text-[#191016]">Contact Us</h2>
            <p class="text-[#4d3b39] text-lg max-w-[700px] leading-relaxed">
              We'd love to hear from you! Whether you have questions, suggestions, or just want to say hi — drop us a message and we'll get back to you soon.
            </p>

            <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-10 mt-6">
              
              <!-- Contact Info -->
              <div class="text-left space-y-6">
                <div>
                  <h3 class="text-xl font-semibold text-[#191016] mb-2">Email</h3>
                  <p class="text-[#4d3b39] text-base">support@moodfood.com</p>
                </div>
                <div>
                  <h3 class="text-xl font-semibold text-[#191016] mb-2">Phone</h3>
                  <p class="text-[#4d3b39] text-base">+962 7 9999 9999</p>
                </div>
                <div>
                  <h3 class="text-xl font-semibold text-[#191016] mb-2">Location</h3>
                  <p class="text-[#4d3b39] text-base">Amman, Jordan</p>
                </div>
              </div>

              <!-- Contact Form -->
              <form class="bg-white p-8 rounded-2xl border border-[#ecdce6] shadow-md space-y-5 text-left">
                <div>
                  <label class="block text-sm font-medium text-[#191016] mb-1">Your Name</label>
                  <input type="text" class="w-full border border-[#e0d0dc] rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#d67ab1]" placeholder="John Doe">
                </div>
                <div>
                  <label class="block text-sm font-medium text-[#191016] mb-1">Email Address</label>
                  <input type="email" class="w-full border border-[#e0d0dc] rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#d67ab1]" placeholder="you@example.com">
                </div>
                <div>
                  <label class="block text-sm font-medium text-[#191016] mb-1">Message</label>
                  <textarea class="w-full border border-[#e0d0dc] rounded-md px-4 py-2 h-28 resize-none focus:outline-none focus:ring-2 focus:ring-[#d67ab1]" placeholder="Your message here..."></textarea>
                </div>
                <button type="submit" class="bg-[#eaadd6] hover:bg-[#7a5a3b] text-[#191016] px-6 py-3 rounded-full font-semibold transition duration-300">
                  Send Message    
                </button>
              </form>

            </div>
          </div>
        </section>

        {{-- Footer --}}
        @include('components.footer')

      </div>
    </div>
  </body>
</html>
