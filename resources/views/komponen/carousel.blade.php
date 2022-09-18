    <!-- Carousel Section -->
    <div class="grid gap-4 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 mx-20 mt-10 rounded-xl" id="hero">
            <!-- Kotak 1 -->
            <div class="bg-blue-600 rounded-xl grid grid-cols-2 shadow-xl">
                @if(!empty($hero))
                <div class="my-auto">
                    <img src="{{ asset('storage/gambar-hero/'.$hero->gambar) }}" class="inline-block w-full" alt="" data-aos="fade-right">
                </div>
                <div class="my-auto text-white">
                    <div class="" data-aos="fade-right">{!! $hero->keterangan !!}</div>
                </div>
                @else
                <div class="text-2xl text-white">Belum Ada Data</div>
                <div class="text-xs text-white italic pt-3">(Klik Tambah pada dashboard admin)</div>
                @endif
            </div>
            <!-- Kotak 2 -->
            <div class="bg-green-600 rounded-xl shadow-xl p-2" >  
                <div class="text-center text-xl text-white font-bold">Galeri</div>
                <div class="w-3/12 border-t-2 border-yellow-500 mx-auto"></div>       
               <!-- Carousel 1 -->
               <div class="carousel carousel-center w-full p-4 space-x-4 bg-white shadow-xl rounded-box">
                     @foreach($carousels as $carousel)
                    <div class="carousel-item">
                        <img src="{{ asset('storage/gambar-carousel/'.$carousel->file) }}" class="rounded-box h-48" />
                    </div> 
                    @endforeach
                   
        
                </div>
               <!-- End Carousel 1 -->
               <!-- Carousel 1 -->
               <div class="carousel carousel-center w-full p-4 space-x-4 bg-white shadow-xl mt-2 rounded-box">
                    @foreach($carousels as $carousel)
                    <div class="carousel-item">
                        <img src="{{ asset('storage/gambar-carousel/'.$carousel->file) }}" class="rounded-box h-48" />
                    </div> 
                    @endforeach
                   
                    
                </div>
               <!-- End Carousel 1 -->

            </div>
        </div>
  
    <!-- End Carousel Section -->