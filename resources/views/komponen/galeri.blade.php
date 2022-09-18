    <!-- Galeri -->
    <div class="bg-slate-200 pb-20">
        <div class="py-10 " data-aos="fade-up">
            <h1 class="text-4xl font-bold text-center" >Galeri</h1>
            <div class="border-b-2 border-yellow-400 mx-auto w-1/12"></div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 " data-aos="fade-up">
            <!-- Video -->
            <div class="bg-slate-200">
                <iframe class="rounded-lg w-11/12 h-60 lg:w-11/12 lg:h-96 m-auto mb-5"  src="https://www.youtube.com/embed/b1T9uOH46Uo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <!-- End Video -->
            <!-- <img src="/img/no-image.jpg"  class="rounded-lg" alt=""> -->
            <!-- Gambar 1 -->
            <div class="bg-slate-200 lg:border-l-2 border-yellow-400 grid gap-2 grid-cols-2 md:grid-cols-3 lg:grid-cols-3 p-2">
                    @foreach($galeris as $galeri)
                    <div class="h-32 bg-slate-300 flex justify-center items-center mx-auto rounded-lg aspect-[4/3] md:aspect-[3/4] lg:aspect-[4/3] group relative overflow-hidden">
                        <img src="{{ asset('storage/'.$galeri->gambar) }}" alt="">
                    </div>
                    @endforeach
                 
                  
                    

                              
                </div>
            <!-- End Gambar 1 -->
        </div>
    </div>
    <!-- End Galeri -->    