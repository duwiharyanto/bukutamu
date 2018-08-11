<div class="row mainview">
	<div class="col-sm-12">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel <?php echo ucwords($global->headline)?></h3>
            </div>
            <div class="box-body table-responsive">
            	<table style="width:100%" id="laporan" class="table table-bordered table-striped">
	                <thead style="background-color:black;color:white">
		                <tr>
		                  <th width="5%">No</th>
		                  <th width="25%">Nama</th>
		                  <th width="15%">No.Tlp</th>
		                  <th width="10%">Tgl.Lahir</th>
		                  <th width="45%">Alamat</th>
		                </tr>
	                </thead>
	                <tbody>
	                	<?php $i=1;foreach ($data as $row):?>
		                	<tr>
		                		<td><?=$i?></td>
		                		<td><?=ucwords($row->registrasi_nama)?></td>
		                		<td><?=ucwords($row->registrasi_nohp)?></td>
		                		<td><?=date('d-m-Y',strtotime($row->registrasi_tgllahir))?></td>
		                		<td><?=ucwords($row->registrasi_alamat)?></td>
		                	</tr>	                	
	                	<?php $i++;endforeach;?>
	                </tbody>            		
            	</table>
            </div>
		</div>
	</div>
</div>