<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $title; ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="dashboard">Dashboard</a>
                </div>
                <div class="breadcrumb-item">
                    <a href="<?php echo $title; ?>"><?php echo $title; ?></a>
                </div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                        <form class="form-inline">
                                             <div class="form-group mb-2">
                                                <h7>Tanggal Notif</h7>
                                              </div>
                                              <div class="form-group mx-sm-1 mb-2">
                                                <input type="text" class="form-control datepicker" placeholder="Tanggal Awal" id="startDate" name="Enddate" style="cursor:pointer; max-width:135px;" readonly>
                                              </div>
                                              <div class="form-group mb-2">
                                                <h7>S/D</h7>
                                              </div>
                                              <div class="form-group mx-sm-1 mb-2">
                                                <input type="text" class="form-control datepicker" placeholder="Tanggal Akhir" id="endDate" name="enddate" style="cursor:pointer; max-width:135px;" readonly>
                                              </div> 
                                              <button type="button" id="show" style="padding-right:20px" class="btn btn-sm btn-outline-danger mb-2" title="Tampilkan Data"  onclick="showData()"><i class="fa fa-calendar-alt"></i> Show</button>
                                              <button type="button" id="show" style="padding-right:20px" class="btn btn-sm btn-outline-primary mb-2" title="Tampilkan Data"  onclick="refresh()"><i class="fas fa-redo"></i> Refresh</button>
                                         </form>  
                                         
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
  var table;

            $(document).ready(function() {
             
                table_index("no");
                $('.datepicker').flatpickr({altInput: true, altFormat: 'd-m-Y'});
                $('.select2form').select2();
            });

            function table_index(is_date_search, start_date="", end_date="")
                {
                    table =$("#tabelpegawai").DataTable({

                    "language": {
                        "sEmptyTable": "Data Pengguna Belum Ada"
                    },
                        "processing": true,
                        "serverSide": true,
                        "order": [], 
                        "ajax": {
                        "url": "<?php echo site_url('kepegawaian/ajax_list')?>",
                        "type": "POST",
                        "data":{is_date_search: is_date_search, start_date:start_date, end_date:end_date}
                        },
                        "columnDefs": [
                            { 
                            "className": "dt-center",
                            "targets": [ 0 ], 
                            "orderable": false
                        },
                        { 
                            "class": 'text-center',
                            "targets": [ -1 ],
                            "render": function ( data, type, row ) {

                                return "<div class=\"dropdown\"><button class=\"btn btn-info dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Aksi</button><div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\"><a class=\"dropdown-item\"  href='<?php echo base_url("riwayat/update/");?>"+row[5]+"' type=\"button\"><i class=\"far fa-eye\"></i> Detail</a><a href='<?php echo base_url("kepegawaian/print/");?>"+row[5]+"' class=\"dropdown-item\" type=\"button\" target=\"_blank\"><i class=\"fas fa-print\"></i> Cetak</a></div></div>"

                        },

                            "orderable": false,
                        },

                        ],
                        });
                        
                }

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}

function refresh(){
    location.reload();
}

function showData()
{
    var start_date = $('#startDate').val();
    var end_date = $('#endDate').val();
    $('#tabelpegawai').DataTable().destroy();
    table_index('yes',start_date, end_date);
}
        </script>