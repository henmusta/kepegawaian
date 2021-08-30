<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Pegawai</h4>
            </div>
            <div class="card-body">
              <?php echo $cards->user_all ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-newspaper"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Notif Pegawai</h4>
            </div>
            <div class="card-body">
            <?php echo $cards->user_notif ?>
            </div>
          </div>
        </div>
      </div>
   
   
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Pegawai</h4>
          </div>
          <div class="card-body">
          <div class="card">
          <!-- <div class="card-header">
           
          </div> -->
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped mb-0" id="tabelnotif">
                <thead>
                <tr>
                                            <th>No</th>
                                            <th>Image</th>
                                            <th>NAMA LENGKAP</th>
                                            <th>NAIK PANGKAT</th>
                                        </tr>
                </thead>
                <tbody>
             
                </tbody>
              </table>
            </div>
          </div>
        </div>
          </div>
        </div>
      </div>
     
    </div>
    
  

  </section>
</div>

<script>
 $(document).ready(function() {
    table =$("#tabelnotif").DataTable({
    //   "autoWidth": true,
      "language": {
        "sEmptyTable": "Data Pengguna Belum Ada"
      },
        "processing": true,
        "serverSide": true,
        "order": [],

        "ajax": {
          "url": "<?php echo site_url('notif_all/ajax_list')?>",
          "type": "POST"
        },
   
         "columnDefs": [
            { 
            "className": "dt-center",
            "targets": [ 0 ], 
            "orderable": false
            },
            {
                "targets": [1],
                "render": function(data , type , row){
                    if (row[1]!=null) {
                    return "<img class=\"myImgx\"  src='<?php echo base_url("assets/foto/pegawai/");?>"+row[1]+"' width=\"100px\" height=\"100px\">";
                    }else{
                    return "<img class=\"myImgx\"  src='<?php echo base_url("assets/foto/logo/Logo.png");?>' width=\"100px\" height=\"100px\">";
                    }
                }
            },

          ],
        });
    });        
</script>