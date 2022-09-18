<div class="bg-green-500 pb-5">
    <div class="pt-28" data-aos="fade-up">
        <div class="flex justify-between gap-4 mx-20">
            <div class="bg-white rounded-lg p-5 w-full ">
                <div>
                    <h1 class="text-4xl font-bold mb-5">Data Koperasi - {{ $tahun }}</h1>
                        <?php $no = 1; ?>
                        @foreach($datas as $data)
                            @if(!empty($data->file))
                            <div class="min-h-sreen mb-5">
                                <div class="flex justify-between items-center mb-5">
                                    <div class="text-xl font-bold">File Ke- {{ $no++ }}</div>
                                    <div>
                                        <a href="{{ asset('storage/file-koperasi/'.$data->file) }}" class="btn btn-primary">Download</a>
                                    </div>
                                </div>
                                <iframe src="{{ asset('storage/file-koperasi/'.$data->file) }}" class="w-full h-screen"></iframe>
                            </div>
                            @else
                            <div>Data Belum Ada</div>
                            @endif
                        @endforeach
                </div>
            </div>

            <div class="w-1/3">
                <!-- Card -->
                <div class="bg-white rounded-lg p-5">
                    <div>
                        <h1 class="text-2xl font-bold border-b">Tahun</h1>
                    </div>
                    <div>
                        <ul>
                            <li><a href="/data-koperasi/2017">2017</a></li>
                            <li><a href="/data-koperasi/2018">2018</a></li>
                            <li><a href="/data-koperasi/2019">2019</a></li>
                            <li><a href="/data-koperasi/2020">2020</a></li>
                            <li><a href="/data-koperasi/2021">2021</a></li>
                            <li><a href="/data-koperasi/2022">2022</a></li>
                            <li><a href="/data-koperasi/2023">2023</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
    </div>
</div>