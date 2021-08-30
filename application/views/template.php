

<!-- header -->
<?php 
$this->load->view('template/header') 
?>
<!-- end header -->

<style>

.select2 {
width:100%!important;
}
  .tabbable .nav-tabs {
    overflow-x: auto;
    overflow-y: hidden;
    flex-wrap: nowrap;
  }

  .tabbable .nav-tabs .nav-link {
    white-space: nowrap;
  }

  body {
    font-family: sans-serif;
    background-color: #eeeeee;
  }

  .file-upload {
    background-color: #ffffff;
    margin: 0 auto;
    padding: 20px;
  }

  .file-upload-btn {
    width: 100%;
    margin: 0;
    color: #fff;
    background: #6777EF;
    border: none;
    padding: 10px;
    border-radius: 4px;
    border-bottom: 4px solid #15824B;
    transition: all .2s ease;
    outline: none;
    text-transform: uppercase;
    font-weight: 700;
  }

  .file-upload-btn:hover {
    background: #1AA059;
    color: #ffffff;
    transition: all .2s ease;
    cursor: pointer;
  }

  .file-upload-btn:active {
    border: 0;
    transition: all .2s ease;
  }

  .file-upload-content {
    display: none;
    text-align: center;
  }

  .file-upload-input {
    position: absolute;
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    outline: none;
    opacity: 0;
    cursor: pointer;
  }

  .image-upload-wrap {
    margin-top: 20px;
    border: 4px dashed #6777EF;
    position: relative;
  }

  .image-dropping,
  .image-upload-wrap:hover {
    background-color: #6777EF;
    border: 4px dashed #ffffff;
  }

  .image-title-wrap {
    padding: 0 15px 15px 15px;
    color: #222;
  }

  .drag-text {
    text-align: center;
  }

  .drag-text h3 {
    font-weight: 100;
    text-transform: uppercase;
    color: #15824B;
    padding: 60px 0;
  }

  .file-upload-image {
    max-height: 200px;
    max-width: 200px;
    margin: auto;
    padding: 20px;
  }

  .remove-image {
    width: 100%;
    margin: 0;
    color: #fff;
    background: #cd4535;
    border: none;
    padding: 2px;
    border-radius: 4px;
    border-bottom: 4px solid #b02818;
    transition: all .2s ease;
    outline: none;
    font-weight: 700;
  }

  .remove-image:hover {
    background: #c13b2a;
    color: #ffffff;
    transition: all .2s ease;
    cursor: pointer;
  }

  .remove-image:active {
    border: 0;
    transition: all .2s ease;
  }
</style>

<!-- layout -->
<?php 
$this->load->view('template/layout') 
?>
<!-- end layout -->

<!-- sidebar -->
<?php 
$this->load->view('template/sidebar') 
?>
<!-- end sidebar -->


<div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h3 class="modal-title">Person Form</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body form">
        <form id="form" class="form-horizontal" method="POST"
                                            action="<?php echo base_url("notification/save/");?>"
                                            autocomplete="off">
          <input type="hidden" value="" name="pk" />
          <input type="hidden" value="" name="pk_notif" />
          <div class="card-body">
            <div class="form-group row ">
              <label for="" class="col-sm-3 col-form-label">Pangkat Sekarang</label>
              <div class="col-sm-9 kosong">
                <input type="text" class="form-control" name="pangkat" id="pangskat"
                  placeholder="Pangkat Sekarang">
                <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group row ">
              <label for="i" class="col-sm-3 col-form-label">Gol Ruang</label>
              <div class="col-sm-9 kosong">
                <input type="text" class="form-control" name="gol" id="gol"
                  placeholder="Gol Ruang">
                <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group row ">
              <label for="i" class="col-sm-3 col-form-label">TMT Pangkat</label>
              <div class="col-sm-9 kosong">
                <input type="text" class="form-control datetmt" name="tmt" id="tmt"
                  placeholder="TMT Pangkat">
                <span class="help-block"></span>
              </div>
            </div>

            <div class="form-group row ">
              <label for="i" class="col-sm-3 col-form-label">TMT Pangkat</label>
              <div class="col-sm-9 kosong">
                                            <select
                                                class="form-control select2form"
                                                id="ket"
                                                name="ket"
                                                tabindex="-1"
                                                aria-hidden="true" width="100%" >
                                                
                                                <option value="REGULER">REGULER</option>
                                                <option value="CPNS">CPNS</option>
                                                <option value="PILIHAN">PILIHAN</option>
                                               
                                            </select>
                                            <div class=""></div>
              </div>
            </div>
          </div>
       
      </div>
      <div class="modal-footer">

                                                <button type="submit" class="btn btn-outline-primary">
                                                    <i class="fa fa-save"></i>
                                                    Simpan</button>
                                    
      </div>
       </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>


<?php 
$this->load->view('template/page_js') 
?>

<!-- Main Content -->
<?php echo $contents; ?>
<!-- End main Content -->



<!-- header -->
<?php 
$this->load->view('template/footer') 
?>
<!-- end header -->

<script type="text/javascript">
  $(document).ready(function () {
    notificationStream(

    );
    $('.datetmt').daterangepicker({
    locale: {
      format: 'DD-MM-YYYY'
    },
    singleDatePicker: true,
    showDropdowns: true
});

$('.select2form').select2({
 
});

    $('form#form').validate({
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
                                        $('#modal_form').modal('hide');
                                        location.reload();
                                    }, timeout);
                                } else {
                                    swal('Gagal !', response.message, response.status);
                                }
                            }
                        });
                    }
                });
  });





  var notif = $('#notif_container');
  var notif_count = notif.find('#notif_count');
  var notif_ul = notif.find('#notif_ul');

  var last_notif_id = 0;

  var is_new_notif = false;

  function notificationStream(id) {
    $.ajax({
      url: "/kepegawaian/notification",
      dataType: 'json',

    }).done(function (data) {
      if (0 == notif_ul.children().length) {
        if (0 != data.length) {
          is_new_notif = true;
          last_notif_id = data[0].id;
          append_li(data);
        }
      } else {
        // ada notifikasi baru
        if (0 != data.length && last_notif_id < data[0].id) {
          is_new_notif = true;
          last_notif_id = data[0].id;
          append_li(data);
        }
      }
    });
  }

  // menambahkan li notif baru dengan mengiterasi variabel data
  function append_li(data) {
    if (1 < data.length)
      notif_ul.empty();

    var new_nodes = '';
    var url = '<?php echo base_url("assets/foto/pegawai/"); ?>';
    $.each(data, function (index, obj) {

      new_nodes += '' +
        '<a  onclick=edit_notif(' + obj.pk + ',' + obj.id_notif + ',"' + obj.nama + '") class="dropdown-item dropdown-item-unread">' +
        '<div class="dropdown-item-avatar">' +
        '<img alt="image" width="40" height="50" src="' + url + obj.image + '" class="rounded-circle">' +
        '</div>' +
        '<div class="dropdown-item-desc">' + obj.nama +
        '<div class="time text-primary">' + obj.waw +
        '</div>' +
        '</div>' +
        '</a>'
    });

    notif_ul.prepend(new_nodes);
    notif_count.text(data.length);


    $("p").addClass("myClass yourClass");

    // notif dropdown hanya memuat maks 8
    if (8 < notif_ul.children().length) {
      // hitung selisih
      var deleted_elements = notif_ul.children().length - 8;
      // hapus selisih
      for (var i = 0; i < deleted_elements; i++) {
        notif_ul.children().last().remove();
      }
    }
  }

  // perbarui last_notif di tabel user ketika menekan notifikasi
  $('#notif_anchor').click(function (event) {
    // ubah jumlah notifikasi menjadi 0
    notif_count.text(0);
    if (is_new_notif) {
      $.ajax({
        url: "/kepegawaian/user/update_last_notif",
        dataType: 'json',
        data: {
          'notif_id': notif_ul.children()[0].dataset['notifId']
        }
      });
      is_new_notif = false;
    }

  });


  function edit_notif($pk, $pk_notif, $name) {
    $('#form')[0].reset(); 
    $('#modal_form').modal('show'); 
    $('.modal-title').text($name); 

    $('[name="pk"]').val($pk);
    $('[name="pk_notif"]').val($pk_notif);
  }
</script>