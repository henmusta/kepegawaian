<!DOCTYPE html>
<html>

<head>
<link rel="icon" href="<?php echo base_url();?>assets/foto/logo/<?php echo $aplikasi->logo; ?>">
  <title><?php echo $aplikasi->title; ?> | Login</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/login/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/izitoast/css/iziToast.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <img class="wave" src="<?= base_url(); ?>assets/login/img/side.png">
  <div class="container">
    <div class="img">
      <img src="<?= base_url(); ?>assets/login/img/log.svg">
    </div>
    <div class="login-content">
      <form id="logForm" class="FormLog">
        <img style="text-align:center;"src="<?php echo base_url();?>assets/foto/logo/<?php echo $aplikasi->logo; ?>">
        <h2 class="title"><?php echo $aplikasi->nama_aplikasi; ?></h2>
        <div class="form-group">
          <label>Username</label>
          <div class="input-group kosong">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-user"></i>
              </div>
            </div>
            <input type="text" class="form-control" id="username" name="username" required="" autocomplete="off">
          </div>
        </div>
        <div class="form-group">
          <label style="text-align:left;">password</label>
          <div class="input-group kosong">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-lock"></i>
              </div>
            </div>
            <input type="password" class="form-control" id="password" name="password" autocomplete="off" required>

          </div>
          <div class="">

          </div>
        </div>


        <button type="submit" id="login" class="btn btn-primary float-right btn-inline mb-2"><span id="logText"></button>
      </form>
    </div>
  </div>
  <script src="<?= base_url(); ?>assets/login/js/main.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/modules/jquery-validation/jquery.validate.min.js"></script>
  <script src="<?php echo base_url();?>assets/modules/jquery-validation/additional-methods.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/izitoast/js/iziToast.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script>

$(document).ready(function(){
		$('[name=Email]').focus();
		$('#logText').html('Login');
		$('#logForm').submit(function(e){
      $('.form-control').attr('readOnly',true);
			$('.btn').attr('disabled',true);
			e.preventDefault();
			$('#logText').html('Checking...');

      var login = function(){
				$.ajax({
					url: "login/login",
					type: "POST",
					data: $('#logForm').serialize(),
					dataType: "JSON",
					success:function(response)
					{
					
						$('#logText').html('Login');
						if(response.error)
						{
						  iziToast.error({
                title: 'Gagal!',
                message: response.pesan,
                position: 'topRight'
              });
					
							$('.form-control').attr('readOnly',false);
							$('.btn').attr('disabled',false);
						}
						else
						{
						  iziToast.success({
                title: 'Sukses!',
                message: 'Berhasil Login',
                position: 'topRight'
              });
				
							$('#logForm')[0].reset();
							setTimeout(function(){
								location.reload();
							}, 3000);
						}
					},
					error: function (jqXHR, textStatus, errorThrown)
            		{
            			alert('Error Connection..');
            		}
				});
			};
			setTimeout(login, 1000);
  	});
  });



   
  </script>

</body>


</html>