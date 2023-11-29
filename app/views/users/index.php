<h2>Users</h2>

<a href="<?php echo URL; ?>/users/input" class="btn">Input User</a>

<table id="dtb">
      <thead>
      <tr>
            <th>NO</th>
            <th>EMAIL</th>
            <th>NAME</th>
            <th>ALAMAT</th>
            <th>NO. HP</th>
            <th>POS</th>
            <th>ROLE</th>
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
                  <td><?php echo $row['user_email']; ?></td>
                  <td><?php echo $row['user_nama']; ?></td>
                  <td><?php echo $row['user_alamat']; ?></td>
                  <td><?php echo $row['user_hp']; ?></td>
                  <td><?php echo $row['user_pos']; ?></td>
                  <td><?php 
                        if($row['user_role'] == '1')
                        {
                              echo "Admin";
                        }else{
                              echo "Pengguna";
                        } 
                  ?></td>
                  <td><?php 
                        if($row['user_aktif'] == '1')
                        {
                              echo "Aktif";
                        }else{
                              echo "Tidak Aktif";
                        } 
                  ?></td>
                  <td><?php echo $row['created_at']; ?></td>
                  <td><?php echo $row['updated_at']; ?></td>
                  <td><a href="<?php echo URL; ?>/users/edit/<?php echo $row['user_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/users/delete/<?php echo $row['user_id']; ?>" class="btn" style="background-color: red; color:white;" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>
      </tbody>
</table>