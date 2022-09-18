<div>
    <!-- User -->
    <div class="m-10 bg-white rounded-lg shadow-lg">
        <div class="mx-5 flex justify-between items-center">
            <h1 class="text-4xl p-5">Hero Section</h1>
            <!-- Modal Hero -->
            @if(empty($hero))
            
            <!-- The button to open modal -->
            <label for="my-modal-3" class="btn modal-button">Tambah</label>

            <!-- Put this part before </body> tag -->
            <input type="checkbox" id="my-modal-3" class="modal-toggle" />
            <div class="modal">
            <div class="modal-box relative">
                <label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                <!-- Form -->
                <form method="POST" action="/admin-hero/store" enctype="multipart/form-data">
                @csrf
                    <div>
                        <label for="hero">Gambar</label>
                        <input type="file" name="gambar" class="input input-bordered py-1 w-full mb-5" required/>
                    </div>
                    <div>
                        <label for="hero">Keterangan</label>
                        <textarea name="keterangan" id="" cols="30" rows="10" class="input input-bordered h-44 w-full mb-5" required></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="btn">Submit</button>
                    </div>
                </form>
                <!-- End Form -->
            </div>
            </div>
            @else
            <form action="/admin-hero/delete/{{ $hero->id }}"  method="post">
                @csrf
                {{ method_field('delete') }}
                <button class="btn btn-outline btn-error">Hapus</button>
            </form>
            @endif
            
            <!-- End Modal Hero -->
        </div>

        @if(!empty($hero))
        <div class="p-5 flex">
            <div class="w-1/2">
                <img src="{{ asset('storage/gambar-hero/'.$hero->gambar) }}" alt="">
            </div>
            <div class="w-1/2 border border-gray-700 shadow-xl rounded-lg p-5">
                <div class="text-lg font-bold">Keterangan :</div>
                <div>
                    {{ $hero->keterangan }}
                </div>
            </div>
        </div>
        @else
        <div class="text-center text-2xl font-bold">Belum Ada Data</div>
        <div class="text-center text-xs italic">(Klik Tambah untuk menambahkan data)</div>
        @endif
        
      
    </div>

    <!-- Berita -->
    <div class="m-10 bg-white rounded-lg shadow-lg">
        <div class="grid grid-cols-2 mx-10 py-10">
            <div class="flex justify-center items-center">
                <div class="font-bold text-center text-2xl inline-block">Jumlah Berita <span class="text-xs italic">(Klik Tambah Berita Pada Menu sidebar) </span> : </div>
                <div class="font-bold text-4xl justify-center block">{{ $cekBerita }}</div>
            </div>
            <div>
                <h1 class="text-center font-bold text-2xl">Berita terakhir</h1>
            <!-- Card -->
          
            @if($cekBerita != 0)
            <div class="card card-side bg-base-100 shadow-xl">

            
            <figure class="bg-base-100"><img src="{{ asset('storage/'.$berita->gambar) }}" class="w-56" alt=""></figure>
        
                <div class="card-body">
                    <h1 class="text-2xl font-bold">Judul : {{ $berita->judul }}</h1>
                    <div class="text-base w-full font-bold bg-yellow-400 rounded-lg">
                        <p class="text-center">tanggal {{ $berita->tanggal }}</p>
                    </div>
                    <p>{{ substr($berita->keterangan,0,20) }}...</p>
                    <div class="flex justify-center items-center">
                        <a href="" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
                
                
            </div>
            @endif
            <!-- End Card -->
            </div>
        </div>
    </div>
    <!-- End Berita -->

    <!-- Carousel -->
    <div class="bg-white mx-10 rounded-lg shadow-xl p-5">
        <div class="text-2xl font-bold">Carousel Galeri</div>
            <!-- Error -->
            @if ($errors->any())
            
            <div class="w-full">
                <div class="bg-red-400 my-5 px-5 rounded-full text-white mx-20">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            <!-- End Error -->

        <div class="flex justify-between items-center">
            <!-- Carousel -->
            <div class="carousel carousel-center w-10/12 p-4 space-x-4 bg-neutral rounded-box">
                @foreach($carousels as $carousel)
                <div class="carousel-item">
                    <img src="{{ asset('storage/gambar-carousel/'.$carousel->file) }}" class="rounded-box h-48" />
                </div> 
                @endforeach
                
            </div>
            <!-- Modal -->
            <!-- The button to open modal -->
            <label for="my-modal-4" class="text-7xl w-20 h-20 rounded-full btn modal-button">+</label>
            
            <!-- Put this part before </body> tag -->
            <input type="checkbox" id="my-modal-4" class="modal-toggle" />
            <label for="my-modal-4" class="modal cursor-pointer">
                <label class="modal-box relative" for="">
                    <form method="POST" action="/admin-carousel/store" enctype="multipart/form-data">
                     @csrf
                        <div>
                            <label for="id">Masukan Gambar</label>
                            <input type="file" name="file" id="id" class="input pt-2 input-bordered w-full max-w-xs" />
                        </div>
                        <div class="flex justify-end mt-5 mr-10">
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </form>
                </label>
            </label>
            <!-- End Modal -->
            <!-- End Carousel -->
        </div>
    </div>
    <!-- End Carousel -->

    <!-- Grafik -->
    <div class="m-10 bg-white rounded-lg shadow-lg">
        <div class="mx-5">
            <h1 class="text-4xl p-5">Grafik</h1>
        </div>

        <div class="mx-5 grid grid-cols-2 gap-2">
            <div>
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div>
                <div>
                    <ul>
                        <li>1</li>
                        <li>1</li>
                        <li>1</li>
                        <li>1</li>
                        <li>1</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Grafik -->
</div>


<script>
  const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'Sept',
    'October',
    'November',
    'Desember',
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'My First dataset',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [0, 10, 5, 2, 20, 30, 45],
    }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {}
  };
</script>


<script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
