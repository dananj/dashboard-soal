<?php
  if ( isset($_POST["submit"]) ) {
   
    if ( $pegawai->tambahHotel($_POST) > 0 ) {
    echo "
          <script>
            alert('data berhasil ditambah');
           
          </script>
        ";
    } else{
      echo "
          <script>
            alert('data gagal ditambah');
         
          </script>
        ";
    }
  
}
?>

<div class="section-header">
  <h1>Ubah Data</h1>
</div>
<div class="section-body">
  <div class="card">
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label>Nama</label>
          <input type="text" class="form-control" name="nama" required />
        </div>
        <div class="form-group">
            <label>Bintang</label>
            <select class="form-control" name="bintang" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            
            </select>
        </div>
        <div class="form-group">
          <label>Manager</label>
          <input type="text" class="form-control" name="manager" required />
        </div>
        <div class="form-grup">
          <label>gambar</label>
          <input type="file" class="form-control" name="gambar">
          <p class="text-danger">Ekstensi file JPG/JPEG/PNG</p>
        </div>

        <button class="btn btn-icon icon-left btn-warning"  type="submit" name="submit">Submit</button>
      </form>
    </div>
  </div>
</div>