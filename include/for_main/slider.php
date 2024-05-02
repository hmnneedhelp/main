
<div class="flex flex-col items-center justify-center mx-auto mt-12">
        <p class="font-semibold text-center text-base text-[#FF6600]">КАТЕГОРИИ <br> навыков и услуг</p>
</div>

<div class="flex flex-col overflow-x-scroll snap-x scroll-hidden items-start mt-5 snap-center" id="scroll">
    <div id="slider" class="flex flex-row items-center gap-5 justify-start translate-x-1 ml-12 transition duration-500">
        <div class="flex flex-col bg-[#F1FFE3] text-center justify-center items-center w-[325px] h-[186px] rounded-3xl">
            <p class="text-base text-[#EEA280] font-semibold">ЯЗЫКОВЫЕ НАВЫКИ</p>
            <p class="text-sm uppercase">Предоставление уроков и помощь в изучении языков страны, в которой пользователь путешествует</p>
        </div>
        <div class="flex flex-col bg-[#F1FFE3] text-center justify-center items-center w-[325px] h-[186px] rounded-3xl p-3">
            <p class="text-base text-[#EEA280] font-semibold">Помощь в организации путешествий</p>
            <p class="text-sm">Предоставление советов, аренда жилья, бронирование билетов и другие услуги, связанные с планированием и организацией путешествия</p>
        </div>
        <div class="flex flex-col bg-[#F1FFE3] text-center justify-center items-center w-[325px] h-[186px] rounded-3xl">
            <p class="text-base text-[#EEA280] font-semibold">Развлечения</p>
            <p class="text-sm">Организация различных развлечений и активных мероприятий, таких как прогулки на велосипеде, катание на лыжах, пикники и т.д.</p>
        </div>
        <div class="flex flex-col bg-[#F1FFE3] text-center justify-center items-center w-[325px] h-[186px] rounded-3xl">
            <p class="text-base text-[#EEA280] font-semibold">Транспортные услуги</p>
            <p class="text-sm">Предложение услуги аренды автомобиля, водителя или помощи с общественным транспортом для путешественников</p>
        </div>
        <div class="flex flex-col bg-[#F1FFE3] text-center justify-center items-center w-[325px] h-[186px] rounded-3xl">
            <p class="text-base text-[#EEA280] font-semibold">Здоровье и фитнес</p>
            <p class="text-sm">Предложение тренировок, йоги, массажа и других услуг, связанных со здоровьем и фитнесом</p>
        </div>
        <div class="flex flex-col bg-[#F1FFE3] text-center justify-center items-center w-[325px] h-[186px] rounded-3xl">
            <p class="text-base text-[#EEA280] font-semibold">Домашние навыки</p>
            <p class="text-sm">Предложение услуг по уборке, готовке, прачечной и другим задачам домашнего хозяйства для путешественников, которым нужна помощь на длительном пребывании в другой стране</p>
        </div>
        <div class="flex flex-col bg-[#F1FFE3] text-center justify-center items-center w-[325px] h-[186px] rounded-3xl">
            <p class="text-base text-[#EEA280] font-semibold">Искусство и ремесла</p>
            <p class="text-sm">Предоставление мастер-классов, уроков танцев, рисования, рукоделия и других творческих услуг</p>
        </div>
        <div class="flex flex-col bg-[#F1FFE3] text-center justify-center items-center w-[325px] h-[186px] rounded-3xl">
            <p class="text-base text-[#EEA280] font-semibold">Волонтерство</p>
            <p class="text-sm">Предоставление услуг волонтерства или помощи в социальных проектах для путешественников, желающих внести вклад в местное сообщество</p>
        </div>
        <div class="flex flex-col bg-[#F1FFE3] text-center justify-center items-center w-[325px] h-[186px] rounded-3xl">
            <p class="text-base text-[#EEA280] font-semibold">Профессиональные навыки</p>
            <p class="text-sm">Предоставление услуг работы удаленно для путешественников, которые могут работать через интернет</p>
        </div>
        <div class="flex flex-col bg-[#F1FFE3] text-center justify-center items-center w-[325px] h-[186px] rounded-3xl">
            <p class="text-base text-[#EEA280] font-semibold">Культурные навыки</p>
            <p class="text-sm">Предоставление экскурсий, гидов и уникальных культурных опытов для путешественников, стремящихся лучше познакомиться с местными традициями и обычаями</p>
        </div>
        <div class="flex flex-col bg-[#F1FFE3] text-center justify-center items-center w-[325px] h-[186px] rounded-3xl">
            <p class="text-base text-[#EEA280]">ЯЗЫКОВЫЕ НАВЫКИ</p>
            <p class="text-sm">Предоставление уроков и помощь в изучении языков страны, в которой пользователь путешествует</p>
        </div>
    </div>
</div>

<script>
  let index = 0;
  let slides = document.querySelectorAll('#slider > div');
  
  function nextSlide() {
    index = (index + 1) % slides.length;
    updateSlider();
  }
  
  function prevSlide() {
    index = (index - 1 + slides.length) % slides.length;
    updateSlider();
  }
  
  function updateSlider() {
    const width = slides[0].getBoundingClientRect().width;
    document.getElementById('slider').style.transform = `translateX(-${index * width}px)`;
  }
  
  document.getElementById('slider').addEventListener('wheel', (event) => {
    event.preventDefault();
    if (event.deltaY > 0) {
      nextSlide();
    } else {
      prevSlide();
    }
  });

  setInterval(nextSlide, 3000); // автоматическая прокрутка слайдов каждые 3 секунды
</script>