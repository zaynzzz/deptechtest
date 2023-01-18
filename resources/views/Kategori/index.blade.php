<div class="col-md-9">
    <a class="btn btn-primary btn-sm my-2" href="<?= url('/kategori/vw_create'); ?>" role="button"> + Kategori Baru </a>
    <div class="table-responsive">
        <table class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <caption>Kategori</caption>
                <tr>
                    <th>Nama Kategori</th>
                    <th>Deskripsi Kategori</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($kategori as $k)
                    <tr class="table-primary" >
                        <td>{{ $k['nama_kategori'] }}</td>
                        <td>{{ $k['deskripsi_kategori'] }}</td>
                         <td><a href="<?= url('/'); ?>/kategori/edit/{{ $k->id}}">Edit</a></td>
                         <td></td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
    
</div>