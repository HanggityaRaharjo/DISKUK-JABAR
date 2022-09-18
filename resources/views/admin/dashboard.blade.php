<x-app-layout>
    <div class=" z-20 lg:flex ">
        <div class="w-full lg:w-3/12"></div>
        <div class="w-full bg-slate-100 ">
            <div class="block pt-20 lg:pt-0">
                <!-- Dashboard -->
                @include('admin.komponen.komponen-admin-dashboard.admin-dashboard')
                <!-- End Dashboard -->  
            </div>
        </div>
    </div>
</x-app-layout>

