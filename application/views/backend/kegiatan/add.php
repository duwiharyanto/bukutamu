<div class="col-sm-12">
	<div class="box box-solid">
		<div class="box-header with-border">
			<h3 class="box-title"><?= ucwords($global->headline)?></h3>
		</div>
		<div class="box-body">
			<form id="formadd" method="POST" action="<?= base_url($global->url)?>" enctype="multipart/form-data">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label>Id</label>
							<input type="text" name="id" placeholder="Auto Generated" readonly class="form-control">
						</div>
						<div class="form-group">
							<label>User</label>
							<select class="selectdata form-control" name="kegiatan_userid" style="width:100%">
								<?php foreach($user AS $row):?>
									<option value="<?= $row->user_id ?>"><?= ucwords($row->user_username)?></option>
								<?php endforeach;?>
							</select>
							<p class="help-block text-red">User bisa disesuaikan</p>
						</div>
						<div class="form-group">
							<label>Tanggal</label>
							<input type="text" name="kegiatan_tgl"  class="datepicker form-control">
						</div>															 
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label>Judul</label>
							<input type="text" class="form-control" name="kegiatan_judul">
						</div>
						<div class="form-group">
							<label>Kegiatan</label>
		                    <textarea id="editor1" name="kegiatan_keterangan" rows="10" class="form-control">
		                    </textarea>								
						</div>
						<div class="form-group">
							<label>File</label>
							<input type="file" name="fileupload">
							<p class="help-block">Ukuran maksimal 5mb, format PDF. Jika ada berkasi untuk dilampirkan</p>
						</div>							
						<div class="form-group">
							<button type="submit" value="submit" name="submit" class="btn btn-info btn-block btn-flat">Simpan</button>
						</div>														
					</div>
				</div>
			</form>		
		</div>
	</div>		
</div>
<script type="text/javascript">
	$('.datepicker').datepicker({
		autoclose: true,
		todayHighlight: true,
		format: "dd-mm-yyyy",
		todayBtn: true,
	});
	$(".selectdata").select2();
	CKEDITOR.replace('editor1');
</script>