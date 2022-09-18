<x-app-layout>
    <div class=" z-20 lg:flex ">
        <div class="w-full lg:w-3/12"></div>
        <div class="w-full bg-slate-100 ">
            <div class="block pt-20 lg:pt-0">
                <!-- Menu Laporan -->
                <div class="grid grid-cols-3">
                                <!-- Tambah Berita -->
            
                    <!-- The button to open modal -->
                    <label for="my-modal-3" class="btn modal-button mx-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Tambah Laporan
                    </label>

                    <!-- Put this part before </body> tag -->
                    <input type="checkbox" id="my-modal-3" class="modal-toggle" />
                    <div class="modal">
                    <div class="bg-white rounded-lg p-5 relative w-11/12 mt-14 h-11/12">
                        <label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                        <h3 class="text-lg font-bold">Tambah Berita</h3>
                        <!-- Form Tambah Berita -->
                        <form method="POST" action="/admin-laporan/laporan/create" enctype="multipart/form-data">
                                        @csrf

                                        <!-- Nama Laporan -->
                                        <div>
                                            <x-label for="nama_file" :value="__('Nama Laporan')" />

                                            <x-input id="nama_file" class="block mt-1 w-full" type="text" name="nama_file" required autofocus />
                                        </div>
                                        <!-- End Nama Laporan -->

                                        <!-- Jenis Laporan -->
                                        <div>
                                            <x-label for="jenis_laporan" :value="__('Jenis Laporan')" />

                                            <div>
                                                <select  class="w-full rounded-md border-gray-300" name="jenis_laporan" id="jenis_laporan">
                                                    <option value="1">aaaa</option>
                                                    <option value="2">bbbbb</option>
                                                    <option value="3">ccccc</option>
                                                    <option value="4">ddddd</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- End Jenis Laporan -->

                                        <!-- Upload file -->
                                        <label for="formFileMultiple"  class="form-label inline-block mb-2 text-gray-700">Masukan File PDF</label>
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
                                                {{ __('Tambah Laporan') }}
                                            </x-button>
                                        </div>
                                    </form>
                        <!-- End Form Tambah Berita -->
                    </div>
                    </div>
            <!-- End Tambah Berita -->
                    <div>Buat Jenis Laporan</div>
                    <div>aaaaaa</div>
                </div>
                <!-- End Menu Laporan -->
                <!-- Laporan -->
                @include('admin.komponen.komponen-admin-laporan.laporan')
                <!-- End Laporan -->
                <!-- Laporan -->
                @include('admin.komponen.komponen-admin-laporan.jenislaporan')
                <!-- End Laporan -->
            </div>
        </div>
    </div>
</x-app-layout>

