<div>
    <!--  -->
    <div class="flex fixed z-20 w-2/3 justify-between bg-white rounded-lg mx-28 px-32 ">
        <div class="">
            <h1 class="text-6xl text-center text-black font-bold">Galeri</h1>
        </div>

        <!-- Tambah Foto -->
            <!-- The button to open modal -->
        <label for="my-modal-3" class="btn modal-button w-28 my-2">Tambah Foto</label>

        <!-- Put this part before </body> tag -->
        <input type="checkbox" id="my-modal-3" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box relative">
            <label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                
                <!-- Form Tambah Foto -->
                <form method="POST" action="/store/galeri" enctype="multipart/form-data">
                    @csrf
                    <!-- Upload Gambar -->
                    <label for="formFileMultiple"  class="form-label inline-block mb-2 text-gray-700">Tambah Foto</label>
                    <input class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" name="gambar" id="formFileMultiple" multiple>
                    <!-- End Upload Gambar -->

                    <div class="flex items-center justify-end mt-4">

                        <x-button class="ml-4">
                            {{ __('Tambah Gambar') }}
                        </x-button>
                     </div>
                </form>
                <!-- End Form Tambah Foto -->

             
            </div>
        </div>
        <!-- End Tambah Foto -->

    </div>
    <!--  -->

    <div class="grid grid-cols-1 rounded-lg mx-20 pt-20">
    @foreach($galeris as $galeri)
    <!-- Card -->
    <div class="card card-side h-60 mb-5 bg-base-100 shadow-xl">
        <figure><img src="{{ asset('storage/'.$galeri->gambar) }}" alt="DISKUK-JABAR"></figure>
        <div class="card-body">
            <div class="card-actions justify-end">
                <form action="/delete/galeri/{{ $galeri->id }}"  method="post">
                @csrf
                {{ method_field('delete') }}
                    <button class="btn btn-outline btn-error mt-2">Delete</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Card -->
    @endforeach
    </div>
</div>