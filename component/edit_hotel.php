<?php
 
    $id=$_GET['id'];

    $tampilEditHotel = $pegawai->query("SELECT * FROM hotel WHERE id = $id"); 
    
    if ( isset($_POST["ubah"]) ) {

        if ( $pegawai->editHotel($_POST) > 0 ) {
          echo "
                <script>
                  alert('data berhasil diubah');
                  document.location.href='./index.php?page=list_hotel';
                </script>
              ";
        } else if( $pegawai->editHotel($_POST) == 0 ){
            echo "
                <script>
                 
                document.location.href='./index.php?page=list_hotel';
                </script>
              ";
        }
        
        else{
          echo "
                <script>
                  alert('data gagal diubah');
                 
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
                <?php
               foreach($tampilEditHotel as $row) :
            ?>
                <input type="hidden" name="gambar_lama" value="<?= $row["gambar"]; ?>">
                <div class="form-group">
                    <label>ID Pegawai</label>
                    <input type="text" class="form-control" readonly value="<?=$id;?>" name="id" />
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" value="<?=$row['nama'];?>" name="nama" />
                </div>
                
                <div class="form-group">
                    <label>Bintang</label>
                    <select class="form-control" name="bintang" required>
                        <?php
                        $bintang = $row['bintang'];
                        for ($i=1; $i <= 5; $i++) { 
                            if ($bintang == $i) {
                                $select = "selected";
                            }else{
                                $select = "";
                            }
                            echo "<option $select value=".$i.">".$i."</option>";
                        }
                ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Manager</label>
                    <input type="text" class="form-control" value="<?=$row['manager'];?>" name="manager" />
                </div>
                <div class="form-grup">
                    <label>Foto</label><br>
                    <img src="component/profile/<?= $row['gambar']; ?>" width="150">
                </div><br>
                    <div class="form-grup">
                    <input type="file" class="form-control" name="gambar">
                </div>

                <button class="btn btn-icon icon-left btn-warning" id="kirim" type="submit" name="ubah">Submit</button>
            </form>
            <?php
        
            endforeach;
          ?>
        </div>
    </div>
</div>
