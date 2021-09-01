<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $title; ?></h1>
            <div class="section-header-breadcrumb">
               <div class="breadcrumb-item active">
                    <a href="dashboard">Dashboard</a>
                </div>
                <div class="breadcrumb-item">
                <a href="notif_all"><?php echo $title; ?></a>
                </div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="tabelnotif" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Image</th>
                                            <th>NAMA LENGKAP</th>
                                            <th>NAIK PANGKAT</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
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