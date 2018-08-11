<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title"><span class="fa fa-eye"></span> <?= ucwords($global->headline)?></h4>
    </div>
    <div class="modal-body">
    <div class="row">
      <div class="col-sm-8">
        <table class="table table-simple" width="100%">
          <tr>
            <th width="40%">Nama</th>
            <td width="60%"><?=ucwords($data->registrasi_nama)?></td>
          </tr>
          <tr>
            <th>Tempat Lahir</th>
            <td><?=ucwords($data->registrasi_tempatlahir)?></td>
          </tr>
          <tr>
            <th>Tanggal Lahir</th>
            <td><?=date('d-m-Y',strtotime($data->registrasi_tgllahir))?></td>
          </tr>
          <tr>
            <th>Alamat</th>
            <td><?=ucwords($data->registrasi_alamat)?></td>
          </tr>
          <tr>
            <th>Kota</th>
            <td><?=ucwords($data->registrasi_kota)?></td>
          </tr>
          <tr>
            <th>Negara</th>
            <td><?=ucwords($data->registrasi_negara)?></td>
          </tr>
          <tr>
            <th>Kode POS</th>
            <td><?=ucwords($data->registrasi_kodepos)?></td>
          </tr>
          <tr>
            <th>No Handphone</th>
            <td><?=ucwords($data->registrasi_nohp)?></td>
          </tr>
          <tr>
            <th>Email</th>
            <td><?=ucwords($data->registrasi_email)?></td>
          </tr>
          <tr>
            <th>Tinggi Badan</th>
            <td><?=ucwords($data->registrasi_tinggibadan)." Cm"?></td>
          </tr>
          <tr>
            <th>Berat Badan</th>
            <td><?=ucwords($data->registrasi_beratbadan)." Kg"?></td>
          </tr>                                                                                   
        </table>        
      </div>
      <div class="col-sm-4">
        <img src="<?= $data->registrasi_foto? base_url('upload/foto/'.$data->registrasi_foto):base_url('asset/dist/img/user.png')?>" style="width:160px;height:160px;">
      </div>
    </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-flat btn-danger pull-right" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>