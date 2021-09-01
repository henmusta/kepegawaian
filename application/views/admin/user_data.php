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
                            <button type="button" class="btn btn-sm btn-outline-primary" onclick="add_admin()" title="Add Data"><i class="fas fa-plus"></i>Tambah Admin</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="tabeladmin" style="width:100%;">
                                    <thead>
                                        <tr>
                                        <th>Foto</th>
                      <th>User name</th>
                      <th>Full Name</th>
                      <th>Level</th>
                      <th>Is Active</th>
                      <th>Aksi</th>
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
        <div class="modal fade" id="modal_form_admin" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h3 class="modal-title_admin">User Form</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body form">
        <form action="#" id="form_admin" class="form-horizontal" enctype="multipart/form-data">
          <!-- <?php echo form_open_multipart('', array('class' => 'form-horizontal', 'id' => 'form')) ?> -->
          <input type="hidden" value="" name="id_user"/> 
          <div class="card-body">
            <div class="form-group row ">
              <label for="username" class="col-sm-3 col-form-label">User Name</label>
              <div class="col-sm-9 kosong">
                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
              </div>
            </div>
            <div class="form-group row ">
              <label for="full_name" class="col-sm-3 col-form-label">Full Name</label>
              <div class="col-sm-9 kosong">
                <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full Name">
              </div>
            </div>
            
            <div class="form-group row ">
              <label for="password" class="col-sm-3 col-form-label">Password</label>
              <div class="col-sm-9 kosong">
                <input type="password" class="form-control " name="password" id="password" placeholder="Password">
              </div>
            </div>

            <div class="form-group row ">
              <label for="is_active" class="col-sm-3 col-form-label">Is Active</label>
              <div class="col-sm-9 kosong">
                <select class="form-control" name="is_active" id="is_active">
                  <option value=""></option>
                  <option value="Y">Y</option>
                  <option value="N">N</option>
                </select>
              </div>
            </div>
            <div class="form-group row ">
              <label for="level" class="col-sm-3 col-form-label">Level</label>
              <div class="col-sm-9 kosong">
                <select class="form-control" name="level" id="level">
                  <option value="">Pilih Level</option>
                  <?php
                  foreach ($user_level as $level) {?>
                    <option value="<?=$level->id_level;?>"><?=$level->nama_level;?></option>
                  <?php }?>
                </select>
              </div>
            </div>
            <div class="form-group row ">
              <label for="imagefile" class="col-sm-3 col-form-label">Foto</label>
              <div class="col-sm-9 kosong ">
                <img  id="v_image" width="100px" height="100px">
                <input type="file" class="form-control btn-file" onchange="loadFile(event)" name="imagefile" id="imagefile" placeholder="Image" value="UPLOAD">
              </div>
            </div>
          </div>
          <!-- <?php echo form_close(); ?> -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-danger" onclick="batal()" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
        <script>
          var save_method;
          var table;
$(document).ready(function() {
                $('.select2form').select2();
                    //datatables
    table =$("#tabeladmin").DataTable({
      "language": {
        "sEmptyTable": "Data Pengguna Belum Ada"
      },
        "processing": true, 
        "serverSide": true, 
        "order": [], //Initial no order.

        "ajax": {
          "url": "<?php echo site_url('admin/ajax_list')?>",
          "type": "POST"
        },

         "columnDefs": [
         { 
            "targets": [-1], 
            "render": function ( data, type, row ) {
             
              if (row[4]=="N") { 
                return " <a class=\"btn btn-xs btn-outline-primary\"  href=\"javascript:void(0)\" title=\"Edit\" onclick=\"edit_admin("+row[5]+")\"><i class=\"fas fa-edit\"></i></a><a class=\"btn btn-xs btn-outline-danger\" href=\"javascript:void(0)\" title=\"Delete\"  onclick=\"deladmin("+row[5]+")\"><i class=\"fas fa-trash\"></i></a>"
              }else{
               return "<a class=\"btn btn-xs btn-outline-primary\" href=\"javascript:void(0)\" title=\"Edit\" onclick=\"edit_admin("+row[5]+")\"><i class=\"fas fa-edit\"></i></a> <a class=\"btn btn-xs btn-outline-warning\" href=\"javascript:void(0)\" title=\"Reset Password\" onclick=\"riset("+row[5]+")\"><i>Riset Pass</i></a>";
             }
          },
            "orderable": false,  
          },
            {
              "targets": [0],
              "render": function(data , type , row){
                if (row[0]!=null) {
                  return "<img class=\"myImgx\"  src='<?php echo base_url("assets/foto/user/");?>"+row[0]+"' width=\"100px\" height=\"100px\">";
                }else{
                  return "<img class=\"myImgx\"  src='<?php echo base_url("assets/foto/default-150x150.png");?>' width=\"100px\" height=\"100px\">";
                }
              }
            },
          ],
        });
    });


    function riset(id){

swal({
  title: 'Reset password?',
  text: "Pass Default: password123",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, reset it!'
}).then((result) => {
 if (result.value) {
  $.ajax({
    url:"<?php echo site_url('user/reset');?>",
    type:"POST",
    data:"id="+id,
    cache:false,
    dataType: 'json',
    success:function(respone){
      if (respone.status == true) {
        reload_table();
        Swal.fire(
          'Reset!',
          'Your password has been reset.',
          'success'
          );
      }else{
        Toast.fire({
          icon: 'error',
          title: 'Reset password Error!!.'
        });
      }
    }
  });
}else if (result.dismiss === Swal.DismissReason.cancel) {
  Swal(
    'Cancelled',
    'Your imaginary file is safe :)',
    'error'
    )
}
})
}


function add_admin()
{
  save_method = 'add';
    $('#form_admin')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form_admin').modal('show'); // show bootstrap modal
    $('.modal-title_admin').text('Tambah Admin'); // Set Title to Bootstrap modal title
  }

//delete
function deladmin(id){
  swal({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {

    $.ajax({
      url:"<?php echo site_url('admin/delete');?>",
      type:"POST",
      data:"id="+id,
      cache:false,
      dataType: 'json',
      success:function(respone){
        if (respone.status == true) {
          reload_table();
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            );
        }else{
          Toast.fire({
            icon: 'error',
            title: 'Delete Error!!.'
          });
        }
      }
    });

  })
}

  function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
  }

function edit_admin(id){

save_method = 'update';
 $('#form_admin')[0].reset(); // reset form on modals
 $('.form-group').removeClass('has-error'); // clear error class
 $('.help-block').empty(); // clear error string

 //Ajax Load data from ajax
 $.ajax({
   url : "<?php echo site_url('admin/editadmin')?>/" + id,
   type: "GET",
   dataType: "JSON",
   success: function(data)
   {

     $('[name="id_user"]').val(data.id);
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
    
         $('#modal_form_admin').modal('show'); // show bootstrap modal when complete loaded
         $('.modal-title_admin').text('Edit User'); // Set title to Bootstrap modal title

       },
       error: function (jqXHR, textStatus, errorThrown)
       {
         alert('Error get data from ajax');
       }
     });
}


function save()
  {
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;
    if(save_method == 'add') {
      url = "<?php echo site_url('admin/insert')?>";
    } else {
      url = "<?php echo site_url('admin/update')?>";
    }
    var formdata = new FormData($('#form_admin')[0]);
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
              $('#modal_form_admin').modal('hide');
              reload_table();
              swal('Berhasil !', response.message, response.status);
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
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 


          },
          error: function (jqXHR, textStatus, errorThrown)
          {
            alert(textStatus);
            // alert('Error adding / update data');
            Toast.fire({
              icon: 'error',
              title: 'Error!!.'
            });
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

          }
        });
  }

var loadFile = function(event) {
    var image = document.getElementById('v_image');
    image.src = URL.createObjectURL(event.target.files[0]);
  };

  function batal() {
    $('#form_admin')[0].reset();
    reload_table();
    var image = document.getElementById('v_image');
    image.src ="";
  }
            
        </script>