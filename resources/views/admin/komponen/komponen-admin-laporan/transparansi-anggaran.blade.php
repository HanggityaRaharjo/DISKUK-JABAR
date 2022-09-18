<div>
    <div class="flex justify-between items-center mx-20">
        <div>
            <h1 class="text-2xl text-gray-700 font-bold">Transparansi Anggaran</h1>
        </div>
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
                <form method="POST" action="/admin-transparansi-anggaran/store" enctype="multipart/form-data">
                @csrf
                    <div class="mb-5">
                        <label for="file">Masukan File PDF</label>
                        <input type="file" name="file" class="pt-2 input input-bordered w-full" />
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="btn">Submit</button>
                    </div>
                </form>
                <!-- End Form -->
            </div>
            </div>    
        </div>
            
        <!-- End Modal -->
        
    </div>

    <!-- Content -->
    <!-- Table -->
    <div class="overflow-x-auto">
  <table class="table w-full">
    <!-- head -->
    <thead>
      <tr>
        <th></th>
        <th>File</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <tr>
        <th>1</th>
        <td>Cy Ganderton</td>
        <td>
            <a href="" class="btn btn-primary">Download</a>
        </td>
      </tr>
    </tbody>
  </table>
</div>
    <!-- End Table -->
    <!-- End Content -->
</div>