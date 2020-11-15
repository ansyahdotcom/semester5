<footer class="main-footer">
    <strong>Copyright &copy; <?= date('Y'); ?> <a href="<?= base_url('admin/dashboard') ?>">Preneur Academy</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url(); ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url(); ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url(); ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url(); ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url(); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url(); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>assets/dist/js/demo.js"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url(); ?>assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Showing Sweet Alert -->
<script src="<?= base_url(); ?>assets/dist/js/myscript.js"></script>

<!-- Sweet Alert -->
<script>
    $(function() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 5000
        });

        const flashData = $('.flash-data').data('flashdata');
        if (flashData == 'draft') {
            Toast.fire({
                icon: 'info',
                title: 'Data telah didraftkan!',
            });
        } else if (flashData == 'publish') {
            Toast.fire({
                icon: 'info',
                title: 'Data telah dipublish!',
            });
        } else if (flashData == 'save') {
            Toast.fire({
                icon: 'success',
                title: 'Data berhasil disimpan',
            });
        } else if (flashData == 'formempty') {
            Toast.fire({
                icon: 'error',
                title: 'Kesalahan saat menyimpan data, mohon inputkan data yang sesuai!',
            });
        } else if (flashData == 'editkls') {
            Toast.fire({
                icon: 'success',
                title: 'Data berhasil diubah!',
            });
        }
    });
</script>

<!-- Get Data Kategori Kelas -->
<script>
    ambilData();

    function ambilData() {
        $.ajax({
            type: 'POST',
            url: '<?= base_url('admin/kelas/get_ktgkls'); ?>',
            dataType: 'json',
            success: function(data) {
                var ktgklss = '';
                for (var i = 0; i < data.length; i++) {
                    ktgklss += '<option value=' + data[i].ID_KTGKLS + '>' + data[i].KTGKLS + '</option>'
                }
                $(".slct-ktg").html(ktgklss);
            }
        });
    }
</script>

<!-- Add Multiple Form -->
<script>
    $(document).ready(function() {
        $(".btn-plusfrm").click(function(e) {
            e.preventDefault();
            ambilData();
            $(".add-form").append(`
            <tr class="text-center">
                <td>
                <input type="text" class="form-control" name="nama[]" required>
                </td>
                <td>
                <input type="file" class="form-control" name="gbr[]" value="default.jpg">
                </td>
                <td>
                <input type="text" class="form-control" name="link[]" required>
                </td>
                <td>
                    <select name="ktg[]" id="ktg" class="custom-select slct-ktg">
                    
                    </select>
                </td>
                <td>
                <input type="text" class="form-control" name="hrg[]" required>
                </td>
                <td>
                <input type="text" class="form-control" name="disc[]">
                </td>
                <td>
                <textarea class="form-control" name="deskripsi[]" required></textarea>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm btn-dellfrm text-bold"><i class="fas fa-trash"></i> Form</button>
                </td>
            </tr>
            `);
        });
    });

    /** to delete form */
    $(document).on('click', '.btn-dellfrm', function(e) {
        e.preventDefault();

        $(this).parents('tr').remove();
    });
</script>

<!-- Enable/Disabled Form Edit profile -->
<script>
    $(document).ready(function() {
        $("#btn-edit").click(function() {
            $(".tittle").html("Edit Profil");
            $("#btn-edit").prop('hidden', true);
            $("#btn-save").prop('hidden', false);
            $("#btn-cancel").prop('hidden', false);
            $("#nm").prop('disabled', false);
            $("#hp").prop('disabled', false);
            $("#almt").prop('disabled', false);
            $("#imgedit").prop('hidden', false);
            $("#img").prop('hidden', true);
        });

        $("#btn-cancel").click(function() {
            $(".tittle").html("Profil");
            $("#btn-edit").prop('hidden', false);
            $("#btn-save").prop('hidden', true);
            $("#btn-cancel").prop('hidden', true);
            $("#nm").prop('disabled', true);
            $("#hp").prop('disabled', true);
            $("#almt").prop('disabled', true);
            $("#imgedit").prop('hidden', true);
            $("#img").prop('hidden', false);
        });
    });
</script>

<!-- Enable Disable form edit kelas -->
<script>
    $(document).ready(function() {
        $("button#edit-kls").click(function() {
            $("h4.tittlekls").html("Edit Data Kelas");
            $("div.row-idkls").prop('hidden', true);
            $("div.row-ktgkls").prop('hidden', false);
            $("button#save-kls").prop('hidden', false);
            $("button#edit-kls").prop('hidden', true);
            $("input#inkls").prop('disabled', false);
            $("textarea#inkls").prop('disabled', false);
            $("div.edit-gbrkls").prop('hidden', false);
        });

        $("button#cancel-kls").click(function() {
            $("h4.tittlekls").html("Detail Data Kelas");
            $("div.row-idkls").prop('hidden', false);
            $("div.row-ktgkls").prop('hidden', true);
            $("button#save-kls").prop('hidden', true);
            $("button#edit-kls").prop('hidden', false);
            $("input#inkls").prop('disabled', true);
            $("textarea#inkls").prop('disabled', true);
            $("div.edit-gbrkls").prop('hidden', true);
        });

        $("button.close").click(function() {
            $("h4.tittlekls").html("Detail Data Kelas");
            $("div.row-idkls").prop('hidden', false);
            $("div.row-ktgkls").prop('hidden', true);
            $("button#save-kls").prop('hidden', true);
            $("button#edit-kls").prop('hidden', false);
            $("input#inkls").prop('disabled', true);
            $("textarea#inkls").prop('disabled', true);
            $("div.edit-gbrkls").prop('hidden', true);
        });
    });
</script>

<script>
    $(document).ready(function() {
        $("#btn-edit").click(function() {
            $(".tittle").html("Edit Profil");
            $("#btn-edit").prop('hidden', true);
            $("#btn-save").prop('hidden', false);
            $("#btn-cancel").prop('hidden', false);
            $("#nm").prop('disabled', false);
            $("#hp").prop('disabled', false);
            $("#almt").prop('disabled', false);
            $("#imgedit").prop('hidden', false);
            $("#img").prop('hidden', true);
        });

        $("#btn-cancel").click(function() {
            $(".tittle").html("Profil");
            $("#btn-edit").prop('hidden', false);
            $("#btn-save").prop('hidden', true);
            $("#btn-cancel").prop('hidden', true);
            $("#nm").prop('disabled', true);
            $("#hp").prop('disabled', true);
            $("#almt").prop('disabled', true);
            $("#imgedit").prop('hidden', true);
            $("#img").prop('hidden', false);
        });
    });
</script>

<!-- Upload gambar -->
<script>
    function triggerClick(b) {
        document.querySelector('#profileImage').click();
    }

    function displayImage(b) {
        if (b.files[0]) {
            var reader = new FileReader();
            reader.onload = function(b) {
                document.querySelector('#profileDisplay').setAttribute('src', b.target.result);
            }
            reader.readAsDataURL(b.files[0]);
        }
    }
</script>

<script type="text/javascript">
    $(document).ready(function() {

        $("#key-click").click(function() {
            $("#icon").toggleClass('fa-eye-slash');

            var input = $("#key1");

            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }

        });

    });
</script>

<script type="text/javascript">
    $(document).ready(function() {

        $("#key-click1").click(function() {
            $("#icon1").toggleClass('fa-eye-slash');

            var input = $("#key2");

            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }

        });

    });
</script>

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

</body>

</html>