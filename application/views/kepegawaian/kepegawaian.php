<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $title; ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="#">Dashboard</a>
                </div>
                <div class="breadcrumb-item">
                    <a href="#"><?php echo $title; ?></a>
                </div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4>Table Pegawai</h4>
                            <a href="kepegawaian/form" class="btn btn-primary">Tambah Pegawai</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="tabelpegawai" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nip</th>
                                            <th>NAMA LENGKAP</th>
                                            <th>TMT PANGKAT</th>
                                            <th>NAIK PANGKAT</th>
                                            <th class="text-center">AKSI</th>
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
            $('.datepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                drops: 'down',
                opens: 'right'
            });


            $(document).ready(function() {
                $('.select2form').select2();
                    //datatables
    table =$("#tabelpegawai").DataTable({
    //   "autoWidth": true,
      "language": {
        "sEmptyTable": "Data Pengguna Belum Ada"
      },
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
          "url": "<?php echo site_url('kepegawaian/ajax_list')?>",
          "type": "POST"
        },
         //Set column definition initialisation properties.
         "columnDefs": [
            { 
            "className": "dt-center",
            "targets": [ 0 ], 
            "orderable": false
          },
          
        //   <span class="badge badge-danger">Danger</span>
          { 
            "class": 'text-center', //last column
            "targets": [ -1 ], //last column
            "render": function ( data, type, row ) {

                return "<div class=\"dropdown\"><button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Aksi</button><div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\"><a class=\"dropdown-item\"  href='<?php echo base_url("riwayat/update/");?>"+row[5]+"' type=\"button\"><i class=\"far fa-eye\"></i> Preview</a><a href='<?php echo base_url("kepegawaian/print/");?>"+row[5]+"' class=\"dropdown-item\" type=\"button\" target=\"_blank\"><i class=\"fas fa-print\"></i> Cetak</a></div></div>"

           },

            "orderable": false, //set not orderable
          },

          ],
        });
            });


            
        </script>