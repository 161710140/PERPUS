<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="Modal" class="modal fade" role="dialog" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog">
         <div class="modal-content">
            <form method="post" id="form" enctype="multipart/form-data">
               <div class="modal-header" style="background-color: lightblue;">
                  <h4 class="modal-title" >Add Data</h4>
                  <button type="button" class="close" data-dismiss="modal" >&times;</button>
               </div>

               <div class="modal-body">
                  {{csrf_field()}} {{ method_field('POST') }}
                  <span id="form_tampil"></span>
                  <input type="hidden" name="id" id="id">
                  <div class="form-group">
                     <label>Nomor Absen</label>
                     <input type="text" name="no_absen" id="no_absen" class="form-control" 
                     placeholder="Masukan Nomor Absen Siswa">
                     <span class="help-block has-error no_absen_error"></span>
                  </div>
                  <div class="form-group">
                     <label>Nomor Induk</label>
                     <input type="text" name="no_induk" id="no_induk" class="form-control" 
                     placeholder="Masukan Nomor Induk Siswa">
                     <span class="help-block has-error no_induk_error"></span>
                  </div>
                  <div class="form-group">
                     <label>Nama Siswa</label>
                     <input type="text" name="nama" id="nama" class="form-control"
                      placeholder="Masukan Nama Siswa">
                     <span class="help-block has-error nama_error"></span>
                  </div>
                  <div class="form-group">
                     <label>Kelas</label>
                     <select class="form-control select-dua" name="kelas" id="kelas" style="width: 468px">
                        <option disabled selected>Nama Kelas</option>
                        <option value="Kelas I Fatimah">Kelas I Fatimah</option>
                        <option value="Kelas I Sarah">Kelas I Sarah</option>
                        <option value="Kelas I Hajar">Kelas I Hajar</option>
                        <option value="Kelas I Zaenab">Kelas I Zaenab</option>
                        <option value="Kelas II Shofiyah">Kelas II Shofiyah</option>
                        <option value="Kelas II Hafsah">Kelas II Hafsah</option>
                        <option value="Kelas II Aisyah">Kelas II Aisyah</option>
                        <option value="Kelas III Hamzah">Kelas III Hamzah</option>
                        <option value="Kelas III Mushab">Kelas III Mushab</option>
                        <option value="Kelas III Kholid">Kelas III Kholid</option>
                        <option value="Kelas III Salman">Kelas III Salman</option>
                        <option value="Kelas IV Zaid">Kelas IV Zaid</option>
                        <option value="Kelas IV Saad">Kelas IV Saad</option>
                        <option value="Kelas IV Usamah">Kelas IV Usamah</option>
                        <option value="Kelas IV Bilal">Kelas IV Bilal</option>
                        <option value="Kelas V Umar">Kelas V Umar</option>
                        <option value="Kelas V Zubair">Kelas V Zubair</option>
                        <option value="Kelas V Anas">Kelas V Anas</option>
                        <option value="Kelas V Muadz">Kelas V Muadz</option>
                        <option value="Kelas VI Ali">Kelas VI Ali</option>
                        <option value="Kelas VI Abu Bakar">Kelas VI Abu Bakar</option>
                        <option value="Kelas VI Utsman">Kelas VI Utsman</option>
                        <option value="Kelas VI Muadz">Kelas VI Muadz</option>
                        </select>
                        </option>
                     <span class="help-block has-error kelas_error"></span>
                  </div>
				<div class="modal-footer">
					<input type="submit" name="submit" id="aksi" value="Tambah" class="btn btn-info" />
					<input type="button" value="Cancel" class="btn btn-default" data-dismiss="modal"/>
				</div>
               </form>
            </div>
         </div>
      </div>
</body>
</html>