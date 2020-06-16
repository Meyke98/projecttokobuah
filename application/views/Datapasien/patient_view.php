<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>72170121</title>
</head>
<body>
    <p>-</p>
        <font color="orange">
            <?php echo $this->session->flashdata('hasil'); ?>
        </font>
        <table border="1">
            <tr>
                <th>NO RM</th>
                <th>NAMA</th>
                <th>TIPE PASIEN</th>
                <th>ALAMAT</th>
            </tr>
            <?php
            foreach ($pasiens as $pasien){
                echo "<tr>
                    <td>$pasien->no_rm</td>
                    <td>$pasien->nama</td>
                    <td>$pasien->tipe_pasien</td>
                    <td>$pasien->alamat</td>
                    <td>".anchor('Datapasien/edit/'.$pasien->no_rm,'Edit')."
                        ".anchor('Datapasien/delete/'.$pasien->no_rm,'Delete')."</td>
                    </tr>";
            }
            ?>
        </table>
<a href="http://localhost/CodeIgniter/index.php/Datapasien/tambah">+ Tambah data<a>
</body>
</html>