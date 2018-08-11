<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title"><span class="fa fa-eye"></span> <?php echo ucwords($global->headline)?></h4>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-sm-8">
					<div class="tabel-responsive">
						<table class="table table-striped">
							<tr>
								<th width="30%">Nama</th>
								<td width="70%"><?=ucwords($data->datadiri_nama)?></td>
							</tr>
							<tr>
								<th>Email</th>
								<td><?=$data->user_email?></td>
							</tr>					
							<tr>
								<th>Tanggl Lahir</th>
								<td><?=date('d-m-Y',strtotime($data->datadiri_tgllahir))?></td>
							</tr>
							<tr>
								<th>No Tlp</th>
								<td><?=$data->datadiri_notelp?></td>
							</tr>
							<tr>
								<th>Alamat</th>
								<td><?=ucwords($data->datadiri_alamat)?></td>
							</tr>
							<tr>
								<th>Keterangan</th>
								<td><?=ucwords($data->datadiri_keterangan)?></td>
							</tr>															
						</table>
					</div>			
				</div>
				<div class="col-sm-4">
					<img src="<?=base_url().'filefoto/'.$data->datadiri_foto?>" style="width:140px;height:170px;">
				</div>
			</div>
		</div> 
	</div>
</div>