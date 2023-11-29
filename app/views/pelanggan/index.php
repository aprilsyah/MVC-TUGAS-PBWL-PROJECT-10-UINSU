<h2>Pelanggan</h2>

<a href="<?php echo URL; ?>/pelanggan/input" class="btn">Input Pelanggan</a>

<table id="dtb">
      <thead>
            <tr>
                  <th>NO</th>
                  <th>GOL</th>
                  <th>NOMOR</th>
                  <th>NAMA</th>
                  <th>ALAMAT</th>
                  <th>HP</th>
                  <th>KTP</th>
                  <th>SERI</th>
                  <th>METERAN</th>
                  <th>AKTIF</th>
                  <th>CREATED AT</th>
                  <th>UPDATED AT</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
            </tr>
      </thead>
      <tbody>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
                  <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['gol_nama']; ?></td>
                        <td><?php echo $row['pel_no']; ?></td>
                        <td><?php echo $row['pel_nama']; ?></td>
                        <td><?php echo $row['pel_alamat']; ?></td>
                        <td><?php echo $row['pel_hp']; ?></td>
                        <td><?php echo $row['pel_ktp']; ?></td>
                        <td><?php echo $row['pel_seri']; ?></td>
                        <td><?php echo $row['pel_meteran']; ?></td>
                        <td><?php 
                              if($row['pel_aktif'] == '1')
                              {
                                    echo "Aktif";
                              }else{
                                    echo "Tidak Aktif";
                              } 
                        ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                        <td><?php echo $row['updated_at']; ?></td>
                        <td><a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn">Edit</a></td>
                        <td><a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>" class="btn" style="background-color: red; color:white;" onclick="return confirm('Are you sure?')">Delete</a></td>
                  </tr>
            <?php $no++;
            } ?>
      </tbody>
</table>