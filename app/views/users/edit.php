<h2>Edit User</h2>

<form action="<?php echo URL; ?>/users/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['user_id']; ?>">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="user_email" value="<?php echo $data['row']['user_email']; ?>" required></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="password" name="user_password"></td>
        </tr>
        <tr>
            <td>FULL NAME</td>
            <td><input type="text" name="user_nama" value="<?php echo $data['row']['user_nama']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><textarea name="user_alamat" required><?php echo $data['row']['user_alamat']; ?></textarea></td>
        </tr>
        <tr>
            <td>NO. HP</td>
            <td><input type="text" name="user_hp" value="<?php echo $data['row']['user_hp']; ?>" required></td>
        </tr>
        <tr>
            <td>POS</td>
            <td><input type="text" name="user_pos" value="<?php echo $data['row']['user_pos']; ?>" required></td>
        </tr>
        <tr>
            <td>ROLE</td>
            <td><select name="user_role" required>
                <?php
                if ($data['row']['user_role'] == '1'){
                    ?>
                    <option value="1" selected>ADMIN</option>
                    <?php
                }else{
                    ?>
                    <option value="0" selected>PENGGUNA</option>
                    <?php
                }
                ?>
                <option value="1">ADMIN</option>
                <option value="0">PENGGUNA</option>
            </select></td>
        </tr>
        <tr>
            <td>AKTIF</td>
            <td><select name="user_aktif" required>
                <?php
                if ($data['row']['user_aktif'] == '1'){
                    ?>
                    <option value="1" selected>AKTIF</option>
                    <?php
                }else{
                    ?>
                    <option value="0" selected>TIDAK AKTIF</option>
                    <?php
                }
                ?>
                <option value="1">AKTIF</option>
                <option value="0">TIDAK AKTIF</option>
            </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>