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
                            <a href="#" class="btn btn-primary">Tambah User</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="tabelpegawai" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nip</th>
                                            <th>Nama</th>
                                            <th>Foto</th>
                                            <th>TTL</th>
                                            <th>Agama</th>
                                            <th>Gender</th>
                                            <th>Status Nikah</th>
                                            <th>Alamat</th>
                                            <th>Status Riwayat</th>
                                            <th>Aksi</th>
                                            <th>Riwayat</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Pegawai</h4>
                        </div>
                        <div class="card-body">
                            <form action="#" id="form" class="form-horizontal">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" required="">
                                            <div class=""></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nik</label>
                                            <input type="text" class="form-control" id="nik" name="nik" required="">
                                            <div class=""></div>
                                        </div>
                                        <div class="form-group mb-0">
                                            <label>Alamat</label>
                                            <textarea class="form-control" required="" id="alamat" name="alamat"></textarea>
                                            <div class=""></div>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Date Picker</label>
                                            <input type="text" class="form-control datepicker" id="ttl" name="ttl">
                                            <div class=""></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="file-upload">
                                                <button
                                                    class="file-upload-btn"
                                                    type="button"
                                                    onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

                                                <div class="image-upload-wrap">
                                                    <input
                                                        class="file-upload-input"
                                                        type='file'
                                                        name="imagefile" id="imagefile"
                                                        onchange="readURL(this);"
                                                        accept="image/*"/>
                                                    <div class="drag-text">
                                                        <p>Drag and drop gambar</p>
                                                    </div>
                                                </div>
                                                <div class="file-upload-content">
                                                    <img class="file-upload-image" id="photo" src="#" alt="your image"/>
                                                    <div class="image-title-wrap">
                                                        <button type="button" onclick="removeUpload()" class="remove-image">Remove<span class="image-title">Uploaded Image</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Jenis kelamin</label>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="jenis_kelamin"
                                                    id="pria"
                                                    value="Pria"
                                                    checked="checked">
                                                <label class="form-check-label" for="Pria">
                                                    Pria
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="jenis_kelamin"
                                                    id="wanita"
                                                    value="Wanita">
                                                <label class="form-check-label" for="Wanita">
                                                    Wanita
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Status Pernikahan</label>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="pernikahan"
                                                    id="sudah"
                                                    value="Sudah"
                                                    checked="checked">
                                                <label class="form-check-label" for="Sudah">
                                                    Sudah Menikah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="pernikahan"
                                                    id="belum"
                                                    value="Belum">
                                                <label class="form-check-label" for="Belum">
                                                    Belum Menikah
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Agama</label>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="agama"
                                                    id="islam"
                                                    value="Islam"
                                                    checked="checked">
                                                <label class="form-check-label" for="Islam">
                                                    Islam
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="agama"
                                                    id="kristen"
                                                    value="Kristen">
                                                <label class="form-check-label" for="Kristen">
                                                    Kristen
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="agama"
                                                    id="hindhu"
                                                    value="Hindhu">
                                                <label class="form-check-label" for="Hindhu">
                                                    Hindhu
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="agama"
                                                    id="budha"
                                                    value="Budha">
                                                <label class="form-check-label" for="Budha">
                                                    Budha
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="agama"
                                                    id="konghucu"
                                                    value="Konghucu">
                                                <label class="form-check-label" for="Konghucu">
                                                    Konghucu
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <div></div>
                                </div>
                            </form>
                        </div>
                        <hr>
                        
                        <!-- end -->
                        <div class="card-footer text-right">
                            <a id="kembali" name="kembali" class="btn btn-secondary">Kembali</a>
                            <a id="simpan" name="simpan" onclick="save()" class="btn btn-success">Simpan</a>
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

            function readURL(input) {
                if (input.files && input.files[0]) {

                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.image-upload-wrap').hide();

                        $('.file-upload-image').attr('src', e.target.result);
                        $('.file-upload-content').show();

                        $('.image-title').html(input.files[0].name);
                    };
                    reader.readAsDataURL(input.files[0]);
                } else {
                    removeUpload();
                }
            }

            function removeUpload() {
                $('.file-upload-input').replaceWith($('.file-upload-input').clone());
                $('.file-upload-content').hide();
                $('.image-upload-wrap').show();
            }
            $('.image-upload-wrap').bind('dragover', function () {
                $('.image-upload-wrap').addClass('image-dropping');
            });
            $('.image-upload-wrap').bind('dragleave', function () {
                $('.image-upload-wrap').removeClass('image-dropping');
            });

var save_method; //for save method string
var table;
$(document).ready(function() {

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
          "url": "<?php echo site_url('pegawai/ajax_list')?>",
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
            "targets": [ 2 ],
            "render": function(data , type , row){
              if (row[2]!=null) {
                return "<img class=\"myImgx\"  src='<?php echo base_url("assets/foto/pengguna/");?>"+row[2]+"' width=\"100px\" height=\"100px\">";
              }else{
                return "<img class=\"myImgx\"  src='<?php echo base_url("assets/foto/default-150x150.png");?>' width=\"100px\" height=\"100px\">";
              }
            }
          },
        //   { "width": "500px", "targets": 4 },
          {
            "targets": [ -3 ],
            "render": function(data , type , row){
              if (row[9] != 0) {
                return "<span class=\"badge badge-success\" width=\"100px\" height=\"100px\">Selesai</span>";
              }else{
                return "<span class=\"badge badge-danger\" width=\"100px\" height=\"100px\">Belum</span>";
              }
            }
          },
          { 
            "targets": -2 , //last column
            "render": function ( data, type, row ) {
                return "<div class=\"dropdown d-inline mr-2\"><button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Aksi</button><div class=\"dropdown-menu\" x-placement=\"bottom-start\" style=\"text-align:center;\"><a class=\"btn btn-xs btn-outline-primary\" href=\"javascript:void(0)\" title=\"Edit\" onclick=\"edit_kat("+row[2]+")\"><i class=\"fas fa-edit\"></i></a><a class=\"btn btn-xs btn-outline-danger\" href=\"javascript:void(0)\" title=\"Delete\" nama="+row[0]+"  onclick=\"delkat("+row[2]+")\"><i class=\"fas fa-trash\"></i></a></div></div>";
             
                // return "";
           },

            "orderable": false, //set not orderable
          },
          { 
            "targets": [ -1 ], //last column
            "render": function ( data, type, row ) {

              if (row[9] != 0) { 
                return "<a class=\"btn btn-xs btn-outline-primary\"  href=\"javascript:void(0)\" title=\"Konfirmasi\" onclick=\"edit_laporan("+row[9]+")\"><i class=\"fas fa-edit\"></i>Tambah</a><a class=\"btn btn-xs btn-outline-danger\" href=\"javascript:void(0)\" title=\"Delete\"  onclick=\"delete_laporan("+row[9]+")\"><i class=\"fas fa-trash\"></i></a>"
              }else{
               return "<a class=\"btn btn-xs btn-outline-primary\"  href=\"javascript:void(0)\" title=\"Konfirmasi\" onclick=\"edit_laporan("+row[9]+")\"><i class=\"fas fa-edit\"></i>Ubah</a>";
             }

           },

            "orderable": false, //set not orderable
          },

          ],
        });

 //set input/textarea/select event when change value, remove class error and remove text help block 
 $("input").change(function(){
  $(this).parent().parent().removeClass('has-error');
  $(this).next().empty();
  $(this).removeClass('is-invalid');
});
 $("textarea").change(function(){
  $(this).parent().parent().removeClass('has-error');
  $(this).next().empty();
  $(this).removeClass('is-invalid');
});
 $("select").change(function(){
  $(this).parent().parent().removeClass('has-error');
  $(this).next().empty();
  $(this).removeClass('is-invalid');
});

});

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
  }

  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });



function save()
{
    $('#simpan').text('saving...'); //change button text
    $('#simpan').attr('disabled',true); //set button disable 
    var url = "<?php echo site_url('pegawai/save')?>";
    var formdata = new FormData($('#form')[0]);
    $.ajax({
      url : url,
      type: "POST",
      data: formdata,
      dataType: "JSON",
      cache: false,
      contentType: false,
      processData: false,
      success: function(data)
      {

            if(data.status) //if success close modal and reload ajax table
            {
              $("#detail_laporan").attr("hidden",true);
              $("#datatable").attr("hidden",false);
              reload_table();
              Toast.fire({
                icon: 'success',
                title: 'Success!!.'
              });
            }
            else
            {
              for (var i = 0; i < data.inputerror.length; i++) 
              {
                $('[name="'+data.inputerror[i]+'"]').addClass('is-invalid');
                $('[name="'+data.inputerror[i]+'"]').closest('.kosong').append('<span></span>');
                $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]).addClass('invalid-feedback');
              }
            }
            $('#simpan').text('save'); //change button text
            $('#simpan').attr('disabled',false); //set button enable 


          },
          error: function (jqXHR, textStatus, errorThrown)
          {
            alert(textStatus);
            // alert('Error adding / update data');
            Toast.fire({
              icon: 'error',
              title: 'Error!!.'
            });
            $('#simpan').text('save'); //change button text
            $('#simpan').attr('disabled',false); //set button enable 

          }
        });
  }


       
        </script>