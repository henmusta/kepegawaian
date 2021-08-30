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

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4>Form Pegawai</h4>
                        </div>
                        <div class="card-body">
                            <form id="form_pegawai"   method="POST"
                                            action="<?php echo base_url("kepegawaian/save");?>"
                                            autocomplete="off">
                                        <input type="hidden" name="user[id]"  value="<?= isset($data->id) ? $data->id : NULL;?>">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-3">
                                            <div class="card author-box card-primary">
                                                <div class="card-body">
                                                    <div class="author-box-left">
                                                        <div class="form-group">
                                                            <button
                                                                class="file-upload-btn"
                                                                type="button"
                                                                onclick="$('.file-upload-input').trigger( 'click' )">Tambah Gambar</button>

                                                            <div class="image-upload-wrap">
                                                                <input
                                                                    class="file-upload-input"
                                                                    type='file'
                                                                    name="imagefile" id="imagefile"
                                                                    onchange="readURL(this);"
                                                                    accept="image/*"/>
                                                                <div class="drag-text">
                                                                    <p>Drag dan drop gamber</p>
                                                                </div>
                                                            </div>
                                                            <p class="help-block text-center">Recomended dimention 300x300 pixel and max filesize 2.0MB</p>
                                                            <div class="file-upload-content">
                                                                <img class="file-upload-image" src="#" alt="your image"/>
                                                                <div class="image-title-wrap">
                                                                    <button type="button" onclick="removeUpload()" class="remove-image">Hapus
                                                                        <span class="image-title">Uploaded Image</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div><br>
                                                    </div>
                                                    <div class="author-box-details">
                                                        <div class="author-box-name"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input type="text" class="form-control" id="nip" name="user[nik]" value="<?= isset($data->nik) ? $data->nik : NULL;?>" required="">
                                            <div class=""></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="nik"
                                                name="user[tempat_lahir]"
                                                value="<?= isset($data->tempat_lahir) ? $data->tempat_lahir : NULL;?>"
                                                required="">
                                            <div class=""></div>
                                        </div>
                                        <div class="form-group mb-0">
                                            <label>Alamat Rumah</label>
                                            <textarea class="form-control" required="" id="alamat" name="user[alamat]" ><?= isset($data->alamat) ? $data->alamat : NULL;?></textarea>
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama" name="user[nama]" required="" value="<?= isset($data->nama) ? $data->nama : NULL;?>">
                                            <div class=""></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input
                                                type="text"
                                                class="form-control datepicker"
                                                id="ttl"
                                                name="user[ttl]"
                                                value="<?= isset($data->ttl) ? $data->ttl : NULL;?>"
                                                required="">
                                            <div class=""></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Handphone</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="no_hp"
                                                value="<?= isset($data->no_hp) ? $data->no_hp : NULL;?>"
                                                name="user[no_hp]"
                                                required="">
                                            <div class=""></div>
                                        </div>
                                    </div>

                                    <div></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select
                                                class="form-control select2form"
                                                id="gender"
                                                name="user[gender]"
                                                aria-hidden="true">
                                                <?php if(isset($data->jenis_kelamin) && !empty(isset($data->jenis_kelamin))) : ?>
                                                  <option selected="selected" value="<?= $data->jenis_kelamin;?>"><?= $data->jenis_kelamin;?></option>
                                                <?php endif; ?>
                                                <option value="PRIA">Pria</option>
                                                <option value="PEREMPUAN">Wanita</option>
                                            </select>
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Status Perkawinan</label>
                                                <select
                                                    class="form-control select2form"
                                                    id="status"
                                                    name="user[status]"
                                                    tabindex="-1"
                                                    aria-hidden="true">
                                                    <?php if(isset($data->status) && !empty(isset($data->status))) : ?>
                                                  <option selected="selected" value="<?= $data->status;?>"><?= $data->status;?></option>
                                                <?php endif; ?>
                                                    <option value="Sudah">Menikah</option>
                                                    <option value="Belum">Lajang</option>
                                                </select>
                                                <div class=""></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <select
                                                class="form-control select2form"
                                                id="agama"
                                                name="user[agama]"
                                                tabindex="-1"
                                                aria-hidden="true">
                                                <?php if(isset($data->agama) && !empty(isset($data->agama))) : ?>
                                                  <option selected="selected" value="<?= $data->agama;?>"><?= $data->agama;?></option>
                                                <?php endif; ?>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Hindhu">Hindhu</option>
                                                <option value="Konghucu">Konghucu</option>
                                            </select>
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <div></form>
                                </div>
                                <hr>

                                <div class="card-footer text-right">
                                    <a id="kembali" name="kembali" onclick="goBack()" class="btn btn-secondary">Kembali</a>
                                    <button type="submit" class="btn btn-outline-primary">
                                        <i class="fa fa-save"></i>
                                        Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>

            <script>
               $('.datepicker').flatpickr({
                            altInput: true,altFormat: 'd-m-Y'
                        });

                function goBack() {
                    window
                        .history
                        .back();
                }

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


                var save_method;
                $(document).ready(function () {
                   
                    $('form#form_pegawai').validate({
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
                                          window.history.back();
                                    }, timeout);
                                } else {
                                    swal('Gagal !', response.message, response.status);
                                }
                            }
                        });
                    }
                });
                });
            </script>