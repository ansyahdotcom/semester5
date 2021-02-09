<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $tittle; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/kelas'); ?>">Data Kelas</a></li>
                        <li class="breadcrumb-item active"><?= $tittle; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h3 class="card-title text-bold">Form <?= $tittle; ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="<?= base_url('admin/kelas/tambahkls'); ?>"
                            enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="namakls">Nama Kelas</label>
                                            <input type="text" class="form-control huruf" id="nmkls" name="namakls"
                                                placeholder="Nama Kelas" value="<?= set_value('namakls'); ?>"
                                                autocomplete="off" autofocus required>
                                            <?= form_error('namakls', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="namakls">Kategori Kelas</label>
                                            <select name="ktg" class="custom-select slct-ktg" required>

                                            </select>
                                            <?= form_error('ktg', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tgl_mulai">Tanggal Pembukaan Pendaftaran</label>
                                            <div class="input-group">
                                                <input class="form-control pendaftaran" data-toggle="datetimepicker"
                                                    data-target=".pendaftaran" type="text" id="tgl_daftar"
                                                    name="tgl_daftar" value="<?= set_value('tgl_daftar'); ?>"
                                                    placeholder="dd/mm/yyyy 00:00" autocomplete="off">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tgl_mulai">Tanggal Penutupan Pendaftaran</label>
                                            <div class="input-group">
                                                <input class="form-control penutupan" data-toggle="datetimepicker"
                                                    data-target=".penutupan" type="text" name="tgl_penutupan"
                                                    value="<?= set_value('tgl_penutupan'); ?>"
                                                    placeholder="dd/mm/yyyy 00:00" autocomplete="off">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tgl_mulai">Tanggal Mulai Kelas</label>
                                            <div class="input-group">
                                                <input class="form-control mulai" data-toggle="datetimepicker"
                                                    data-target=".mulai" type="text" name="tgl_mulai"
                                                    value="<?= set_value('tgl_mulai'); ?>" placeholder="dd/mm/yyyy"
                                                    autocomplete="off">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tgl_selesai">Tanggal Selesai Kelas</label>
                                            <div class="input-group">
                                                <input class="form-control selesai" data-toggle="datetimepicker"
                                                    data-target=".selesai" type="text" name="tgl_selesai"
                                                    value="<?= set_value('tgl_selesai'); ?>" placeholder="dd/mm/yyyy"
                                                    autocomplete="off">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lok_kls">Lokasi</label>
                                            <select name="lok_kls" id="lok_kls" class="form-control">
                                                <option value="" <?= set_select('lok_kls', ''); ?> selected>--Pilih--
                                                </option>
                                                <option value="Online Class"
                                                    <?= set_select('lok_kls', 'Online Class'); ?>>Online Class</option>
                                                <option value="Offline Class"
                                                    <?= set_select('lok_kls', 'Offline Class'); ?>>Offline Class
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hari">Hari Pelaksanaan</label>
                                            <select name="hari" id="hari" class="form-control">
                                                <option value="" <?= set_select('hari', ''); ?> selected>--Pilih--
                                                </option>
                                                <option value="3 Hari (Senin-Rabu)"
                                                    <?= set_select('hari', '3 Hari (Senin-Rabu)'); ?>>3 Hari
                                                    (Senin-Rabu)</option>
                                                <option value="4 Hari (Senin-Kamis)"
                                                    <?= set_select('hari', '4 Hari (Senin-Kamis)'); ?>>4 Hari
                                                    (Senin-Kamis)</option>
                                                <option value="5 Hari (Senin-Jumat)"
                                                    <?= set_select('hari', '5 Hari (Senin-Jumat)'); ?>>5 Hari
                                                    (Senin-Jumat)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jam_mulai">Jam Mulai Kelas</label>
                                            <div class="input-group">
                                                <input class="form-control jam_mulai" data-toggle="datetimepicker"
                                                    data-target=".jam_mulai" type="text" name="jam_mulai"
                                                    placeholder="00:00" value="<?= set_value('jam_mulai'); ?>"
                                                    autocomplete="off" required>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-clock"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jam_selesai">Jam Selesai Kelas</label>
                                            <div class="input-group">
                                                <input class="form-control jam_selesai" data-toggle="datetimepicker"
                                                    data-target=".jam_selesai" type="text" name="jam_selesai"
                                                    placeholder="00:00" value="<?= set_value('jam_selesai'); ?>"
                                                    autocomplete="off" required>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-clock"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <input onkeyup="price(this)" type="number" class="form-control" name="harga"
                                                id="harga" placeholder="harga" value="<?= set_value('harga'); ?>"
                                                autocomplete="off" required>
                                            <!-- <?= form_error('harga', '<small class="text-danger">', '</small>'); ?> -->
                                            <small class="text-danger text-bold" id="notif"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Gambar Kelas</label>
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="gbrkls">
                                                    <label class="custom-file-label" for="gbrkls">Pilih file...</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" style="weight: 300px"
                                                required><?= set_value('deskripsi'); ?></textarea>
                                            <?= form_error('deskripsi', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">Permalink</label>
                                            <input type="text" id="permalink" name="permalink"
                                                style="background-color: #F8F8F8;outline-color: none;border:0;color:blue;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="<?= base_url('admin/kelas'); ?>" class="btn btn-default"><i
                                        class="fas fa-arrow-circle-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary" id="save-btn"><i class="fas fa-save"></i>
                                    Simpan</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->