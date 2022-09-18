<div class="bg-gray-100">
    <a href="/admin-ppid" class="ml-20 my-5 btn btn-primary">Kembali</a>
    <div class="font-bold ml-20  text-2xl">Detail Permohonan PPID : {{ $data->nama }}</div>
    <div class="mb-5 ml-20 font-bold">Tanggal {{ $data->tanggal }}</div>
    <!-- Data -->
        <div class="bg-white rounded-xl shadow-xl p-5 mx-20 mb-5">
            
                <!-- Nama -->
                <div class="flex border border-gray-500 rounded-lg mb-5 p-2">
                <div class="w-4/12">Nama</div>
                <div class="w-1/12">:</div>
                <div class="w-7/12">{{ $data->nama }}</div>
                </div>
                <!-- End Nama -->
            
                <!-- email -->
                <div class="flex border border-gray-500 rounded-lg mb-5 p-2">
                <div class="w-4/12">Email</div>
                <div class="w-1/12">:</div>
                <div class="w-7/12">{{ $data->email }}</div>
                </div>
                <!-- End email -->
            
                <!-- Nik -->
                <div class="flex border border-gray-500 rounded-lg mb-5 p-2">
                <div class="w-4/12">NIK</div>
                <div class="w-1/12">:</div>
                <div class="w-7/12">{{ $data->nik }}</div>
                </div>
                <!-- End Nik -->
            
                <!-- kontak -->
                <div class="flex border border-gray-500 rounded-lg mb-5 p-2">
                <div class="w-4/12">Kontak</div>
                <div class="w-1/12">:</div>
                <div class="w-7/12">{{ $data->kontak }}</div>
                </div>
                <!-- End kontak -->
            
                <!-- alamat -->
                <div class="flex border border-gray-500 rounded-lg mb-5 p-2">
                <div class="w-4/12">Alamat</div>
                <div class="w-1/12">:</div>
                <div class="w-7/12">{{ $data->alamat }}</div>
                </div>
                <!-- End alamat -->
            
                <!-- permintaan_informasi -->
                <div class="flex border border-gray-500 rounded-lg mb-5 p-2">
                <div class="w-4/12">Permintaan Informasi</div>
                <div class="w-1/12">:</div>
                <div class="w-7/12">{{ $data->permintaan_informasi }}</div>
                </div>
                <!-- End permintaan_informasi -->
            
                <!-- tujuan -->
                <div class="flex border border-gray-500 rounded-lg mb-5 p-2">
                <div class="w-4/12">Tujuan</div>
                <div class="w-1/12">:</div>
                <div class="w-7/12">{{ $data->tujuan }}</div>
                </div>
                <!-- End tujuan -->
            
                <!-- upload_ktp -->
                <div class="flex border border-gray-500 rounded-lg mb-5 p-2">
                <div class="w-4/12">Upload KTP</div>
                <div class="w-1/12">:</div>
                <div class="w-7/12">
                    <img src="{{ asset('storage/upload-ktp/'.$data->upload_ktp) }}" alt="">
                </div>
                </div>
                <!-- End upload_ktp -->
            
                <!-- upload_tanda_tangan -->
                <div class="flex border border-gray-500 rounded-lg mb-5 p-2">
                <div class="w-4/12">Upload Tanda Tangan</div>
                <div class="w-1/12">:</div>
                <div class="w-7/12">
                    <img src="{{ asset('storage/upload-tanda-tangan/'.$data->upload_tanda_tangan) }}" alt="">
                </div>
                </div>
                <!-- End upload_tanda_tangan -->
            
                <!-- cara_mendapatkan -->
                <div class="flex border border-gray-500 rounded-lg mb-5 p-2">
                <div class="w-4/12">Cara Mendapatkan</div>
                <div class="w-1/12">:</div>
                <div class="w-7/12">{{ $data->cara_mendapatkan }}</div>
                </div>
                <!-- End cara_mendapatkan -->
            
                <!-- cara_memberikam -->
                <div class="flex border border-gray-500 rounded-lg mb-5 p-2">
                <div class="w-4/12">Cara Memberikan</div>
                <div class="w-1/12">:</div>
                <div class="w-7/12">{{ $data->cara_memberikan }}</div>
                </div>
                <!-- End cara_memberikam -->
            
              
            
        </div>
        <!-- End Data -->
    </div>
</div>