<x-app-layout>
    <div class=" lg:flex ">
        <div class="w-full lg:w-3/12"></div>
        <div class="w-full bg-gray-100 ">
            <div class="block pt-20 lg:pt-0">
                <!-- Galeri -->
                @include('admin.komponen.komponen-admin-galeri.admin-galeri')
                <!-- End Galeri -->       
            </div>
        </div>
    </div>
</x-app-layout>