<div class="modal-dialog modal-lg">
<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title"><span class="fa fa-eye"></span> <?php echo ucwords($global->headline)?></h4>
	</div>
	<div class="modal-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<tr>
					<th width="20%">Id</th>
					<td width="80%"><?= $data->kegiatan_id?></td>
				</tr>
				<tr>
					<th>Tersimpan</th>
					<td><?=date('d-m-Y',strtotime($data->kegiatan_tersimpan))?></td>
				</tr>				
				<tr>
					<th>User</th>
					<td><?=$data->user_username?></td>
				</tr>
				<tr>
					<th>Tanggal</th>
					<td><?=date('d-m-Y',strtotime($data->kegiatan_tgl))?></td>
				</tr>
				<tr>
					<th>Judul</th>
					<td><?=ucwords($data->kegiatan_judul)?></td>
				</tr>				
				<tr>
					<th>Keterangan</th>
					<td><?=ucwords($data->kegiatan_keterangan)?></td>
				</tr>
				<tr>
					<th>File</th>
					<td>
						<?php if($data->kegiatan_file):?>
							<a href="<?= base_url('admin/kegiatan/downloadberkas/'.$data->kegiatan_file)?>" class="btn btn-xs btn-flat btn-info">Download</a>
						<?php else: ?>
							<p class="help-block">Belum diupload</p>	
						<?php endif;?>
					</td>
				</tr>								
			</table>
		</div>              			
	</div>
</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){ 
		$(".selectdata").select2();
	})
</script>