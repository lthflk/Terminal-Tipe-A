<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Terminal Tipe A Dumai</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 <?php include'style.php' ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include'top.php' ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">INPUT DATA KEDATANGAN</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
			<div class="form-group">
                <label>No :</label>
                <input type="text" class="form-control my-colorpicker1">
              </div>
			  <div class="form-group">
                <label>No.Kendaraan :</label>
                <input type="text" class="form-control my-colorpicker1">
              </div>
			  <div class="form-group">
                <label>Nama PO :</label>
                <input type="text" class="form-control my-colorpicker1">
              </div>
              <div class="form-group">
                <label>Jenis Pelayanan</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">AKAP</option>
                  <option>AKDP</option>
                  <option>AJAP</option>
                  <option>AJDP</option>
                  <option>ANGKUTAN PERKOTAAN</option>
                </select>
              </div>
              <!-- /.form-group -->
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Trayek</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                  <option>Medan</option>
                  <option>Padang Sidempuan</option>
                  <option>Siantar</option>
                  <option>Sibolga</option>
                  <option>Bukit Tinggi</option>
                  <option>Solo</option>
                  <option>Surabaya</option>
				  <option>Jakarta</option>
				  <option>Bagan Batu</option>
				  <option>Bagan Siapi-api</option>
				  <option>Batu Sangkar</option>
				  <option>Jambi</option>
				  <option>Palembang</option>
				  <option>Toba</option>
                </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Armada</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Regular</option>
                  <option>Cadangan</option>
                  <option>Bantuan</option>
                </select>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <div class="row">
        <div class="col-md-6">

          <div class="box box-danger">
            <div class="box-body">
			<div class="form-group">
                <label>No KP Regular :</label>
                <input type="text" class="form-control my-colorpicker1">
              </div>
			  <div class="form-group">
                <label>No KP Cadangan :</label>
                <input type="text" class="form-control my-colorpicker1">
              </div>
			  <div class="form-group">
                <label>No Izin Insidentil :</label>
                <input type="text" class="form-control my-colorpicker1">
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box box-info">
            <div class="box-body">
              <!-- Color Picker -->
               <div class="form-group">
                <label>Jenis Kendaraan</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Bus Besar</option>
                  <option>Bus Sedang</option>
                  <option>Bus Kecil</option>
                  <option>Mobil Penumpang</option>
                </select>
              </div>
			  <div class="form-group">
                <label>Kelas Pelayanan</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Ekonomi</option>
                  <option>VIP</option>
                  <option>Super VIP</option>
                  <option>Executive</option>
				  <option>Super Executive</option>
				  <option>Royal Class</option>
                </select>
              </div>
			  <div class="form-group">
                <label>Kapasitas Tempat Duduk :</label>
                <input type="text" class="form-control my-colorpicker1">
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-body">
              <!-- Date -->
              <div class="form-group">
                <label>Masa Berlaku : </label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
			  <div class="form-group">
                <label>Masa Berlaku : </label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
			  <div class="form-group">
                <label>Masa Berlaku : </label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- iCheck -->
          <div class="box box-success">
            <div class="box-body">
              <div class="form-group">
                <label>Jumlah Penumpang Yang Datang : </label>
                <input type="text" class="form-control my-colorpicker1">
             </div>
            <div class="form-group">
                <label>Load Factor : </label>
                <input type="text" class="form-control my-colorpicker1">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'footer.php' ?>

  <!-- Control Sidebar -->
<?php include 'sidebar.php' ?>
  <!-- /.control-sidebar -->
  <?php include 'pengaturan.php' ?>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

 <?php include 'jscript.php' ?>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>
