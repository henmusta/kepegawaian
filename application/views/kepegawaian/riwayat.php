<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tab</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="#">Dashboard</a>
                </div>
                <div class="breadcrumb-item">
                    <a href="#">Components</a>
                </div>
                <div class="breadcrumb-item">Tab</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card author-box card-primary">
                        <div class="text-right" style="padding:15px;">
                            <a id="kembali" name="kembali" href="<?php echo base_url();?>kepegawaian/form/<?= isset($data->id) ? $data->id : NULL;?>" class="btn btn-secondary">EDIT</a>
                            <button type="submit" class="btn btn-outline-primary">
                                <i class="fa fa-print"></i>
                                Print</button>
                        </div><hr>
                        <div class="card-body">
                            <div class="author-box-left border" style="padding:15px;">

                            <?php if(isset($data->image)) : ?>
                                <img
                                    alt="image"
                                    src="<?php echo base_url("assets/foto/pegawai/");?><?php echo $data->image?>"
                                    width="150"
                                    height="200">
                                    <?php else : ?>
                                        <img
                                    alt="image"
                                    src="http://localhost/biodata/assets/img/avatar/avatar-1.png"
                                    class="rounded-circle author-box-picture"
                                    width="200"
                                    height="150">
                          
                            <?php endif; ?>
                              
                                <div class="clearfix"></div><br>
                                <h5><?= isset($data->nama) ? $data->nama : NULL;?></h5>
                                <p><?= isset($data->nik) ? $data->nik : NULL;?></p>
                            </div>
                            <div class="author-box-details">
                                <div class="author-box-description" style="margin-top:0px">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div>
                                                <p class="font-weight-bold">
                                                    <u>INFORMASI UMUM</u>
                                                </p>
                                            </div>
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>No Handphone</th>
                                                        <td width="0%">:</td>
                                                        <td><?= isset($data->no_hp) ? $data->no_hp : NULL;?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tanggal Lahir</th>
                                                        <td width="0%">:</td>
                                                        <td><?= isset($data->ttl) ? $data->ttl : NULL;?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Pernikahan</th>
                                                        <td width="0%">:</td>
                                                        <td><?= isset($data->status) ? $data->status : NULL;?>
                                                            Menikah</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jenis Kelamin</th>
                                                        <td width="0%">:</td>
                                                        <td><?= isset($data->jenis_kelamin) ? $data->jenis_kelamin : NULL;?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tempat Lahir</th>
                                                        <td width="0%">:</td>
                                                        <td><?= isset($data->tempat_lahir) ? $data->tempat_lahir : NULL;?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Agama</th>
                                                        <td width="0%">:</td>
                                                        <td><?= isset($data->agama) ? $data->agama : NULL;?></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="vertical-align: top;text-align: left;">Alamat</th>
                                                        <td width="0%" style="vertical-align: top;text-align: left;">:</td>
                                                        <td><?= isset($data->alamat) ? $data->alamat : NULL;?></td>
                                                    </tr>
                                                    <tr>
                                                        <th width="40%" style="vertical-align: top;text-align: left;">Pendidikan Terakhir</th>
                                                        <td width="0%" style="vertical-align: top;text-align: left;">:</td>
                                                        <td>S1 Teknik Informatika</td>
                                                    </tr>
                                                </thead>
                                            </table>

                                        </div>
                                        <div class="col-sm-6">
                                            <div>
                                                <p class="font-weight-bold">
                                                    <u>INFORMASI JABATAN DAN PANGKAT</u>
                                                </p>
                                            </div>
                                            <table>
                                                <thead>
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Pangkat Terakhir</th>
                                                                <td width="0%">:</td>
                                                                <td><?= isset($data->no_hp) ? $data->no_hp : NULL;?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>TMT Pangkat Terakhir</th>
                                                                <td width="0%">:</td>
                                                                <td><?= isset($data->ttl) ? $data->ttl : NULL;?></td>
                                                            </tr>
                                                            <tr>
                                                                <th style="vertical-align: top;text-align: left;">Jabatan Sekarang</th>
                                                                <td width="0%" style="vertical-align: top;text-align: left;">:</td>
                                                                <td><?= isset($data->status) ? $data->status : NULL;?></td>
                                                            </tr>
                                                            <tr>
                                                                <th style="vertical-align: top;text-align: left;">TMT Jabatan Sekarang</th>
                                                                <td width="0%" style="vertical-align: top;text-align: left;">:</td>
                                                                <td><?= isset($data->jenis_kelamin) ? $data->jenis_kelamin : NULL;?></td>
                                                            </tr>
                                                        </thead>
                                                    </table>

                                                </thead>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Riwayat</h4>
                        </div>
                        <div class="card-body">

                            <div class="container-fluid">
                                <nav class="tabbable">
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a
                                            class="nav-link active"
                                            id="kepangkatan-tab2"
                                            data-toggle="tab"
                                            href="#kepangkatan"
                                            role="tab"
                                            aria-controls="kepengakatan"
                                            aria-selected="true">Kepangkatan</a>
                                        <a
                                            class="nav-link"
                                            id="jabatan-tab2"
                                            data-toggle="tab"
                                            href="#jabatan"
                                            role="tab"
                                            aria-controls="jabatan"
                                            aria-selected="false">Jabatan</a>
                                        <a
                                            class="nav-link"
                                            id="pendidikan-tab2"
                                            data-toggle="tab"
                                            href="#pendidikan"
                                            role="tab"
                                            aria-controls="pendidikan"
                                            aria-selected="false">Pendidikan Umum</a>
                                        <a
                                            class="nav-link"
                                            id="struktural-tab2"
                                            data-toggle="tab"
                                            href="#struktural"
                                            role="tab"
                                            aria-controls="struktutal"
                                            aria-selected="false">Diklat Struktural</a>
                                        <a
                                            class="nav-link"
                                            id="fungsional-tab2"
                                            data-toggle="tab"
                                            href="#fungsional"
                                            role="tab"
                                            aria-controls="fungsional"
                                            aria-selected="false">Diklat Fungsional</a>
                                        <a
                                            class="nav-link"
                                            id="teknis-tab2"
                                            data-toggle="tab"
                                            href="#teknis"
                                            role="tab"
                                            aria-controls="teknis"
                                            aria-selected="false">Diklat Teknis</a>
                                        <a
                                            class="nav-link"
                                            id="penghargaan-tab2"
                                            data-toggle="tab"
                                            href="#penghargaan"
                                            role="tab"
                                            aria-controls="penghargaan"
                                            aria-selected="false">Jasa/Penghargaan/Tanda Penghargaan</a>
                                        <a
                                            class="nav-link"
                                            id="hukuman-tab2"
                                            data-toggle="tab"
                                            href="#hukuman"
                                            role="tab"
                                            aria-controls="hukuman"
                                            aria-selected="false">Hukuman Disiplin</a>
                                        <a
                                            class="nav-link"
                                            id="prestasi-tab2"
                                            data-toggle="tab"
                                            href="#prestasi"
                                            role="tab"
                                            aria-controls="prestasi"
                                            aria-selected="false">Penilaian Prestasi Kerja Dan Prilaku Kerja</a>
                                        <a
                                            class="nav-link"
                                            id="keluarga-tab2"
                                            data-toggle="tab"
                                            href="#keluarga"
                                            role="tab"
                                            aria-controls="keluarga"
                                            aria-selected="false">Riwayat Keluarga</a>
                                    </div>
                                </nav>
                                <div class="tab-content tab-bordered" id="myTab3Content">
                                    <div
                                        class="tab-pane fade show active"
                                        id="kepangkatan"
                                        role="tabpanel"
                                        aria-labelledby="kepangkatan-tab2">
                                        <form
                                            id="form_pangkat"
                                            method="POST"
                                            action="<?php echo base_url("riwayat/save/");?>"
                                            autocomplete="off">
                                            <input type="hidden" id="pk" name="pk" value="<?= isset($pk) ? $pk : NULL;?>">
                                            <input type="hidden" id="jenis" name="jenis" value="pangkat">
                                            <table id="table-kepangkatan" class="table table-sm mt-4" width="100%">
                                                <thead>
                                                    <tr>
                                                        <!-- <th>No</th> -->
                                                        <th>Pangkat</th>
                                                        <th>Gol. Ruang</th>
                                                        <th>TMT Pangkat</th>
                                                        <th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>
                                                            <div class="btn-group" id="additem">
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-delete-row">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-add-row">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <div class="text-right">
                                                <a id="kembali" name="kembali" onclick="goBack()" class="btn btn-secondary">Selesai</a>
                                                <button type="submit" class="btn btn-outline-primary">
                                                    <i class="fa fa-save"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="jabatan"
                                        role="tabpanel"
                                        aria-labelledby="jabatan-tab2">

                                        <form
                                            id="form_jabatan"
                                            method="POST"
                                            action="<?php echo base_url("riwayat/save/");?>"
                                            autocomplete="off">
                                            <input type="hidden" id="pk" name="pk" value="<?= isset($pk) ? $pk : NULL;?>">
                                            <input type="hidden" id="jenis" name="jenis" value="jabatan">
                                            <table id="table-jabatan" class="table table-sm mt-4" width="100%">
                                                <thead>
                                                    <tr>
                                                        <!-- <th>No</th> -->
                                                        <th>Pangkat</th>
                                                        <th>Eselon</th>
                                                        <th>TMT Jabatan</th>

                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>
                                                            <div class="btn-group" id="additem">
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-delete-row">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-add-row">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <div class="text-right">
                                                <a id="kembali" name="kembali" onclick="goBack()" class="btn btn-secondary">Selesai</a>
                                                <button type="submit" class="btn btn-outline-primary">
                                                    <i class="fa fa-save"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="pendidikan"
                                        role="tabpanel"
                                        aria-labelledby="pendidikan-tab2">
                                        <form
                                            id="form_pendidikan"
                                            method="POST"
                                            action="<?php echo base_url("riwayat/save/");?>"
                                            autocomplete="off">
                                            <input type="hidden" id="pk" name="pk" value="<?= isset($pk) ? $pk : NULL;?>">
                                            <input type="hidden" id="jenis" name="jenis" value="pendidikan">
                                            <table id="table-pendidikan" class="table table-sm mt-4" width="100%">
                                                <thead>
                                                    <tr>
                                                        <!-- <th>No</th> -->
                                                        <th>Tingkat Pendidikan</th>
                                                        <th>Jurusan</th>
                                                        <th>Nama Sekolah</th>
                                                        <th>Tanggal Lulus</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>
                                                            <div class="btn-group" id="additem">
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-delete-row">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-add-row">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <div class="text-right">
                                                <a id="kembali" name="kembali" onclick="goBack()" class="btn btn-secondary">Selesai</a>
                                                <button type="submit" class="btn btn-outline-primary">
                                                    <i class="fa fa-save"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="struktural"
                                        role="tabpanel"
                                        aria-labelledby="struktural-tab2">
                                        <form
                                            id="form_struktural"
                                            method="POST"
                                            action="<?php echo base_url("riwayat/save/");?>"
                                            autocomplete="off">
                                            <input type="hidden" name="pk" value="<?= isset($pk) ? $pk : NULL;?>">
                                            <input type="hidden" name="jenis" value="STRUKTURAL">
                                            <table id="table-struktural" class="table table-sm mt-4" width="100%">
                                                <thead>
                                                    <tr>
                                                        <!-- <th>No</th> -->
                                                        <th>Nama Diklat</th>
                                                        <th>Tahun Lulus</th>
                                                        <th>Tempat Diklat</th>
                                                        <th>Penyelenggara</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>
                                                            <div class="btn-group" id="additem">
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-delete-row">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-add-row">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <div class="text-right">
                                                <a id="kembali" name="kembali" onclick="goBack()" class="btn btn-secondary">Selesai</a>
                                                <button type="submit" class="btn btn-outline-primary">
                                                    <i class="fa fa-save"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="fungsional"
                                        role="tabpanel"
                                        aria-labelledby="fungsional-tab2">

                                        <form
                                            id="form_fungsional"
                                            method="POST"
                                            action="<?php echo base_url("riwayat/save/");?>"
                                            autocomplete="off">
                                            <input type="hidden" name="pk" value="<?= isset($pk) ? $pk : NULL;?>">
                                            <input type="hidden" name="jenis" value="FUNGSIONAL">
                                            <table id="table-fungsional" class="table table-sm mt-4" width="100%">
                                                <thead>
                                                    <tr>
                                                        <!-- <th>No</th> -->
                                                        <th>Nama Diklat</th>
                                                        <th>Tahun Lulus</th>
                                                        <th>Tempat Diklat</th>
                                                        <th>Penyelenggara</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>
                                                            <div class="btn-group" id="additem">
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-delete-row">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-add-row">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <div class="text-right">
                                                <a id="kembali" name="kembali" onclick="goBack()" class="btn btn-secondary">Selesai</a>
                                                <button type="submit" class="btn btn-outline-primary">
                                                    <i class="fa fa-save"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="teknis"
                                        role="tabpanel"
                                        aria-labelledby="diklat-tab2">
                                        <form
                                            id="form_teknis"
                                            method="POST"
                                            action="<?php echo base_url("riwayat/save/");?>"
                                            autocomplete="off">
                                            <input type="hidden" name="pk" value="<?= isset($pk) ? $pk : NULL;?>">
                                            <input type="hidden" name="jenis" value="TEKNIS">
                                            <table id="table-teknis" class="table table-sm mt-4" width="100%">
                                                <thead>
                                                    <tr>
                                                        <!-- <th>No</th> -->
                                                        <th>Nama Diklat</th>
                                                        <th>Tahun Lulus</th>
                                                        <th>Tempat Diklat</th>
                                                        <th>Penyelenggara</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>
                                                            <div class="btn-group" id="additem">
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-delete-row">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-add-row">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <div class="text-right">
                                                <a id="kembali" name="kembali" onclick="goBack()" class="btn btn-secondary">Selesai</a>
                                                <button type="submit" class="btn btn-outline-primary">
                                                    <i class="fa fa-save"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="penghargaan"
                                        role="tabpanel"
                                        aria-labelledby="penghargaan-tab2">
                                        <form
                                            id="form_penghargaan"
                                            method="POST"
                                            action="<?php echo base_url("riwayat/save/");?>"
                                            autocomplete="off">
                                            <input type="hidden" name="pk" value="<?= isset($pk) ? $pk : NULL;?>">
                                            <input type="hidden" name="jenis" value="penghargaan">
                                            <table id="table-penghargaan" class="table table-sm mt-4" width="100%">
                                                <thead>
                                                    <tr>
                                                        <!-- <th>No</th> -->
                                                        <th>Nama Tanda Jasa</th>
                                                        <th>Asal Perolehan</th>
                                                        <th>Tahun</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>
                                                            <div class="btn-group" id="additem">
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-delete-row">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-add-row">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <div class="text-right">
                                                <a id="kembali" name="kembali" onclick="goBack()" class="btn btn-secondary">Selesai</a>
                                                <button type="submit" class="btn btn-outline-primary">
                                                    <i class="fa fa-save"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="hukuman"
                                        role="tabpanel"
                                        aria-labelledby="hukuman-tab2">
                                        <form
                                            id="form_hukuman"
                                            method="POST"
                                            action="<?php echo base_url("riwayat/save/");?>"
                                            autocomplete="off">
                                            <input type="hidden" name="pk" value="<?= isset($pk) ? $pk : NULL;?>">
                                            <input type="hidden" name="jenis" value="hukuman">
                                            <table id="table-hukuman" class="table table-sm mt-4" width="100%">
                                                <thead>
                                                    <tr>
                                                        <!-- <th>No</th> -->
                                                        <th>Jenis Hukuman</th>
                                                        <th>Nama Hukuman</th>
                                                        <th>TMT</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>
                                                            <div class="btn-group" id="additem">
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-delete-row">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-add-row">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <div class="text-right">
                                                <a id="kembali" name="kembali" onclick="goBack()" class="btn btn-secondary">Selesai</a>
                                                <button type="submit" class="btn btn-outline-primary">
                                                    <i class="fa fa-save"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="prestasi"
                                        role="tabpanel"
                                        aria-labelledby="prestasi-tab2">
                                        <form
                                            id="form_prestasi"
                                            method="POST"
                                            action="<?php echo base_url("riwayat/save/");?>"
                                            autocomplete="off">
                                            <input type="hidden" name="pk" value="<?= isset($pk) ? $pk : NULL;?>">
                                            <input type="hidden" name="jenis" value="prestasi">
                                            <table id="table-prestasi" class="table table-sm mt-4" width="100%">
                                                <thead>
                                                    <tr>
                                                        <!-- <th>No</th> -->
                                                        <th>Tahun</th>
                                                        <th>Nilai Skp</th>
                                                        <th>Nilai Perilaku Kerja</th>
                                                        <th>Nilai Prestasi Kerja</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>
                                                            <div class="btn-group" id="additem">
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-delete-row">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-add-row">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <div class="text-right">
                                                <a id="kembali" name="kembali" onclick="goBack()" class="btn btn-secondary">Selesai</a>
                                                <button type="submit" class="btn btn-outline-primary">
                                                    <i class="fa fa-save"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="keluarga"
                                        role="tabpanel"
                                        aria-labelledby="keluarga-tab2">
                                        <form
                                            id="form_keluarga"
                                            method="POST"
                                            action="<?php echo base_url("riwayat/save/");?>"
                                            autocomplete="off">
                                            <input type="hidden" name="pk" value="<?= isset($pk) ? $pk : NULL;?>">
                                            <input type="hidden" name="jenis" value="keluarga">
                                            <table id="table-keluarga-ibu" class="table table-sm mt-4" width="100%">
                                                <thead>
                                                    <tr>
                                                        <!-- <th>No</th> -->
                                                        <th>Nama</th>
                                                        <th>Tanggal Lahir</th>
                                                        <th>Pekerjaan</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>
                                                            <div class="btn-group" id="additem">
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-delete-row">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-add-row">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                            </table><br>
                                            <table id="table-keluarga-ayah" class="table table-sm mt-4" width="100%">
                                                <thead>
                                                    <tr>
                                                        <!-- <th>No</th> -->
                                                        <th>Nama</th>
                                                        <th>Tanggal Lahir</th>
                                                        <th>Pekerjaan</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>
                                                            <div class="btn-group" id="additem">
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-delete-row">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-add-row">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                            </table><br>
                                            <table id="table-keluarga-pasutri" class="table table-sm mt-4" width="100%">
                                                <thead>
                                                    <tr>
                                                        <!-- <th>No</th> -->
                                                        <th>Nama Istri/Suami</th>
                                                        <th>Tanggal Lahir</th>
                                                        <th>Tanggal Pernikahan</th>
                                                        <th>Pekerjaan</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>
                                                            <div class="btn-group" id="additem">
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-delete-row">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-add-row">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                            </table><br>
                                            <table id="table-keluarga-anak" class="table table-sm mt-4" width="100%">
                                                <thead>
                                                    <tr>
                                                        <!-- <th>No</th> -->
                                                        <th>Nama Anak</th>
                                                        <th>Tanggal Lahir</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>Pekerjaan</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>
                                                            <div class="btn-group" id="additem">
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-delete-row">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-sm btn-outline-secondary btn-add-row">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <div class="text-right">
                                                <a id="kembali" name="kembali" onclick="goBack()" class="btn btn-secondary">Selesai</a>
                                                <button type="submit" class="btn btn-outline-primary">
                                                    <i class="fa fa-save"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $riwayat = isset($data) ? $data : (object)[];?>
<script type="text/javascript">
    function goBack() {
        window
            .history
            .back();
    }
    var table;
    $(function () {
        'use strict'
        $(document).ready(function () {
            const tablepangkat = $('#table-kepangkatan').DataTable({
                paging: false, searching: false, ordering: false, info: false, data: <?= isset($data->rincian_pangkat) ? json_encode($data->rincian_pangkat) : '[]' ;?>, columns : [ {
                    data: 'pangkat',
                    render: function (columnData, type, rowData, meta) {
                        return String(
                            `
                                <input id="kpn_pangkat` + meta.row +
                            `" class="form-control" value="` + columnData +
                            `" name="kepangkatan[` + meta.row +
                            `][pangkat]" data-column="pangkat" required="">
                            `
                        ).trim();
                    }
                }, {
                    data: 'gol',
                    width: '150px',
                    render: function (columnData, type, rowData, meta) {
                        return String(
                            `
                                <input id="kpn_gol` + meta.row +
                            `" class="form-control" value="` + columnData +
                            `" name="kepangkatan[` + meta.row +
                            `][gol]" data-column="gol" required="">
                            `
                        ).trim();
                    }
                }, {
                    data: 'tmt',
                    width: '150px',
                    render: function (columnData, type, rowData, meta) {
                        return String(
                            `
                                <input id="kpn_tmt` + meta.row +
                            `" class="form-control datepicker" value="` + columnData +
                            `" name="kepangkatan[` + meta.row +
                            `][tmt]" data-column="tmt">
                            `
                        ).trim();
                    }
                }, {
                    data: 'ket',
                    width: '150px',
                    render: function (columnData, type, rowData, meta) {
                        return String(
                            `
                                <select class="form-control select2-ket" data-name="ket" required="required" name="kepangkatan[` +
                            meta.row +
                            `][ket]">
                                    <option value="REGULER" ` + (
                                    columnData == 'REGULER'
                                        ? `selected="selected"`
                                        : ``
                                ) +
                            `>REGULER</option>
                                    <option value="PILIHAN" ` + (
                                    columnData == 'PILIHAN'
                                        ? `selected="selected"`
                                        : ``
                                ) +
                            `>PILIHAN</option>
                                    <option value="CPNS" ` + (
                                    columnData == 'CPNS'
                                        ? `selected="selected"`
                                        : ``
                                ) +
                            `>CPNS</option>
                                </select>
                            `
                        ).trim();
                    }
                }
                ], initComplete : function(settings, json){
                    let api = this.api();
                    $(api.table().footer())
                        .find('.btn-add-row')
                        .click(function () {
                            api
                                .row
                                .add({pangkat: '', gol: '', tmt: '', ket: ''})
                                .draw();
                        });
                    $(api.table().footer())
                        .find('.btn-delete-row')
                        .click(function () {
                            api
                                .row(':last')
                                .remove()
                                .draw();
                        });
                }, createdRow : function( row, data, index ){
                    $(row)
                        .find('.datepicker')
                        .datepicker({
                            // locale: {
                            //     format: 'DD-MM-YYYY'
                            // },
                            // singleDatePicker: true,
                            // showDropdowns: true
                        });

                    $(row)
                        .find('.select2-ket')
                        .select2({width: '100%'});
                }, rowCallback : function( row, data, displayNum, displayIndex, index ){},
                drawCallback: function (settings) {}
                }); const tablejabatan = $('#table-jabatan').DataTable({
                    paging: false,
                    searching: false,
                    ordering: false,
                    info: false,
                    data: <?= isset($data->rincian_jabatan) ? json_encode($data->rincian_jabatan) : '[]' ;?>, columns : [ {
                        data: 'jabatan',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `
							<input id="jbt_pangkat` + meta.row +
                                `" class="form-control" value="` + columnData +
                                `" name="jabatan[` + meta.row +
                                `][jabatan]" data-column="jabatan" required="">
						`
                            ).trim();
                        }
                    }, {
                        data: 'eselon',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `
							<input id="jbt_eselon` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="jabatan[` + meta.row +
                                `][eselon]" data-column="eselon">
						`
                            ).trim();
                        }
                    }, {
                        data: 'tmt_jabatan',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `
                            <input id="jbt_tmt` + meta.row +
                                `" class="form-control datepicker" value="` + columnData +
                                `" name="jabatan[` + meta.row +
                                `][tmt]" data-column="eselon">
						`
                            ).trim();
                        }
                    }
                    ], initComplete : function(settings, json){
                        let api = this.api();
                        $(api.table().footer())
                            .find('.btn-add-row')
                            .click(function () {
                                api
                                    .row
                                    .add({jabatan: '', eselon: '', tmt_jabatan: ''})
                                    .draw();
                            });
                        $(api.table().footer())
                            .find('.btn-delete-row')
                            .click(function () {
                                api
                                    .row(':last')
                                    .remove()
                                    .draw();
                            });
                    }, createdRow : function( row, data, index ){
                        $(row)
                            .find('.datepicker')
                            .daterangepicker({
                                locale: {
                                    format: 'YYYY-MM-DD'
                                },
                                singleDatePicker: true,
                                showDropdowns: true
                            });

                        $(row)
                            .find('.select2-ket')
                            .select2({width: '100%'});
                    }, rowCallback : function( row, data, displayNum, displayIndex, index ){},
                    drawCallback: function (settings) {}
                    }); const tablependidikan = $('#table-pendidikan').DataTable({
                    paging: false,
                    searching: false,
                    ordering: false,
                    info: false,
                    data: <?= isset($data->rincian_pendidikan) ? json_encode($data->rincian_pendidikan) : '[]' ;?>, columns : [ {
                        data: 'tingkat_pendidikan',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="pdd_tingkat` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="pendidikan[` + meta.row +
                                `][tingkat]" data-column="pendidikan" required="">
						`
                            ).trim();
                        }
                    }, {
                        data: 'jurusan',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `
							<input id="pdd_jurusan` + meta.row +
                                `" class="form-control" value="` + columnData +
                                `" name="pendidikan[` + meta.row +
                                `][jurusan]" data-column="jurusan">
						`
                            ).trim();
                        }
                    }, {
                        data: 'nama_sekolah',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="pdd_nama` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="pendidikan[` + meta.row +
                                `][nama]" data-column="nama">
						`
                            ).trim();
                        }
                    },{
                        data: 'tgl_lulus',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="pdd_tgl` + meta.row + `" class="form-control datepicker" value="` +
                                columnData + `" name="pendidikan[` + meta.row +
                                `][tgl]" data-column="tgl">
						`
                            ).trim();
                        }
                    }
                    ], initComplete : function(settings, json){
                        let api = this.api();
                        $(api.table().footer())
                            .find('.btn-add-row')
                            .click(function () {
                                api
                                    .row
                                    .add({tingkat_pendidikan: '', jurusan: '', nama_sekolah: '', tgl_lulus: ''})
                                    .draw();
                            });
                        $(api.table().footer())
                            .find('.btn-delete-row')
                            .click(function () {
                                api
                                    .row(':last')
                                    .remove()
                                    .draw();
                            });
                    }, createdRow : function( row, data, index ){
                        $(row)
                            .find('.datepicker')
                            .daterangepicker({
                                locale: {
                                    format: 'YYYY-MM-DD'
                                },
                                singleDatePicker: true,
                                showDropdowns: true
                            });

                        $(row)
                            .find('.select2-ket')
                            .select2({width: '100%'});
                    }, rowCallback : function( row, data, displayNum, displayIndex, index ){},
                    drawCallback: function (settings) {}
                    }); const tablestruktural = $('#table-struktural').DataTable({
                    paging: false,
                    searching: false,
                    ordering: false,
                    info: false,
                    data: <?= isset($data->rincian_diklat_struktural) ? json_encode($data->rincian_diklat_struktural) : '[]' ;?>, columns : [ {
                        data: 'nama_diklat',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="pdd_tingkat` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="struktural[` + meta.row +
                                `][nama_diklat]" data-column="pendidikan" required="">
						`
                            ).trim();
                        }
                    }, {
                        data: 'tahun_lulus',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `
							<input id="pdd_jurusan` + meta.row +
                                `" class="form-control datepicker" value="` + columnData +
                                `" name="struktural[` + meta.row +
                                `][tahun_lulus]" data-column="jurusan">
						`
                            ).trim();
                        }
                    }, {
                        data: 'tempat_diklat',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="stktr_diklat` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="struktural[` + meta.row +
                                `][tempat_diklat]" data-column="nama">
						`
                            ).trim();
                        }
                    },{
                        data: 'penyelenggara',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="pdd_tgl` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="struktural[` + meta.row +
                                `][penyelenggara]" data-column="tgl">
						`
                            ).trim();
                        }
                    }
                    ], initComplete : function(settings, json){
                        let api = this.api();
                        $(api.table().footer())
                            .find('.btn-add-row')
                            .click(function () {
                                api
                                    .row
                                    .add({nama_diklat: '', tahun_lulus: '', tempat_diklat: '', penyelenggara: ''})
                                    .draw();
                            });
                        $(api.table().footer())
                            .find('.btn-delete-row')
                            .click(function () {
                                api
                                    .row(':last')
                                    .remove()
                                    .draw();
                            });
                    }, createdRow : function( row, data, index ){
                        $(row)
                            .find('.datepicker')
                            .datepicker(
                                {autoclose: true, format: " yyyy", viewMode: "years", minViewMode: "years"}
                            );
                        $(row)
                            .find('.select2-ket')
                            .select2({width: '100%'});
                    }, rowCallback : function( row, data, displayNum, displayIndex, index ){},
                    drawCallback: function (settings) {}
                    }); $('form#form_pangkat').validate({
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
                                    setTimeout(function () {}, timeout);
                                } else {
                                    swal('Gagal !', response.message, response.status);
                                }
                            }
                        });
                    }
                }); const tablesfungsional = $('#table-fungsional').DataTable({
                    paging: false,
                    searching: false,
                    ordering: false,
                    info: false,
                    data: <?= isset($data->rincian_diklat_fungsional) ? json_encode($data->rincian_diklat_fungsional) : '[]' ;?>, columns : [ {
                        data: 'nama_diklat',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="pdd_tingkat` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="struktural[` + meta.row +
                                `][nama_diklat]" data-column="pendidikan" required="">
						`
                            ).trim();
                        }
                    }, {
                        data: 'tahun_lulus',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `
							<input id="pdd_jurusan` + meta.row +
                                `" class="form-control datepicker" value="` + columnData +
                                `" name="struktural[` + meta.row +
                                `][tahun_lulus]" data-column="jurusan">
						`
                            ).trim();
                        }
                    }, {
                        data: 'tempat_diklat',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="stktr_diklat` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="struktural[` + meta.row +
                                `][tempat_diklat]" data-column="nama">
						`
                            ).trim();
                        }
                    },{
                        data: 'penyelenggara',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="pdd_tgl` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="struktural[` + meta.row +
                                `][penyelenggara]" data-column="tgl">
						`
                            ).trim();
                        }
                    }
                    ], initComplete : function(settings, json){
                        let api = this.api();
                        $(api.table().footer())
                            .find('.btn-add-row')
                            .click(function () {
                                api
                                    .row
                                    .add({nama_diklat: '', tahun_lulus: '', tempat_diklat: '', penyelenggara: ''})
                                    .draw();
                            });
                        $(api.table().footer())
                            .find('.btn-delete-row')
                            .click(function () {
                                api
                                    .row(':last')
                                    .remove()
                                    .draw();
                            });
                    }, createdRow : function( row, data, index ){
                        $(row)
                            .find('.datepicker')
                            .datepicker(
                                {autoclose: true, format: " yyyy", viewMode: "years", minViewMode: "years"}
                            );
                        $(row)
                            .find('.select2-ket')
                            .select2({width: '100%'});
                    }, rowCallback : function( row, data, displayNum, displayIndex, index ){},
                    drawCallback: function (settings) {}
                    }); $('form#form_pangkat').validate({
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
                                    setTimeout(function () {}, timeout);
                                } else {
                                    swal('Gagal !', response.message, response.status);
                                }
                            }
                        });
                    }
                }); const tablesteknis = $('#table-teknis').DataTable({
                    paging: false,
                    searching: false,
                    ordering: false,
                    info: false,
                    data: <?= isset($data->rincian_diklat_teknis) ? json_encode($data->rincian_diklat_teknis) : '[]' ;?>, columns : [ {
                        data: 'nama_diklat',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="pdd_tingkat` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="struktural[` + meta.row +
                                `][nama_diklat]" data-column="pendidikan" required="">
						`
                            ).trim();
                        }
                    }, {
                        data: 'tahun_lulus',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `
							<input id="pdd_jurusan` + meta.row +
                                `" class="form-control datepicker" value="` + columnData +
                                `" name="struktural[` + meta.row +
                                `][tahun_lulus]" data-column="jurusan">
						`
                            ).trim();
                        }
                    }, {
                        data: 'tempat_diklat',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="stktr_diklat` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="struktural[` + meta.row +
                                `][tempat_diklat]" data-column="nama">
						`
                            ).trim();
                        }
                    },{
                        data: 'penyelenggara',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="pdd_tgl` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="struktural[` + meta.row +
                                `][penyelenggara]" data-column="tgl">
						`
                            ).trim();
                        }
                    }
                    ], initComplete : function(settings, json){
                        let api = this.api();
                        $(api.table().footer())
                            .find('.btn-add-row')
                            .click(function () {
                                api
                                    .row
                                    .add({nama_diklat: '', tahun_lulus: '', tempat_diklat: '', penyelenggara: ''})
                                    .draw();
                            });
                        $(api.table().footer())
                            .find('.btn-delete-row')
                            .click(function () {
                                api
                                    .row(':last')
                                    .remove()
                                    .draw();
                            });
                    }, createdRow : function( row, data, index ){
                        $(row)
                            .find('.datepicker')
                            .datepicker(
                                {autoclose: true, format: " yyyy", viewMode: "years", minViewMode: "years"}
                            );
                        $(row)
                            .find('.select2-ket')
                            .select2({width: '100%'});
                    }, rowCallback : function( row, data, displayNum, displayIndex, index ){},
                    drawCallback: function (settings) {}
                    }); $('form#form_pangkat').validate({
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
                                    setTimeout(function () {}, timeout);
                                } else {
                                    swal('Gagal !', response.message, response.status);
                                }
                            }
                        });
                    }
                }); const tablespenghargaan = $('#table-penghargaan').DataTable({
                    paging: false,
                    searching: false,
                    ordering: false,
                    info: false,
                    data: <?= isset($data->rincian_penghargaan) ? json_encode($data->rincian_penghargaan) : '[]' ;?>, columns : [ {
                        data: 'nama_jasa',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="pgh_nama` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="penghargaan[` + meta.row +
                                `][nama]" data-column="pendidikan" required="">
						`
                            ).trim();
                        }
                    }, {
                        data: 'asal_perolehan',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="pgh_asal` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="penghargaan[` + meta.row +
                                `][asal]" data-column="asal">
						`
                            ).trim();
                        }
                    }, {
                        data: 'tahun',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `
							<input id="pgh_tahun` + meta.row +
                                `" class="form-control datepicker" value="` + columnData +
                                `" name="penghargaan[` + meta.row +
                                `][tahun]" data-column="jurusan">
						`
                            ).trim();
                        }
                    }
                    ], initComplete : function(settings, json){
                        let api = this.api();
                        $(api.table().footer())
                            .find('.btn-add-row')
                            .click(function () {
                                api
                                    .row
                                    .add({nama_jasa: '', asal_perolehan: '', tahun: ''})
                                    .draw();
                            });
                        $(api.table().footer())
                            .find('.btn-delete-row')
                            .click(function () {
                                api
                                    .row(':last')
                                    .remove()
                                    .draw();
                            });
                    }, createdRow : function( row, data, index ){
                        $(row)
                            .find('.datepicker')
                            .datepicker(
                                {autoclose: true, format: " yyyy", viewMode: "years", minViewMode: "years"}
                            );
                        $(row)
                            .find('.select2-ket')
                            .select2({width: '100%'});
                    }, rowCallback : function( row, data, displayNum, displayIndex, index ){},
                    drawCallback: function (settings) {}
                    }); $('form#form_pangkat').validate({
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
                                    setTimeout(function () {}, timeout);
                                } else {
                                    swal('Gagal !', response.message, response.status);
                                }
                            }
                        });
                    }
                }); const tablehukuman = $('#table-hukuman').DataTable({
                    paging: false,
                    searching: false,
                    ordering: false,
                    info: false,
                    data: <?= isset($data->rincian_hukuman) ? json_encode($data->rincian_hukuman) : '[]' ;?>, columns : [ {
                        data: 'jenis_huk',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `
							<input id="hkm_jenis` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="hukuman[` + meta.row +
                                `][jenis]" data-column="jenis_hukuman" required="">
						`
                            ).trim();
                        }
                    }, {
                        data: 'nama_huk',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `
							<input id="hkm_nama` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="hukuman[` + meta.row +
                                `][nama]" data-column="nama_hukuman">
						`
                            ).trim();
                        }
                    }, {
                        data: 'Tmt',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `
                            <input id="hkm_tmt` + meta.row +
                                `" class="form-control datepicker" value="` + columnData +
                                `" name="hukuman[` + meta.row +
                                `][tmt]" data-column="tmt">
						`
                            ).trim();
                        }
                    }
                    ], initComplete : function(settings, json){
                        let api = this.api();
                        $(api.table().footer())
                            .find('.btn-add-row')
                            .click(function () {
                                api
                                    .row
                                    .add({jenis_huk: '', nama_huk: '', Tmt: ''})
                                    .draw();
                            });
                        $(api.table().footer())
                            .find('.btn-delete-row')
                            .click(function () {
                                api
                                    .row(':last')
                                    .remove()
                                    .draw();
                            });
                    }, createdRow : function( row, data, index ){
                        $(row)
                            .find('.datepicker')
                            .daterangepicker({
                                locale: {
                                    format: 'YYYY-MM-DD'
                                },
                                singleDatePicker: true,
                                showDropdowns: true
                            });

                        $(row)
                            .find('.select2-ket')
                            .select2({width: '100%'});
                    }, rowCallback : function( row, data, displayNum, displayIndex, index ){},
                    drawCallback: function (settings) {}
                    }); const tableprestasi = $('#table-prestasi').DataTable({
                    paging: false,
                    searching: false,
                    ordering: false,
                    info: false,
                    data: <?= isset($data->rincian_prestasi) ? json_encode($data->rincian_prestasi) : '[]' ;?>, columns : [ {
                        data: 'tahun',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `
							<input id="prs_tahun` + meta.row +
                                `" class="form-control datepicker" value="` + columnData +
                                `" name="prestasi[` + meta.row +
                                `][tahun]" data-column="tahun" required="">
						`
                            ).trim();
                        }
                    }, {
                        data: 'nilai_skp',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `
							<input type="number" id="prs_skp` + meta.row +
                                `" class="form-control" value="` + columnData +
                                `" name="prestasi[` + meta.row +
                                `][skp]" data-column="nilai"  min="0" value="0" step=".01">
						`
                            ).trim();
                        }
                    }, {
                        data: 'nilai_perilaku',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `
                            <input type="number" id="prs_perilaku` + meta.row +
                                `" class="form-control" value="` + columnData +
                                `" name="prestasi[` + meta.row +
                                `][perilaku]" data-column="perilaku"  min="0" value="0" step=".01">
						`
                            ).trim();
                        }
                    },{
                        data: 'nilai_prestasi',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `
							<input type="number" id="prs_prestasi` + meta.row +
                                `" class="form-control" value="` + columnData +
                                `" name="prestasi[` + meta.row +
                                `][prestasi]" data-column="nilai"  min="0" value="0" step=".01">
						`
                            ).trim();
                        }
                    }
                    ], initComplete : function(settings, json){
                        let api = this.api();
                        $(api.table().footer())
                            .find('.btn-add-row')
                            .click(function () {
                                api
                                    .row
                                    .add({tahun: '', nilai_skp: '', nilai_perilaku: '', nilai_prestasi: ''})
                                    .draw();
                            });
                        $(api.table().footer())
                            .find('.btn-delete-row')
                            .click(function () {
                                api
                                    .row(':last')
                                    .remove()
                                    .draw();
                            });
                    }, createdRow : function( row, data, index ){
                        $(row)
                            .find('.datepicker')
                            .datepicker(
                                {autoclose: true, format: " yyyy", viewMode: "years", minViewMode: "years"}
                            );

                        $(row)
                            .find('.select2-ket')
                            .select2({width: '100%'});
                    }, rowCallback : function( row, data, displayNum, displayIndex, index ){},
                    drawCallback: function (settings) {}
                    }); const tableibu = $('#table-keluarga-ibu').DataTable({
                    paging: false,
                    searching: false,
                    ordering: false,
                    info: false,
                    data: <?= isset($data->rincian_keluarga_ibu) ? json_encode($data->rincian_keluarga_ibu) : '[]' ;?>, columns : [ {
                        data: 'nama',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="ibu_nama` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="ibu[` + meta.row +
                                `][nama]" data-column="nama" required="">
						`
                            ).trim();
                        }
                    },{
                        data: 'tgl_lahir',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="ibu_tgl` + meta.row + `" class="form-control datepicker" value="` +
                                columnData + `" name="ibu[` + meta.row +
                                `][tgl]" data-column="tgl">
						`
                            ).trim();
                        }
                    }, {
                        data: 'pekerjaan',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="ibu_pekerjaan` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="ibu[` + meta.row +
                                `][pekerjaan]" data-column="pekerjaan">
						`
                            ).trim();
                        }
                    }
                    ], initComplete : function(settings, json){
                        let api = this.api();
                        $(api.table().footer())
                            .find('.btn-add-row')
                            .click(function () {
                                api
                                    .row
                                    .add({nama: '', tgl_lahir: '', pekerjaan: ''})
                                    .draw();
                            });
                        $(api.table().footer())
                            .find('.btn-delete-row')
                            .click(function () {
                                api
                                    .row(':last')
                                    .remove()
                                    .draw();
                            });
                    }, createdRow : function( row, data, index ){
                        $(row)
                            .find('.datepicker')
                            .daterangepicker({
                                locale: {
                                    format: 'YYYY-MM-DD'
                                },
                                singleDatePicker: true,
                                showDropdowns: true
                            });

                        $(row)
                            .find('.select2-ket')
                            .select2({width: '100%'});
                    }, rowCallback : function( row, data, displayNum, displayIndex, index ){},
                    drawCallback: function (settings) {}
                    }); const tableayah = $('#table-keluarga-ayah').DataTable({
                    paging: false,
                    searching: false,
                    ordering: false,
                    info: false,
                    data: <?= isset($data->rincian_keluarga_ayah) ? json_encode($data->rincian_keluarga_ayah) : '[]' ;?>, columns : [ {
                        data: 'nama',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="ayah_nama` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="ayah[` + meta.row +
                                `][nama]" data-column="nama" required="">
						`
                            ).trim();
                        }
                    },{
                        data: 'tgl_lahir',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="ayah_tgl` + meta.row +
                                `" class="form-control datepicker" value="` + columnData +
                                `" name="ayah[` + meta.row +
                                `][tgl]" data-column="tgl">
						`
                            ).trim();
                        }
                    }, {
                        data: 'pekerjaan',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="ayah_pekerjaan` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="ayah[` + meta.row +
                                `][pekerjaan]" data-column="pekerjaan">
						`
                            ).trim();
                        }
                    }
                    ], initComplete : function(settings, json){
                        let api = this.api();
                        $(api.table().footer())
                            .find('.btn-add-row')
                            .click(function () {
                                api
                                    .row
                                    .add({nama: '', tgl_lahir: '', pekerjaan: ''})
                                    .draw();
                            });
                        $(api.table().footer())
                            .find('.btn-delete-row')
                            .click(function () {
                                api
                                    .row(':last')
                                    .remove()
                                    .draw();
                            });
                    }, createdRow : function( row, data, index ){
                        $(row)
                            .find('.datepicker')
                            .daterangepicker({
                                locale: {
                                    format: 'YYYY-MM-DD'
                                },
                                singleDatePicker: true,
                                showDropdowns: true
                            });

                        $(row)
                            .find('.select2-ket')
                            .select2({width: '100%'});
                    }, rowCallback : function( row, data, displayNum, displayIndex, index ){},
                    drawCallback: function (settings) {}
                    }); const tablepasutri = $('#table-keluarga-pasutri').DataTable({
                    paging: false,
                    searching: false,
                    ordering: false,
                    info: false,
                    data: <?= isset($data->rincian_keluarga_pasutri) ? json_encode($data->rincian_keluarga_pasutri) : '[]' ;?>, columns : [ {
                        data: 'nama',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="pasutri_nama` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="pasutri[` + meta.row +
                                `][nama]" data-column="nama" required="">
						`
                            ).trim();
                        }
                    },{
                        data: 'tgl_lahir',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="pasutri_tgl` + meta.row +
                                `" class="form-control datepicker" value="` + columnData +
                                `" name="pasutri[` + meta.row +
                                `][tgl_lahir]" data-column="tgl">
						`
                            ).trim();
                        }
                    },{
                        data: 'tgl_pernikahan',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="pasutri_tgl` + meta.row +
                                `" class="form-control datepicker" value="` + columnData +
                                `" name="pasutri[` + meta.row +
                                `][tgl_pernikahan]" data-column="tgl">
						`
                            ).trim();
                        }
                    }, {
                        data: 'pekerjaan',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="pasutri_pekerjaan` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="pasutri[` + meta.row +
                                `][pekerjaan]" data-column="pekerjaan">
						`
                            ).trim();
                        }
                    }
                    ], initComplete : function(settings, json){
                        let api = this.api();
                        $(api.table().footer())
                            .find('.btn-add-row')
                            .click(function () {
                                api
                                    .row
                                    .add({nama: '', tgl_lahir: '', tgl_pernikahan: '', pekerjaan: ''})
                                    .draw();
                            });
                        $(api.table().footer())
                            .find('.btn-delete-row')
                            .click(function () {
                                api
                                    .row(':last')
                                    .remove()
                                    .draw();
                            });
                    }, createdRow : function( row, data, index ){
                        $(row)
                            .find('.datepicker')
                            .daterangepicker({
                                locale: {
                                    format: 'YYYY-MM-DD'
                                },
                                singleDatePicker: true,
                                showDropdowns: true
                            });

                        $(row)
                            .find('.select2-ket')
                            .select2({width: '100%'});
                    }, rowCallback : function( row, data, displayNum, displayIndex, index ){},
                    drawCallback: function (settings) {}
                    }); const tableanak = $('#table-keluarga-anak').DataTable({
                    paging: false,
                    searching: false,
                    ordering: false,
                    info: false,
                    data: <?= isset($data->rincian_keluarga_anak) ? json_encode($data->rincian_keluarga_anak) : '[]' ;?>, columns : [ {
                        data: 'nama',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="anak_nama` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="anak[` + meta.row +
                                `][nama]" data-column="nama" required="">
						`
                            ).trim();
                        }
                    },{
                        data: 'tgl_lahir',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="anak_tgl` + meta.row +
                                `" class="form-control datepicker" value="` + columnData +
                                `" name="anak[` + meta.row +
                                `][tgl]" data-column="tgl">
						`
                            ).trim();
                        }
                    },{
                        data: 'jenis_kelamin',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `
                                <select class="form-control select2-ket" data-name="ket" required="required" name="anak[` +
                                meta.row +
                                `][gender]">
                                    <option value="PRIA" ` + (
                                        columnData == 'PRIA'
                                            ? `selected="selected"`
                                            : ``
                                    ) +
                                `>LAKI-LAKI</option>
                                <option value="PEREMPUAN" ` + (
                                        columnData == 'PEREMPUAN'
                                            ? `selected="selected"`
                                            : ``
                                    ) +
                                `>PEREMPUAN</option>
                                </select>
                            `
                            ).trim();
                        }
                    }, {
                        data: 'pekerjaan',
                        width: '150px',
                        render: function (columnData, type, rowData, meta) {
                            return String(
                                `<input id="anak_pekerjaan` + meta.row + `" class="form-control" value="` +
                                columnData + `" name="anak[` + meta.row +
                                `][pekerjaan]" data-column="pekerjaan">
						`
                            ).trim();
                        }
                    }
                    ], initComplete : function(settings, json){
                        let api = this.api();
                        $(api.table().footer())
                            .find('.btn-add-row')
                            .click(function () {
                                api
                                    .row
                                    .add({nama: '', tgl_lahir: '', pekerjaan: ''})
                                    .draw();
                            });
                        $(api.table().footer())
                            .find('.btn-delete-row')
                            .click(function () {
                                api
                                    .row(':last')
                                    .remove()
                                    .draw();
                            });
                    }, createdRow : function( row, data, index ){
                        $(row)
                            .find('.datepicker')
                            .daterangepicker({
                                locale: {
                                    format: 'YYYY-MM-DD'
                                },
                                singleDatePicker: true,
                                showDropdowns: true
                            });

                        $(row)
                            .find('.select2-ket')
                            .select2({width: '100%'});
                    }, rowCallback : function( row, data, displayNum, displayIndex, index ){},
                    drawCallback: function (settings) {}
                    }); $('form#form_pangkat').validate({
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
                                    setTimeout(function () {}, timeout);
                                } else {
                                    swal('Gagal !', response.message, response.status);
                                }
                            }
                        });
                    }
                }); 
                
                $('form#form_jabatan').validate({
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
                                    setTimeout(function () {}, timeout);
                                } else {
                                    swal('Gagal !', response.message, response.status);
                                }
                            }
                        });
                    }
                }); $('form#form_pendidikan').validate({
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
                                    setTimeout(function () {}, timeout);
                                } else {
                                    swal('Gagal !', response.message, response.status);
                                }
                            }
                        });
                    }
                }); $('form#form_struktural').validate({
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
                                    setTimeout(function () {}, timeout);
                                } else {
                                    swal('Gagal !', response.message, response.status);
                                }
                            }
                        });
                    }
                }); $('form#form_fungsional').validate({
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
                                    setTimeout(function () {}, timeout);
                                } else {
                                    swal('Gagal !', response.message, response.status);
                                }
                            }
                        });
                    }
                }); $('form#form_teknis').validate({
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
                                    setTimeout(function () {}, timeout);
                                } else {
                                    swal('Gagal !', response.message, response.status);
                                }
                            }
                        });
                    }
                }); $('form#form_penghargaan').validate({
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
                                    setTimeout(function () {}, timeout);
                                } else {
                                    swal('Gagal !', response.message, response.status);
                                }
                            }
                        });
                    }
                }); $('form#form_hukuman').validate({
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
                                    setTimeout(function () {}, timeout);
                                } else {
                                    swal('Gagal !', response.message, response.status);
                                }
                            }
                        });
                    }
                }); $('form#form_prestasi').validate({
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
                                    setTimeout(function () {}, timeout);
                                } else {
                                    swal('Gagal !', response.message, response.status);
                                }
                            }
                        });
                    }
                }); $('form#form_keluarga').validate({
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
                                        // window.history.back();
                                    }, timeout);
                                } else {
                                    swal('Gagal !', response.message, response.status);
                                }
                            }
                        });
                    }
                });

             
    	
        
        });

            

            

});
</script>