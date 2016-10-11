<div class="panel-body">
	<?php echo form_open(); ?>
	<?php echo validation_errors(); ?>
	<?php foreach ($data_berita as $value) { ?>
		<div class="row">
			<div class="form-group col-xs-12 col-sm-9 col-md-4">
	          	<label>Kode berita</label>
	          	<input type="text" class="form-control" value="<?php echo $value->id_berita; ?>" name="kode_ber" placeholder="Kode berita" readonly/>
	        </div>
        </div>
        <div class="row">
	        <div class="form-group col-xs-12 col-md-12">
	          	<label>Judul</label>
	          	<input type="text" class="form-control" name="jud_ber" value="<?php echo $value->judul_berita; ?>" autocomplete="off" autofocus=""/>
	        </div>
	    </div>
	    <div class="row">
	        <div class="form-group col-xs-12 col-md-12">
	          	<label>Isi Berita</label>
	          	<textarea name="isi_ber" rows="10" class="form-control" ><?php echo $value->isi_berita; ?></textarea>
	        </div>
	    </div>
	    <div class="row">
	        <div class="form-group col-xs-12 col-md-4">
	          	<label>Tanggal</label><small class="text-muted"> - Otomatis</small>
	          	<input type="text" class="form-control" name="tgl" placeholder="berita" value="<?php echo date('Y-m-d'); ?>" readonly/>
	        </div>
	    </div>
	    <div class="row">
	    	<div class="col-md-6">
        		<input type="submit" name="submit" class="btn btn-success">
        	</div>
        </div>
	<?php echo form_close(); ?>
	<?php } ?>
</div>
<!-- end of panel body -->