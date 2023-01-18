 <div class="col-md-9">
     <div class="table-responsive">
         <table class="table table-striped
         table-hover	
         table-borderless
         table-primary
         align-middle">
             <thead class="table-light">
                 <caption>My Profile</caption>
                 <tr>
                     <th>Nama Depan</th>
                     <th>Nama Belakang</th>
                     <th>Email</th>
                     <th>Tanggal Lahir</th>
                     <th>Jenis Kelamin</th>
                     <th>Action</th>
                 </tr>
                 </thead>
                 <tbody class="table-group-divider">
                     <tr class="table-primary" >
                         <td>{{ $prof['nama_depan'] }}</td>
                         <td>{{ $prof['nama_belakang'] }}</td>
                         <td>{{ $prof['email'] }}</td>
                         <td>{{ $prof['tgl_lahir'] }}</td>
                         <td>{{ $prof['jenis_kelamin'] }}</td>
                         <td><a href="<?= url('/'); ?>/profile/edit/{{ $prof->id}}">Edit</a></td>
                    </tr>
                 </tbody>
                 <tfoot>
                     
                 </tfoot>
         </table>
     </div>
 </div>
