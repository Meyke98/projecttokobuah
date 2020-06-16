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
                <th>ID DOKTER</th>
                <th>NAMA</th>
                <th>SPESIALIS</th>
                <th>ALAMAT</th>
            </tr>
            <?php
            foreach ($dokters as $dokter){
                echo "<tr>
                    <td>$dokter->id_dokter</td>
                    <td>$dokter->nama</td>
                    <td>$dokter->spesialis</td>
                    <td>$dokter->alamat</td>
                    <td>".anchor('Datadokter/edit/'.$dokter->id_dokter,'Edit')."
                        ".anchor('Datadokter/delete/'.$dokter->id_dokter,'Delete')."</td>
                    </tr>";
            }
            ?>
        </table>
<a href="http://localhost/CodeIgniter/index.php/Datadokter/tambah">+ Tambah data<a>
</body>
</html>