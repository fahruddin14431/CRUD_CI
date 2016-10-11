<div class="panel-body table-responsive">

	<div class="row">
		<?php 
			$ket =  $this->session->flashdata('info'); 
			if (empty(!$ket)){
		?>
		<p class="col-md-2 bg-info"><?php echo $ket ?> </p>
		<?php } ?>
	</div>

	<a href="<?php echo base_url('berita/form_tambah_berita'); ?>" class="btn btn-success">Tambah Berita</a>
	<br><br>
			
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<th>No</th>
			<th>Judul</th>
			<th>Isi</th>
			<th>Tanggal</th>
			<th>Aksi</th>
			<th>Aksi</th>
		</thead>

		<tbody>
			<?php 
				$no=1;
				foreach ($data as $value) { 
			?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $value->judul_berita; ?></td>
				<td><?php echo $value->isi_berita; ?></td>
				<td><?php echo $value->tanggal; ?></td>
				<td><a href="<?php echo base_url('berita/edit_data/'.$value->id_berita); ?>" >Edit</a></td>
				<td><a href="<?php echo base_url('berita/hapus_data/'.$value->id_berita); ?>" >Delete</a></td>
			</tr>
			<?php 
				$no++;
				}
			 ?>
		</tbody>
	</table>

</div>
<!-- end of panel body -->