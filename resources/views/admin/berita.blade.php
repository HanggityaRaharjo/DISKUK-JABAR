<x-app-layout>
    <div class=" z-20 lg:flex ">
        <div class="w-full lg:w-3/12"></div>
        <div class="w-full bg-gray-200 ">
            <div class="block pt-20 lg:pt-0">
                <!-- Berita -->
                @include('admin.komponen.komponen-admin-berita.admin-berita')
                <!-- End Berita -->       
            </div>
        </div>
    </div>
</x-app-layout>


