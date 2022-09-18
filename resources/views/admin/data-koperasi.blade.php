<x-app-layout>
    <div class=" z-20 lg:flex ">
        <div class="w-full lg:w-3/12"></div>
        <div class="w-full bg-gray-200 ">
            <div class="block pt-20 lg:pt-0">
                <!-- Data Koperasi -->
                @include('admin.komponen.komponen-admin-data-koperasi.admin-data-koperasi')
                <!-- End Data Koperasi -->       
            </div>
        </div>
    </div>
</x-app-layout>