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
                            <h4>Table Settings</h4>
                            <!-- <a href="kepegawaian/form" class="btn btn-primary">Tambah Pegawai</a> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="tabel_settings">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kepala</th>
                                            <th>Nip Kepala</th>
                                            <th>Jabatan Kepala</th>
                                            <th>Mengetahui</th>
                                            <th>Nip</th>
                                            <th>Jabatan</th>
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

        
<div class="modal fade" id="modal_form_seeting" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h3 class="modal-title">Person Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body form">
                <form
                    action="<?php echo base_url("settings/update/");?>"
                    autocomplete="off"
                    id="form_set"
                    class="form-horizontal"
                    enctype="multipart/form-data">
                    <input type="hidden" id="id_set" name="id_set" required="">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama Kepala</label>
                                <input type="text" class="form-control" id="nama_kepala" name="nama_kepala" required="">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>NIP Kepala</label>
                                    <input type="text" class="form-control" id="nip_kepala" name="nip_kepala" required="">
                                        <div class=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <input class="form-control" id="jabatan_kepala" name="jabatan_kepala" rows="3"></input>
                                            <div class=""></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Mengetahui Nama</label>
                                            <input type="text" class="form-control" id="saksi" name="saksi" required="">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Mengetahui Nip</label>
                                                <input type="text" class="form-control" id="nip_saksi" name="nip_saksi" required="">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Mengetahui Jabatan</label>
                                                    <input class="form-control" id="jabatan_jabatan" name="jabatan_saksi" ></input>
                                                        <div class=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-outline-primary">
                                                    <i class="fa fa-save"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>

        <script>
$(document).ready(function() {
    table =$("#tabel_settings").DataTable({
                "autoWidth": true,
                "language": {
                    "sEmptyTable": "Data Pengguna Belum Ada"
                },
                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.

                    // Load data for the table's content from an Ajax source
                    "ajax": {
                    "url": "<?php echo site_url('settings/ajax_list')?>",
                    "type": "POST"
                    },
                    //Set column definition initialisation properties.
                    "columnDefs": [
                        { 
                        "className": "text-center",
                        "targets": [ 0 ], 
                        "orderable": false
                    },
                    
                    //   <span class="badge badge-danger">Danger</span>
                    { 
                        "class": 'text-center', //last column
                        "targets": [ -1 ], //last column
                        "render": function ( data, type, row ) {

                            return "<a class=\"btn btn-xs btn-outline-primary\" href=\"javascript:void(0)\" title=\"Edit\" onclick=\"edit_settings("+row[7]+")\"><i class=\"fas fa-edit\"></i></a>";

                    },

                        "orderable": false, //set not orderable
                    },

                    ],
                });
                $('form#form_set').validate({
                    validClass: 'is-valid',
                    errorClass: 'is-invalid',
                    errorElement: 'div',
                    errorPlacement: function (error, element) {
                        error.addClass('invalid-feedback');
                        element
                            .parent()
                            .append(error);
                    },
                    highlight: function (element, errorClass, validClass) {
                        $(element)
                            .removeClass(validClass)
                            .addClass(errorClass)
                            .closest('.form-group')
                            .children('label')
                            .removeClass('text-success')
                            .addClass('text-danger');
                    },
                    unhighlight: function (element, errorClass, validClass) {
                        $(element)
                            .removeClass(errorClass)
                            .addClass(validClass)
                            .closest('.form-group')
                            .children('label')
                            .removeClass('text-danger')
                            .addClass('text-success');
                    },
                    submitHandler: function (form, eve) {
                        eve.preventDefault();
                        var btnSubmit = $(form).find("[type='submit']"),
                            btnSubmitHtml = btnSubmit.html();

                        $.ajax({
                            cache: false,
                            processData: false,
                            contentType: false,
                            type: 'POST',
                            url: $(form).attr('action'),
                            data: new FormData(form),
                            dataType: 'JSON',
                            beforeSend: function () {
                                btnSubmit
                                    .addClass("disabled")
                                    .html("<i class='fas fa-spinner fa-pulse fa-fw'></i> Loading ... ");
                            },
                            error: function () {
                                btnSubmit
                                    .removeClass("disabled")
                                    .html(btnSubmitHtml);
                            },
                            success: function (response) {
                                swal('Berhasil !', response.message, response.status);
                                btnSubmit
                                    .removeClass("disabled")
                                    .html(btnSubmitHtml);
                                let timeout = 1000;
                                if (response.status == "success") {
                                    setTimeout(function () {
                                        $('#modal_form_aplikasi').modal('hide');
                                        reload_table();
                                    }, timeout);
                                } else {
                                    swal('Gagal !', response.message, response.status);
                                }
                            }
                        });
                    }
                });
            });
        function reload_table()
        {
            table.ajax.reload(null,false); //reload datatable ajax 
        }

        function edit_settings(id){ 
            $('#form')[0].reset(); // reset form on modals
            $.ajax({
                url : "<?php echo site_url('settings/edit_settings')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="nama_kepala"]').val(data.nama_kepala);
                    $('[name="nip_kepala"]').val(data.nip_kepala);
                    $('[name="jabatan_kepala"]').val(data.jabatan_kepala);
                 
                    $('[name="saksi"]').val(data.mengetahui);
                    $('[name="nip_saksi"]').val(data.nip_saksi);
                    $('[name="jabatan_saksi"]').val(data.jabatan_saksi);
                    $('[name="id_set"]').val(data.id);
                  
                
                    $('#modal_form_seeting').modal('show'); // show bootstrap modal when complete loaded
                    $('.modal-title').text('Edit Settings'); // Set title to Bootstrap modal title

                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
            
        }


            
        </script>