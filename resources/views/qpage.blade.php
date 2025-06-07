


<!-- resources/views/qpage.blade.php -->

<html>
@include('layouts.head')
<body>
  <div class="relative flex size-full min-h-screen flex-col bg-[#fbf9fa] group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
    <div class="layout-container flex h-full grow flex-col">
      @include('components.header')
      <div class="px-40 flex flex-1 justify-center py-5">
        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">

          {{-- الأسئلة هنا --}}
          <form action="{{ route('submitAnswers') }}" method="POST" id="questionsForm">
            @csrf

            <div class="flex flex-col gap-3 p-4">
              <div class="flex gap-6 justify-between">
                <p id="progressText" class="text-[#191016] text-base font-medium leading-normal">1/5</p>
              </div>
              <div class="rounded bg-[#e4d3de]">
                <div id="progressBar" class="h-2 rounded bg-[#eaadd6]" style="width: 20%;"></div>
              </div>
            </div>

            @php
              $questions = [
                [
                  "question" => "How are you feeling today?",
                  "options" => ["Happy", "Sad", "Stressed", "Relaxed", "Angry", "Excited"]
                ],
                [
                  "question" => "How did you feel when you woke up?",
                  "options" => ["Happy", "Sad", "Stressed", "Relaxed", "Angry", "Excited"]
                ],
                [
                  "question" => "How do you feel after eating your last meal?",
                  "options" => ["Happy", "Sad", "Stressed", "Relaxed", "Angry", "Excited"]
                ],
                [
                  "question" => "How are you feeling about your work/study today?",
                  "options" => ["Happy", "Sad", "Stressed", "Relaxed", "Angry", "Excited"]
                ],
                [
                  "question" => "How do you feel at the end of the day?",
                  "options" => ["Happy", "Sad", "Stressed", "Relaxed", "Angry", "Excited"]
                ],
              ];
            @endphp

            @foreach ($questions as $index => $q)
              <div class="question-container" data-index="{{ $index }}" style="{{ $index === 0 ? '' : 'display:none;' }}">
                <h2 class="text-[#191016] tracking-light text-[28px] font-bold leading-tight px-4 text-center pb-3 pt-5">{{ $q['question'] }}</h2>
                <div class="flex flex-wrap gap-3 p-4 justify-center">
                  @foreach ($q['options'] as $option)
                    <label
                      class="text-sm font-medium leading-normal flex items-center justify-center rounded-xl border border-[#e4d3de] px-4 h-11 text-[#191016] cursor-pointer
                        has-[:checked]:border-[3px] has-[:checked]:px-3.5 has-[:checked]:border-[#eaadd6] relative"
                    >
                      {{ $option }}
                      <input type="radio" class="invisible absolute" name="answer_{{ $index }}" value="{{ $option }}" required />
                    </label>
                  @endforeach
                </div>
              </div>
            @endforeach

            <div class="flex justify-between px-4 py-3">
              <button type="button" id="prevBtn"
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center rounded-full h-10 px-4 bg-[#f1e9ef] text-[#191016] text-sm font-bold leading-normal tracking-[0.015em]"
                disabled>Previous</button>

              <button type="button" id="nextBtn"
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center rounded-full h-10 px-4 bg-[#eaadd6] text-[#191016] text-sm font-bold leading-normal tracking-[0.015em]">
                Next</button>

              <button type="submit" id="submitBtn"
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center rounded-full h-10 px-4 bg-[#eaadd6] text-[#191016] text-sm font-bold leading-normal tracking-[0.015em]"
                style="display:none;">Submit</button>
            </div>
          </form>

        </div>
      </div>
      @include('components.footer')
    </div>
  </div>

  <script>
    const questions = document.querySelectorAll('.question-container');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const submitBtn = document.getElementById('submitBtn');
    const progressText = document.getElementById('progressText');
    const progressBar = document.getElementById('progressBar');
    let currentIndex = 0;
    const total = questions.length;

    function showQuestion(index) {
      questions.forEach((q, i) => {
        q.style.display = i === index ? 'block' : 'none';
      });

      // تحديث أزرار التنقل
      prevBtn.disabled = index === 0;
      nextBtn.style.display = index === total - 1 ? 'none' : 'inline-flex';
      submitBtn.style.display = index === total - 1 ? 'inline-flex' : 'none';

      // تحديث progress
      progressText.textContent = `${index + 1}/${total}`;
      progressBar.style.width = `${((index + 1) / total) * 100}%`;
    }

    prevBtn.addEventListener('click', () => {
      if (currentIndex > 0) {
        currentIndex--;
        showQuestion(currentIndex);
      }
    });

    nextBtn.addEventListener('click', () => {
      // تأكد من اختيار جواب قبل التقدم للسؤال التالي
      const inputs = questions[currentIndex].querySelectorAll('input[type="radio"]');
      let checked = false;
      inputs.forEach(input => {
        if (input.checked) checked = true;
      });
      if (!checked) {
        alert('Please select an answer before proceeding.');
        return;
      }
      if (currentIndex < total - 1) {
        currentIndex++;
        showQuestion(currentIndex);
      }
    });

    // عرض أول سؤال عند تحميل الصفحة
    showQuestion(currentIndex);
  </script>
</body>
</html>
