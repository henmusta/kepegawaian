

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
          $('#beep').addClass('beep'); 
          $('#side_not').addClass('beep beep-sidebar');
        }
      } else {
        // ada notifikasi baru
        if (0 != data.length && last_notif_id < data[0].id) {
          is_new_notif = true;
          last_notif_id = data[0].id;
          append_li(data);
          $('#beep').removeClass('beep'); 
          $('#side_not').removeClass('beep beep-sidebar');
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
        '<a  onclick=edit_notif(' + obj.pk + ',' + obj.id_notif + ') class="dropdown-item dropdown-item-unread">' +
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
        // $('#beep').addClass('beep'); 
      });
      is_new_notif = false;
    }

  });

function edit_user(id){
save_method = 'update';
 $('#form')[0].reset(); // reset form on modals
 $('.form-group').removeClass('has-error'); // clear error class
 $('.help-block').empty(); // clear error string

 //Ajax Load data from ajax
 $.ajax({
   url : "<?php echo site_url('user/editadmin')?>/" + id,
   type: "GET",
   dataType: "JSON",
   success: function(data)
   {

     $('[name="id_user"]').val(data.id_user);
     $('[name="username"]').val(data.username);
     $('[name="full_name"]').val(data.full_name);
     $('[name="is_active"]').val(data.is_active);
     $('[name="level"]').val(data.id_level);
     
     if (data.image==null) {
       var image = "<?php echo base_url('assets/foto/user/default.png')?>";
       $("#v_image").attr("src",image);
     }else{
      var image = "<?php echo base_url('assets/foto/user/')?>";
      $("#v_image").attr("src",image+data.image);
    }
    
         $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
         $('.modal-title').text('Edit User'); // Set title to Bootstrap modal title

       },
       error: function (jqXHR, textStatus, errorThrown)
       {
         alert('Error get data from ajax');
       }
     });
}


  function edit_notif($pk, $pk_notif) {
    $('#form')[0].reset(); 
    $('#modal_form').modal('show'); 
    $('.modal-title').text('Tambah Pangkat Baru'); 

    $('[name="pk"]').val($pk);
    $('[name="pk_notif"]').val($pk_notif);
  }
</script>