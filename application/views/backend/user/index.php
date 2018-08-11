<div class="row">
	<div class="col-sm-12">
      <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-info"></i> Perhatian!</h4>
        	Jika user dihapus maka daftar kegiatan user tersebut akan terhapus.
      </div>		
	</div>
</div>
<div class="row">
	<div class="col-sm-2">
		<div class="form-group">
			<button id="tambahdata" data-toggle="modal" data-target="#forminput" class="btn btn-flat btn-block btn-info">Tambah Data</button>
		</div>
	</div>
</div>
<div class="row">
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
		                  <th width="5%">Id</th>
		                  <th width="30%">Username</th>
		                  <th width="15%">Level</th>
		                  <th width="20%">Email</th>
		                  <th width="15%">Terdaftar</th>
		                  <th width="10%" class="text-center">Aksi</th>
		                </tr>
	                </thead>
	                <tbody>
	                	<?php $i=1;foreach ($data as $row):?>
		                	<tr>
		                		<td><?= $i?></td>
		                		<td><?= $row->user_id?></td>
		                		<td><?=$row->user_username?></td>
		                		<td><?=$row->level_keterangan?></td>
		                		<td><?=$row->user_email?></td>
		                		<td><?=date('d-m-Y',strtotime($row->user_terdaftar))?></td>
		                		<td class="text-center">
		                			<div class="btn-group">
		                				<a href="#" id="<?=$row->user_id?>" url="<?= base_url($global->url.'detail')?>" class="<?= $row->user_param=='1' ? 'hide':''?> btn btn-flat btn-xs  btn-warning <?= $row->status==1 ? 'edit':'disabled'?>"><span class="fa fa-eye"></span></a>
		                				<a href="#" id="<?=$row->user_id?>" url="<?= base_url($global->url.'edit')?>" class="edit btn btn-flat btn-xs btn-info"><span class="fa fa-pencil"></span></a>
		                				<a href="#" url="<?=base_url($global->url.'hapus/'.$row->user_id)?>" class="<?= $row->user_param=='1' ? 'disabled':'hapus'?> btn btn-flat btn-xs btn-danger"><span class="fa fa-trash"></span></a>
		                			</div>
		                		</td>
		                	</tr>	                	
	                	<?php $i++;endforeach;?>
	                </tbody>            		
            	</table>
            	<p>Keterengan : <br>
            		<a href="#" class="btn btn-flat btn-xs btn-warning" style="width:25px"><span class="fa fa-eye"></span></a> : Detail User <br>
            		<a href="#" class="btn btn-flat btn-xs btn-info" style="width:25px"><span class="fa fa-pencil"></span></a> : Edit User <br>
            		<a href="#" class="btn btn-flat btn-xs btn-danger" style="width:25px"><span class="fa fa-trash"></span></a> : Hapus User	
            	</p>
            </div>
		</div>
	</div>
</div>
<div id="forminput" class="modal fade">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title"><?php echo ucwords($global->headline)?></h4>
		</div>
		<form method="POST" action="<?= base_url($global->url)?>">
		<div class="modal-body">	
			<div class="form-group">
				<label>Username</label>
				<input required type="text" class="form-control" name="user_username"></input>			
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="user_password"></input>			
			</div>	                		
			<div class="form-group">
				<label>Email</label>
				<input required type="text" class="form-control" name="user_email"></input>
			</div>
			<div class="form-group">
				<label>Level</label>
				<select class="selectdata form-control" name="user_level" style="width:100%">
					<?php foreach($level as $row):?>
						<option value="<?= $row->level_id?>"><?= ucwords($row->level_keterangan)?></option>
					<?php endforeach;?>
				</select>
			</div> 			               			
		</div>
		<div class="modal-footer">
			<button type="submit" name="submit" value="submit" class="btn btn-block btn-success btn-block">Simpan</button>
		</div>
		</form>  
	</div>
    </div>
</div>
<div id="edit" class="modal fade">
</div>