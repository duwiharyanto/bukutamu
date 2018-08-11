<div class="col-sm-12">
	<div class="box box-solid  animated fadeInRight">
		<div class="box-header with-border">
			<h3 class="box-title"><?= ucwords($global->headline)?></h3>
		</div>
		<div class="box-body">
			<form id="formadd" method="POST" action="<?= base_url($global->url)?>" enctype="multipart/form-data">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label>Id</label>
							<input type="text" name="id"  readonly class="form-control" value="<?=$data->registrasi_id?>">
						</div>
						<div class="form-group">
							<label class="text-red">Nama Lengkap *</label>
							<input id="registrasi_nama" required type="text" name="registrasi_nama"  class="text-capitalize form-control" title="Harus disi" value="<?=$data->registrasi_nama?>"> 
						</div>
						<div class="form-group">
							<label class="text-red">Tempat lahir*</label>
							<input required type="text" name="registrasi_tempatlahir"  class="text-capitalize form-control" title="Harus disi" value="<?=$data->registrasi_tempatlahir?>">
						</div>													
						<div class="form-group">
							<label class="text-red">Alamat*</label>
							<textarea required name="registrasi_alamat" class="text-capitalize form-control" rows="3" title="Harus disi" ><?=$data->registrasi_alamat?></textarea>
						</div>	
						<div class="form-group">
							<label class="text-red">Nomor Hp*</label>
							<input type="text" required name="registrasi_nohp"  class="form-control" title="Harus disi" value="<?=$data->registrasi_nohp?>">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input required type="email" name="registrasi_email"  class="form-control" title="Tulis email dengan benar" value="<?=$data->registrasi_email?>">
						</div>
						<div class="form-group">
							<label>Tinggi Badan(Cm)</label>
							<input type="number" name="registrasi_tinggibadan"  class="form-control" title="Hanya angka yang diperbolehkan" value="<?=$data->registrasi_tinggibadan?>">
						</div>
						<div class="form-group">
							<label>Berat Badan(Kg)</label>
							<input type="number" name="registrasi_beratbadan"  class="form-control" title="Hanya angka yang diperbolehkan" value="<?=$data->registrasi_beratbadan?>">
						</div>
						<div class="form-group">
							<label class="text-red">Foto*</label>
							<input type="file" name="registrasi_foto">
							<p class="help-block">Ukuran maksimal 5mb, format JPG|jpeg</p>
						</div>																																																 
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="text-red">Tanggal Lahir*</label>
							<input type="text"  required name="registrasi_tgllahir" class="datepicker form-control" title="Harus disi" value="<?=date('d-m-Y',strtotime($data->registrasi_tgllahir))?>">
						</div>
						<div class="form-group">
							<label>Kota</label>
							<input type="text" name="registrasi_kota"  class="form-control" value="<?=$data->registrasi_kota?>">
						</div>
						<div class="form-group">
							<label>Negara</label>
							<input type="text" name="registrasi_negara"  class="form-control" value="<?=$data->registrasi_negara?>">
						</div>													
						<div class="form-group">
							<label>Kode POS</label>
							<input type="text" name="registrasi_kodepos"  class="form-control" value="<?=$data->registrasi_kodepos?>">
						</div>															 
					</div>					
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<button class="btn btn-flat btn-primary btn-block" type="submit" name="submit" value="submit">Update</button>
						</div>
					</div>
				</div>
			</form>		
		</div>
	</div>		
</div>
<?php
	include 'registrasi.js';
?>