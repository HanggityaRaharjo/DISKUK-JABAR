<div class="h-screen bg-gray-100">

    <!-- Menu -->
    <div class="fixed z-10 w-3/4 flex items-center justify-between mx-5 mb-5 pt-2 rounded-lg">
        <!-- Head -->
        <div>
            <a href="/admin-regulasi" class="btn">Regulasi</a>
        </div>
        <!-- End Head -->
        <!-- Filter -->
        <div>
            <div class="dropdown dropdown-hover">
            <label tabindex="0" class="btn m-1">filter</label>
            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="/admin-regulasi/regulasi-pusat">Regulasi Pusat</a></li>
                <li><a href="/admin-regulasi/regulasi-daerah">Regulasi Daerah</a></li>
            </ul>
            </div>
        </div>
        <!-- End Filter -->
            <!-- Tambah Berita -->
            
                    <!-- The button to open modal -->
                    <label for="my-modal-3" class="btn modal-button my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Tambah File
                    </label>

                    <!-- Put this part before </body> tag -->
                    <input type="checkbox" id="my-modal-3" class="modal-toggle" />
                    <div class="modal">
                    <div class="bg-white rounded-lg p-5 relative w-11/12 mt-14 h-11/12">
                        <label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                        <h3 class="text-lg font-bold">Tambah Berita</h3>
                        <!-- Form Tambah Berita -->
                        <form method="POST" action="/store/regulasi" enctype="multipart/form-data">
                                        @csrf

                                        <!-- nama -->
                                        <div>
                                            <x-label for="nama" :value="__('Nama File')" />

                                            <x-input id="nama" class="block mt-1 w-full" type="text" name="nama" required autofocus />
                                        </div>
                                        <!-- End nama -->

                                         <!-- Jenis -->
                                        <div class="mt-2">
                                            <label for="jenis">Jenis Regulasi:</label>

                                            <select id="jenis" name="jenis" class="rounded-lg border border-gray-300 mx-20">
                                            <option value="Regulasi Pusat">Regulasi Pusat</option>
                                            <option value="Regulasi Daerah">Regulasi Daerah</option>
                                        
                                            </select>
            
                                        </div>
                                        <!-- End Jenis -->

                                         <!-- keterangan -->
                                        <div>
                                            <x-label for="keterangan" :value="__('Keterangan')" />

                                            <textarea id="keterangan" type="text" class="block mt-1 w-full rounded-lg border-slate-300" rows="10" type="text" name="keterangan" required autofocus></textarea>
                                        </div>
                                        <!-- End keterangan -->

                                        <!-- Upload file -->
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
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" name="file" id="formFileMultiple" multiple>
                                        <!-- End Upload file -->

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
    <!-- End Menu -->

    <!-- Content -->
    <div class="grid grid-cols-1 gap-4 mx-20 pt-28">
        <div class="bg-white border" data-aos="fade-up">
            <!-- Regulasi Pusat-->
            <div>
                <h1 class="text-center font-bold text-2xl">Regulasi</h1>
            </div>
            <!-- Judul -->
            <div class="border grid grid-cols-6">
                <div class="border text-center font-bold p-5">Tanggal di Post</div>
                <div class="border text-center font-bold p-5">Nama</div>
                <div class="border text-center font-bold p-5">Jenis</div>
                <div class="border text-center font-bold p-5">Keterangan</div>
                <div class="border text-center font-bold p-5">file</div>
                <div class="text-center font-bold"></div>
            </div>
            <!-- Isi -->
            
            @foreach($regulasis as $regulasi)
            <div class="border grid grid-cols-6">
                <div class="border-x-2 text-center p-5">{{ $regulasi->tanggal_dibuat }}</div>
                <div class="border-x-2 text-center p-5">{{ $regulasi->nama }}</div>
                <div class="border-x-2 text-center p-5">{{ $regulasi->jenis }}</div>
                <div class="border-x-2 text-justif p-5">{{ $regulasi->keterangan }}</div>
                <div class="border-x-2 text-center p-5 flex justify-center items-center">
                    <a href="{{ asset('storage/'.$regulasi->file) }}" class="btn btn-primary text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                    </a>
                </div>
                <div class="border-x-2 text-center p-5 flex justify-center items-center">
                    <form action="/delete/regulasi/{{ $regulasi->id }}"  method="post">
                        @csrf
                        {{ method_field('delete') }}
                        <button class="btn btn-outline btn-error">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
            <!-- End Isi -->

        </div>
    </div>
    <!-- Content -->
</div>