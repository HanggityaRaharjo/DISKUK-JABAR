<div>
    <div>Permohonan Masuk PPID</div>
    <div>
        <div class="overflow-x-auto ">
            <table class="table z-0 w-full">
                <!-- head -->
                <thead class="">
                <tr>
                    <th></th>
                    <th>Nama</th>
                    <th>email</th>
                    <th>Email</th>
                    <th>Tujuan</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <!-- row 1 -->
                <?php $no = 1; ?>
                @foreach($datas as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->email }}</td>
                    <td> {{ substr($data->permintaan_informasi,0,20) }}..</td>
                    <td>{{ substr($data->tujuan,0,20) }}..</td>
                    <td><a class="btn" href="/admin-formulir-ppid/{{ $data->id }}">Detail</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>