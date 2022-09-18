<div class="bg-gray-100">
  <div class="flex justify-between items-center mx-10">
    <div class="text-xl font-bold">Data Koperasi</div>
    <!-- Dropdown -->
    <div>
      <div class="dropdown">
        <label tabindex="0" class="btn m-1">Filter Tahun</label>
        <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
          <li><a href="/admin-data-koperasi">Semua</a></li>
          <li><a href="/admin-data-koperasi/2017">2017</a></li>
          <li><a href="/admin-data-koperasi/2018">2018</a></li>
          <li><a href="/admin-data-koperasi/2019">2019</a></li>
          <li><a href="/admin-data-koperasi/2020">2020</a></li>
          <li><a href="/admin-data-koperasi/2021">2021</a></li>
          <li><a href="/admin-data-koperasi/2022">2022</a></li>
        </ul>
      </div>
    </div>
    <!-- End Dropdown -->
    <!-- Modal -->
    <div>
      <!-- The button to open modal -->
      <label for="my-modal-3" class="btn modal-button">Tambah Data</label>

      <!-- Put this part before </body> tag -->
      <input type="checkbox" id="my-modal-3" class="modal-toggle" />
      <div class="modal">
        <div class="modal-box relative">
          <label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
          <!-- Form -->
          <form method="POST" action="/admin-data-koperasi/store" enctype="multipart/form-data">
                @csrf
                <!-- Tahun -->
                <div class="">
                  <label for="tahun">Tahun:</label>
                  <select id="tahun" name="tahun" class="w-full rounded-xl mb-5 border border-gray-200 bg-gray-100">
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                  </select>
                </div>
                <!-- End Tahun -->
                <!-- File -->
                <div>
                  <label for="">Masukan File PDF</label>
                  <input type="file" name="file" class="pt-2 input input-bordered w-full" />
                </div>
                <!-- End File -->
                <div class="flex justify-end my-5">
                  <button class="btn">Submit</button>
                </div>
          </form>
          <!-- End Form -->
        </div>
      </div>
    </div>
    <!-- End Modal -->
  </div>
  <!-- Table -->
  <div>
  <div class="overflow-x-auto">
  <table class="table table-zebra w-full">
    <!-- head -->
    <thead>
      <tr>
        <th></th>
        <th>Tahun</th>
        <th class="">Nama File</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1 ; ?><!-- row 1 -->
        @foreach($datas as $data)
      <tr>
        <th>{{ $no++; }}</th>
        <td>{{ $data->tahun }}</td>
        <td>{{ $data->file }}</td>
        <td class="flex justify-center items-center gap-2">
          <a href="{{ asset('storage/file-koperasi/'.$data->file) }}" target="_blank" class="btn">Download</a>
          <form action="/admin-data-koperasi/delete/{{ $data->id }}"  method="post">
            @csrf
            {{ method_field('delete') }}
            <button class="btn btn-outline btn-error">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>  
  </div>
  <!-- End Table -->
</div>