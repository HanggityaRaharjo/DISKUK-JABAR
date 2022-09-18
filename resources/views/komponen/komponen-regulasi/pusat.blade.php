<div class="h-screen bg-blue-500">
   <div class="pt-24 mx-20">
        <!-- Table -->
        <div class="overflow-x-auto">
         <table class="table w-full">
        <!-- head -->
        <thead>
        <tr>
            <th></th>
            <th>Tanggal di Post</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Keterangan</th>
            <th>File</th>
        </tr>
        </thead>
        <tbody>
            
        <!-- row 1 -->
        @foreach($regulasis as $regulasi)
        <tr>
            <th>1</th>
            <td>{{ $regulasi->tanggal_dibuat }}</td>
            <td>{{ $regulasi->nama }}</td>
            <td>{{ $regulasi->jenis }}</td>
            <td>{{ $regulasi->keterangan }}</td>
            <td>
                <a href="{{ asset('storage/'.$regulasi->file) }}" class="btn btn-primary text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                </a>
            </td>
        </tr>
        @endforeach
 
        </tbody>
        </table>
        </div>
        <!-- End Table -->
   </div>
</div>