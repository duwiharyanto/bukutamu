<div class="row" id="form">
	
</div>
<div class="row mainview">
	<div class="col-sm-2">
		<div class="form-group">
			<button id="add" url="<?= base_url($global->url.'add')?>" class="btn btn-flat btn-block btn-info">Tambah Data</button>
		</div>
	</div>
</div>
<div class="row mainview">
	<div class="col-sm-12">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel <?php echo ucwords($global->headline)?></h3>
            </div>
            <div class="box-body table-responsive">
            	<table style="width:100%" id="datatabel" class="table table-bordered table-striped">
	                <thead>
		                <tr>
		                  <th width="5%">No</th>
		                  <th width="15%">User</th>
		                  <th width="15%">Tanggal</th>
		                  <th width="50%">Judul</th>
		                  <th width="15%" class="text-center">Aksi</th>
		                </tr>
	                </thead>
	                <tbody>
	                	<?php $i=1;foreach ($data as $row):?>
		                	<tr>
		                		<td><?=$i?></td>
		                		<td><?=$row->user_username?></td>
		                		<td><?=date('d-m-Y',strtotime($row->kegiatan_tgl))?></td>
		                		<td><?=$row->kegiatan_judul?><br>
		                			<p class="small">Tersimpan: <?= date('d-m-Y',strtotime($row->kegiatan_tersimpan))?></p>	
		                		</td>
		                		<td class="text-center">
		                			<div class="btn-group">
		                			<a href="#" id="<?=$row->kegiatan_id?>" url="<?= base_url($global->url.'detail')?>" class="edit btn btn-flat btn-xs btn-warning"><span class="fa fa-eye"></span></a>
		                				 <a href="#" id="<?=$row->kegiatan_id?>" url="<?= base_url($global->url.'edit')?>" class="editdata btn btn-flat btn-xs btn-info"><span class="fa fa-pencil"></span></a>
		                				 <a href="#" url="<?=base_url($global->url.'hapus/'.$row->kegiatan_id)?>" class="hapus btn btn-flat btn-xs btn-danger"><span class="fa fa-trash"></span></a>
		                			</div>
		                		</td>
		                	</tr>	                	
	                	<?php $i++;endforeach;?>
	                </tbody>            		
            	</table>
            	<p>Keterengan : <br>
            		<a href="#" class="btn btn-flat btn-xs btn-warning" style="width:25px"><span class="fa fa-eye"></span></a> : Detail<br>
            		<a href="#" class="btn btn-flat btn-xs btn-info" style="width:25px"><span class="fa fa-pencil"></span></a> : Edit<br>
            		<a href="#" class="btn btn-flat btn-xs btn-danger" style="width:25px"><span class="fa fa-trash"></span></a> : Hapus	
            	</p>
            </div>
		</div>
	</div>
</div>
<!--DETAIL DATA-->
<div id="edit" class="modal fade">
</div>