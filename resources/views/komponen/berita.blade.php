<div class="min-h-screen bg-blue-600 my-10 mx-20 rounded-xl shadow-xl" id="berita">
    <div>
            <div class="flex text-4xl font-bold mx-10 text-white justify-between items-center border-b-4 border-yellow-400 mb-5" >
                <h1 class="pt-10" >Berita</h1>
            
            </div>
            
            <!-- Cek Data -->
            @if(empty($berita))
                <div class="">
                    <h1 class="text-4xl text-white text-center font-bold">Belum Ada Berita</h1>
                    <h1 class="text-sm text-white text-center italic">Klik Tambah Berita pada Halaman Dashboard Berita Admin</h1>
                </div>
            @endif
            <!-- End Cek Data -->

            <div class="flex justify-between mx-16 gap-2">
                <!-- Kiri -->
                <div class="">
                    <div class="">
                        <img src="/img/no-image.jpg" alt="Shoes" class="rounded-xl" />
                    </div>
                </div>
                <!-- End Kiri -->

                <!-- Kanan -->
                <div class="w-4/12 mx-2">
                    @foreach($beritas as $berita)
                    <a href="{{ $berita->id }}">
                        <div class="flex justify-between items-center mb-2 hover:translate-x-4 transition duration-300">
                            <div class="w-20 h-20 flex justify-center items-center bg-white">
                                <img src="{{ asset('storage/gambar-berita/'.$berita->gambar) }}" class="w-16 " alt="Shoes" class="rounded-xl" />
                                
                            </div>
                            <div class="text-white">{{ $berita->judul }}</div>
                            <div class="text-white">{{ $berita->tanggal }}</div>
                            
                        </div>
                    </a>
                   
                    @endforeach
                </div>
                <!-- End Kanan -->
            </div>
    </div>
</div>