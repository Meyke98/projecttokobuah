<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo form_open_multipart('Datapasien/tambah');?>
            <table>
                <tr><td>NO RM</td><td><?php echo form_input('no_rm');?></td></tr>
                <tr><td>NAMA</td><td><?php echo form_input('nama');?></td></tr>
                <tr><td>TIPE PASIEN</td><td><?php echo form_input('tipe_pasien');?></td></tr> 
                <tr><td>ALAMAT</td><td><?php echo form_input('alamat');?></td></tr>       
                <tr><td colspan="2">
                    <?php echo form_submit('submit','Simpan');?>
                    <?php echo anchor('datapasien','Kembali');?></td></tr>
            </table>
    <?php
        echo form_close();
    ?>
</body>
</html>