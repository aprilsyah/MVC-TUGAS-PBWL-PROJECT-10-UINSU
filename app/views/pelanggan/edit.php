<h2>Edit Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/update" method="post">
<input type="hidden" name="id" value="<?php echo $data['row']['pel_id']; ?>">
    <table>
        <tr>
            <td>GOLONGAN</td>
            <td>
                <select name="pel_id_gol">
                    <?php foreach ($data['optgol'] as $opt) { ?>
                        <option value="<?php echo $opt['gol_id']; ?>" <?php echo $opt['gol_id'] == $data['row']['pel_id_gol'] ? "selected" : ""; ?>><?php echo $opt['gol_nama']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>NOMOR</td>
            <td><input type="text" name="pel_no" value="<?php echo $data['row']['pel_no']; ?>" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="pel_nama" value="<?php echo $data['row']['pel_nama']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td>
                <textarea name="pel_alamat" cols="30" rows="10"><?php echo $data['row']['pel_alamat']; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>HP</td>
            <td><input type="text" name="pel_hp" value="<?php echo $data['row']['pel_hp']; ?>" required></td>
        </tr>
        <tr>
            <td>KTP</td>
            <td><input type="text" name="pel_ktp" value="<?php echo $data['row']['pel_ktp']; ?>" required></td>
        </tr>
        <tr>
            <td>SERI</td>
            <td><input type="text" name="pel_seri" value="<?php echo $data['row']['pel_seri']; ?>" required></td>
        </tr>
        <tr>
            <td>METERAN</td>
            <td><input type="text" name="pel_meteran" value="<?php echo $data['row']['pel_meteran']; ?>" required></td>
        </tr>
        <tr>
            <td>AKTIF</td>
            <td><select name="pel_aktif" required>
            <?php
                if ($data['row']['pel_aktif'] == '1'){
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
            <td>USER</td>
            <td>
                <select name="pel_id_user">
                    <?php foreach ($data['optusers'] as $opt) { ?>
                        <option value="<?php echo $opt['user_id']; ?>" <?php echo $opt['user_id'] == $data['row']['pel_id_user'] ? "selected" : ""; ?>><?php echo $opt['user_nama']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>