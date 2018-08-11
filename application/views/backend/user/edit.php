<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title"><span class="fa fa-pencil"></span> <?php echo ucwords($global->headline)?></h4>
		</div>
		<form method="POST" action="<?= base_url($global->url)?>">
		<div class="modal-body">
			<div class="form-group">
				<label>Use Id</label>
				<input readonly type="text" class="form-control" name="id" value="<?=$data->user_id?>"></input>			
			</div>		
			<div class="form-group">
				<label>Username</label>
				<input required type="text" class="form-control" name="user_username" value="<?=$data->user_username?>"></input>			
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="user_password"></input>	
				<p class="help-block">Biarkan kosong jika tidak dirubah</p>		
			</div>	                		
			<div class="form-group">
				<label>Email</label>
				<input required type="text" class="form-control" name="user_email" value="<?=$data->user_email?>"></input>
			</div>
			<div class="form-group">
				<label>Level</label>
				<select class="selectdata form-control" name="user_level" style="width:100%">
					<?php foreach($level as $row):?>
						<option value="<?= $row->level_id?>" <?= $data->user_levelid==$row->level_id ? 'selected':''?>><?= ucwords($row->level_keterangan)?></option>
					<?php endforeach;?>
				</select>
			</div>               			
		</div>
		<div class="modal-footer">
			<button type="submit" name="submit" value="submit" class="btn btn-flat btn-success btn-block">Update</button>
		</div>
		</form>  
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){ 
		$(".selectdata").select2();
	})
</script>