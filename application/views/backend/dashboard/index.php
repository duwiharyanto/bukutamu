<div class="row">
  <div class="col-sm-4">
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?=$kegiatan?></h3>
          <p>Kegiatan</p>
        </div>
        <div class="icon">
          <i class="fa fa-tasks"></i>
        </div>
        <a href="<?= site_url('admin/kegiatan')?>" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
      </div>    
  </div>
  <div class="col-sm-4">
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?=$user?></h3>
          <p>User</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <a href="<?= site_url('admin/user')?>" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
      </div>    
  </div>  
</div>
<div class="row">
  <div class="col-sm-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title"> <span class="fa fa-area-chart"></span> Grafik(10 hari terakhir)</h3>
      </div>
      <div class="box-body">
        <div class="chart">
        <!---->
          <canvas id="myChart" style="height:400px"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    var config = {
      type: 'line',
      data: {
        labels: [
          <?php foreach($grafik AS $row):?>
            '<?=date("d-m-Y",strtotime($row->kegiatan_tersimpan))?>',
          <?php endforeach;?>
        ],
        datasets: [{
          label: 'Kegiatan',
          backgroundColor: window.chartColors.blue,
          borderColor: window.chartColors.blue,
          data: [
              <?php foreach($grafik AS $row):?>
                '<?=date($row->jumlah)?>',
              <?php endforeach;?> 
          ],
          fill: false,
           position:'bottom',
        }
        ]
      },
      options: {
        responsive: true,
        title: {
          display: true,
          text: 'Chart kegiatan Tersimpan',
          position:'top',
        },
        tooltips: {
          mode: 'index',
          intersect: false,
        },
        hover: {
          mode: 'nearest',
          intersect: true
        },
        scales: {
          xAxes: [{
            display: true,
            scaleLabel: {
              display: true,
              labelString: 'Tanggal'
            }
          }],
          yAxes: [{
            display: true,
            scaleLabel: {
              display: true,
              labelString: 'Jumlah'
            },
            ticks: {
                beginAtZero: true,
                // steps: 1,
                // stepValue: 5,
                // max: 50
            }            
          }]
        }
      }
    }; 
    window.onload = function() {
      var ctx = document.getElementById('myChart').getContext('2d');
      window.myLine = new Chart(ctx, config);
    };       
</script>