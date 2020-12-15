<?php
      $tampil_hotel = $pegawai->query("SELECT * FROM hotel");
   ?>
<div class="section-header">
   <h1>List Pegawai</h1>
</div>
<div class="section-body">
   <div class="container">
      <div class="card">
         <div class="card-header">
            <h4>List Table</h4>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table table-bordered table-md">
                  <tbody>
                     <tr>
                        <th>id</th>
                        <th>nama</th>
                        <th>bintang</th>
                        <th>manager</th>
                        <th>gambar</th>
                     </tr>
                     <?php
                       
                        foreach ($tampil_hotel as $row) :
                        ?>
                     <tr>
                     <td><?=$row['id'];?></td>
                     <td><?=$row['nama'];?></td>
                     <td><?php 
                            $bintang = $row['bintang'];
                            for ($i=0; $i < $bintang; $i++) { 
                                echo '<i class="fa fa-star" aria-hidden="true"></i>';
                            }
                     ?></td>
                      <td><?=$row['manager'];?></td>
                     <td><img src='component/profile/<?=$row['gambar'];?>' alt="" srcset="" width="150px" >
                        </td>
                        <td>
                        <figure>
                        <div class="buttons">
                          <a href='index.php?id=<?=$row['id'];?>&page=edit_hotel' class="btn btn-warning">EDIT</a>
                        </div>
                      </figure>
                      <figure>
                        <div class="buttons">
                          <button class="btn btn-danger trigger--fire-modal-7" data-confirm="Realy?|Do you want to continue?" data-confirm-yes="window.location.href='component/delete_hotel.php?id=<?= $row['id']; ?>&proses=delete'">Delete</button>
                        </div>
                      </figure>
                        </td>
                     </tr>
                     <?php
                       
                        endforeach;?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
</div>