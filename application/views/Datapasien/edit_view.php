<?php echo form_open('Datapasien/edit');?>
<?php echo form_hidden('no_rm',$pasiens[0]->no_rm);?>

<table>
    <tr><td>NO RM</td><td><?php echo form_input('',$pasiens[0]->no_rm,"disabled");?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama',$pasiens[0]->nama);?></td></tr>
    <tr><td>TIPE PASIEN</td><td><?php echo form_input('tipe_pasien',$pasiens[0]->tipe_pasien);?></td></tr>
    <tr><td>ALAMAT</td><td><?php echo form_input('alamat',$pasiens[0]->alamat);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('pasien','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>