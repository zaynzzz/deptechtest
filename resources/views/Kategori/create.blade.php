<form method="POST" action="{{ route('create') }}" class="row g-3 needs-validation" novalidate>
    @csrf
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nama Kategori</label>
    <input type="text" class="form-control" id="validationCustom01" name="nama_kategori" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Deskripsi Kategori</label>
    <textarea type="text" class="form-control" id="validationCustom01" name="deskripsi_kategori" required>
    </textarea>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Save</button>
  </div>
</form>