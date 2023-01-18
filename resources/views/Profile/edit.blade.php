<div class="col-md-9">
    <h1>EDIT PROFILE</h1>
    <form method="post" action="<?= url('/'); ?>/admin/{{ $prof['id'] }}" class="row g-3 needs-validation" novalidate>
        @csrf
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nama Depan</label>
        <input type="text" class="form-control" name="nama_depan" id="validationCustom01" value="{{ $prof['nama_depan'] }}" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nama Belakang</label>
        <input type="text" class="form-control" name="nama_belakang" id="validationCustom01" value="{{ $prof['nama_belakang'] }}" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" id="validationCustom01" value="{{ $prof['email'] }}" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Jenis Kelamin</label>
        <input type="text" class="form-control" name="jenis_kelamin" id="validationCustom01" value="{{ $prof['jenis_kelamin'] }}" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tgl_lahir" id="validationCustom01" value="{{ $prof['tgl_lahir'] }}" required>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Save</button>
      </div>
    </form>
</div>
