<div class="min-h-screen bg-slate-200 pt-28">
    @if ($errors->any())
    
    <div class="w-screen">
        <div class="bg-red-400 p-5 rounded-full text-white mx-20">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <!-- End Jika Error -->
    <div class="mx-20 text-2xl text-blue-500 font-bold">Formulir Permohonan Informasi PPID</div>
    <!-- Jika Error -->
    <form action="/formulir-permohonan-ppid" method="post" enctype="multipart/form-data">
    @csrf
        <div class="grid grid-cols-2 gap-4 mx-20">

            <!-- Kiri -->
            <div class="">
                
                <!-- Nama -->
                <div class="mb-5">
                    <div>
                        <label for="" class="font-bold">NAMA (SESUAI KTP)</label>
                    </div>
                    <div>
                        <input type="text" placeholder="Nama Sesuai KTP" name="nama" value="{{ old('nama') }}"  class="input input-bordered w-full" required autofocus/>
                    </div>
                </div>
                <!-- End Nama -->

                <!-- Email & No KTP -->
                <div class="grid grid-cols-2 gap-4 mb-5">
                    <div>
                        <label for="" class="font-bold">Email</label>
                        <input type="email" placeholder="example@email.go.id" value="{{ old('email') }}"  name="email" class="input input-bordered w-full" required/>
                    </div>
                    <div>
                        <label for="" class="font-bold">No KTP/NIK</label>
                        <input type="text" placeholder="3232xxx"  name="nik" class="input input-bordered w-full" required/>
                    </div>
                    
                </div>
                <!-- End Email & No KTP -->

                <!-- Kontak -->
                <div class="mb-5">
                    <div>
                        <label for="" class="font-bold">Kontak</label>
                    </div>
                    <div>
                        <input type="number" placeholder="No HP"  name="kontak" class="input input-bordered w-full" required/>
                    </div>
                </div>
                <!-- End Kontak -->

                <!-- Alamat -->
                <div class="mb-5">
                    <div>
                        <label for="" class="font-bold">Alamat</label>
                    </div>
                    <div>
                        <input type="text" placeholder="Alamat Tinggal"  name="alamat" class="input input-bordered w-full" required/>
                    </div>
                </div>
                <!-- End Alamat -->

                <!-- Permintaan Informasi -->
                <div class="mb-5">
                    <div>
                        <label for="permintaan_informasi" class="font-bold">Jenis Permintaan</label>
                    </div>
                    <div>
                        <select id="permintaan_informasi" name="permintaan_informasi" class="w-full rounded-lg bg-gray-100 border border-gray-300">
                            <option value="Permohonan Data Koperasi">Permohonan Data Koperasi</option>
                            <option value="Pengajuan Pendirian Koperasi">Pengajuan Pendirian Koperasi</option>
                            <option value="Pengajuan Informasi">Pengajuan Informasi</option>
                        </select>
                    </div>
                </div>
                <!-- End Permintaan Informasi -->
              
            </div>
            <!-- End Kiri -->

            <!-- Kanan -->
            <div class="">
                <!-- Tujuan -->
                <div class="mb-5">
                    <div>
                        <label for="" class="font-bold">Tujuan</label>
                    </div>
                    <div>
                        <textarea name="tujuan" id="" class="rounded-xl border border-slate-300 bg-gray-100" cols="65" rows="5" required></textarea>
                    </div>
                </div>
                <!-- End Tujuan -->

                <!-- Upload KTP & Tanda Tangan -->
                <div class="grid grid-cols-2 gap-4 mb-5">
                    <div>
                        <label for="" class="font-bold">Upload KTP</label>
                        <input type="file" name="upload_ktp" class="py-1.5 input input-bordered w-full" required/>
                    </div>
                    <div>
                        <label for="" class="font-bold">Tanda Tangan <small>(Tanda Tangan)</small></label>
                        <input type="file" name="upload_tanda_tangan" class="py-1.5 input input-bordered w-full" required/>
                    </div>
                    
                </div>
                <!-- End Upload KTP & Tanda Tangan -->

                <!-- Cara Mendapatkan -->
                <div class="form-control mb-5">
                    <label class="label cursor-pointer">Cara Mendapatkan</label>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <input type="radio" name="cara_mendapatkan" value="lihat/baca/dengar/catat" class="radio" required/>
                            <span class="label-text">lihat/baca/dengar/catat</span> 
                        </div>  
                        <div>
                        <input type="radio" name="cara_mendapatkan" value="mendapatkan salinan informasi" class="radio" required/>
                            <span class="label-text">
                                mendapatkan salinan informasi
                            </span> 
                        </div>  
                    </div>
                </div>
                <!-- End Cara Mendapatkan -->

                <!-- Cara Memberikan -->
                <div class="form-control">
                    <label class="label cursor-pointer">Cara Memberikan</label>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <input type="radio" name="cara_memberikan" value="Mengambil Langsung" class="radio" required/>
                            <span class="label-text">Mengambil Langsung</span> 
                        </div>  
                        <div>
                            <input type="radio" name="cara_memberikan" value="Email" class="radio" required/>
                            <span class="label-text">
                                Email
                            </span> 
                        </div>  
                        <div>
                            <input type="radio" name="cara_memberikan" value="Faksimili" class="radio" required/>
                            <span class="label-text">
                                Faksimili
                            </span> 
                        </div>  
                        <div>
                            <input type="radio" name="cara_memberikan" value="Dikirim" class="radio" required/>
                            <span class="label-text">
                                Dikirim
                            </span> 
                        </div>  
                    </div>
                </div>
                <!-- End Cara Memberikan -->

            </div>
            <!-- End Kanan -->
            <div class="-mt-5 mb-5">
                <button class="btn btn-primary">Kirim</button>
            </div>
        </div>
    </form>
</div>