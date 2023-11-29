<h2>Input User</h2>

<form action="<?php echo URL; ?>/users/save" method="post">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="user_email" required></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="password" name="user_password" required></td>
        </tr>
        <tr>
            <td>FULL NAME</td>
            <td><input type="text" name="user_nama" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><textarea name="user_alamat" required></textarea></td>
        </tr>
        <tr>
            <td>NO. HP</td>
            <td><input type="text" name="user_hp" required></td>
        </tr>
        <tr>
            <td>POS</td>
            <td><input type="text" name="user_pos" required></td>
        </tr>
        <tr>
            <td>ROLE</td>
            <td><select name="user_role" required>
                <option value="1">ADMIN</option>
                <option value="0">PENGGUNA</option>
            </select></td>
        </tr>
        <tr>
            <td>AKTIF</td>
            <td><select name="user_aktif" required>
                <option value="1">AKTIF</option>
                <option value="0">TIDAK AKTIF</option>
            </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>