<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
  <div class="p-16">
    <div class="max-w-4xl mx-auto relative" x-data="{
        activeSlide: 1,
        slides: [
        { id: 1, title:'Hello 1', body:'Lorem ipsum dolor sit amet consectetur, adipisicing elit. L'},    
        { id: 2, title:'Hello 2', body:'Lorem ipsum dolor sit amet consectetur, adipisicing elit. L'},    
        { id: 3, title:'Hello 3', body:'Lorem ipsum dolor sit amet consectetur, adipisicing elit. L'},    
        { id: 4, title:'Hello 4', body:'Lorem ipsum dolor sit amet consectetur, adipisicing elit. L'},    
        { id: 5, title:'Hello 5', body:'Lorem ipsum dolor sit amet consectetur, adipisicing elit. L'},    
        ],
        loop(){
            setInterval(() => {this.activeSlide = this.activeSlide === 5 ? 1 : this.activeSlide + 1}, 2000)
        }
    }"
    x-init="loop"
    >
        <!-- Data Loop -->
        <template x-for="slide in slides" :key="slide.id">
            <div x-show="activeSlide === slide.id" class="p-24 h-80 flex items-center bg-slate-500 text-white rounded-lg">
                <div>
                    <h2 class="font-bold text-2xl" x-text="slide.title"></h2>
                    <p x-text="slide.body" class="text-base"></p>
                </div>
            </div>
        </template>
        <!-- Back/Next -->
        <div class="absolute inset-0 flex">
            <div class="flex items-center justify-start w-1/2">
                <button 
                x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1"
                class="bg-slate-100 text-slate-500 hover:bg-blue-500 transition hover:text-white font-bold rounded-full w-12 h-12 shadow flex justify-center items-center -ml-16">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                </button>
            </div>
            <div class="flex items-center justify-end w-1/2">
                <button 
                x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1"
                class="bg-slate-100 text-slate-500 hover:bg-blue-500 transition hover:text-white font-bold rounded-full w-12 h-12 shadow flex justify-center items-center -mr-16">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- Buttons -->
        <div class="absolute w-full flex items-center px-4">
            <template x-for="slide in slides" :key="slide.id">
                <button class="flex-1 w-4 h-2 mt-4 mx-2 mb-2 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-slate-600 hover:shadow-lg" 
                :class="{
                    'bg-blue-600' : activeSlide === slide.id,
                    'bg-slate-300' : activeSlide !== slide.id,
                }"
                x-on:click="activeSlide = slide.id"
                ></button>
            </template>
        </div>
    </div>
  </div>
</body>
</html>