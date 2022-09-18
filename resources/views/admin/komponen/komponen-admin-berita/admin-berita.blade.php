<div>
    <div class=" bg-gray-100">
        <div class="fixed z-10 w-3/4 flex items-center justify-between mx-5 mb-5 pt-2 rounded-lg">
            <!-- Head -->
            <div>
            <h1 class="text-2xl text-white font-bold bg-gray-800 rounded-lg p-2">Berita</h1>
            </div>
            <!-- End Head -->
            <!-- Dropdown -->
            <div class="dropdown">
                <label tabindex="0" class="btn m-1">Filter</label>
                <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>Berdasarkan Tanggal</a></li>
                    <li><a>Berdasarkan Post</a></li>
                </ul>
            </div>
            <!-- End Dropdown -->
            <!-- Tambah Berita -->
            
                    <!-- The button to open modal -->
                    <label for="my-modal-3" class="btn modal-button my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Tambah Berita
                    </label>

                    <!-- Put this part before </body> tag -->
                    <input type="checkbox" id="my-modal-3" class="modal-toggle" />
                    <div class="modal">
                    <div class="bg-white rounded-lg p-5 relative w-11/12 mt-14 h-11/12">
                        <label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                        <h3 class="text-lg font-bold">Tambah Berita</h3>
                        <!-- Form Tambah Berita -->
                        <form method="POST" action="/admin-berita/store" enctype="multipart/form-data">
                                        @csrf

                                        <!-- Judul -->
                                        <div>
                                            <x-label for="judul" :value="__('Judul')" />

                                            <x-input id="judul" class="block mt-1 w-full" type="text" name="judul" required autofocus />
                                        </div>
                                        <!-- End Judul -->

                                         <!-- Tanggal -->
                                        <div>
                                            <x-label for="tanggal" :value="__('Keterangan')" />

                                            <input type="date" name="tanggal" class="block mt-1 w-full rounded-lg border-slate-300" id="tanggal">
                                        </div>
                                        <!-- End Tanggal -->

                                         <!-- keterangan -->
                                        <div>
                                            <x-label for="keterangan" :value="__('Keterangan')" />

                                            <textarea id="keterangan" type="text" class="block mt-1 w-full rounded-lg border-slate-300" rows="10" type="text" name="keterangan" required autofocus></textarea>
                                        </div>
                                        <!-- End keterangan -->

                                        <!-- Upload Gambar -->
                                        <label for="formFileMultiple"  class="form-label inline-block mb-2 text-gray-700">Multiple files input example</label>
                                        <input class="form-control
                                        block
                                        w-full
                                        px-3
                                        py-1.5
                                        text-base
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" name="gambar" id="formFileMultiple" multiple required>
                                        <!-- End Upload Gambar -->

                                        <div class="flex items-center justify-end mt-4">

                                            <x-button class="ml-4">
                                                {{ __('Tambah Berita') }}
                                            </x-button>
                                        </div>
                                    </form>
                        <!-- End Form Tambah Berita -->
                    </div>
                    </div>
            <!-- End Tambah Berita -->
            <!-- Search -->
            <div>
                <div class="form-control">
                    <div class="input-group">
                        <input type="text" placeholder="Search…" class="input input-bordered" />
                        <button class="btn btn-square">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- End Search -->
        </div>
        
        <div class="grid grid-cols-1">
            <!-- CekData -->
            @if($cekData == 0)
            <div class="absolute flex justify-center items-center">
                <h1 class="font-bold text-4xl p-80">Tidak Ada Data!</h1>
            </div>
            @endif
            <!-- End CekData -->

            <!-- Card -->
            @foreach($beritas as $berita)
            <div class="card card-side bg-base-100 shadow-xl mx-10 mt-20">

            @if(empty($berita->gambar))
            <figure class="bg-white"><img src="/img/no-image.jpg" class="w-56" alt=""></figure>
            @endif

            @if(!empty($berita->gambar))
            <figure class="bg-white"><img src="{{ asset('storage/gambar-berita/'.$berita->gambar) }}" class="w-56" alt=""></figure>
            @endif

                <div class="card-body">
                    <h1 class="text-2xl font-bold">Judul : {{ $berita->judul }}</h1>
                    <div class="text-base w-56 font-bold bg-yellow-400 rounded-lg">
                        <p class="text-center">{{ $berita->tanggal }}</p>
                    </div>
                    <p>keterangan : {{ substr($berita->keterangan,0,100) }}...</p>
                    <div class="flex justify-end items-end">
                        <a href="/admin-berita/edit/{{ $berita->id }}" class="btn btn-primary mr-5">Edit</a>
                        <a href="/admin-berita/detail/{{ $berita->id }}" class="btn btn-accent mr-5">Detail</a>
                        <form action="/admin-berita/delete/{{ $berita->id }}"  method="post">
                            @csrf
                            {{ method_field('delete') }}
                            <button class="btn btn-outline btn-error mt-2">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End Card -->
        </div>
    </div>
</div>