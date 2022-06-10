

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Pasien</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Pasien</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">

        <div id="messages"></div>

        <?php if($this->session->flashdata('success')): ?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php elseif($this->session->flashdata('error')): ?>
          <div class="alert alert-error alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php endif; ?>


        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Tambah Data Pasien</h3>
          </div>
          <!-- /.box-header -->
          <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">

                  <label for="product_image">Gambar</label>
                  <div class="kv-avatar">
                      <div class="file-loading">
                          <input id="product_image" name="product_image" type="file">
                      </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="product_name">Nama Pasien</label>
                  <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Masukkan nama pasien" autocomplete="off" value="<?php echo $this->input->post('product_name') ?>" />
                </div>

                <div class="form-group">
                  <label for="product_name">Nama Panggilan</label>
                  <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Masukkan nama panggilan pasien" autocomplete="off" value="<?php echo $this->input->post('product_name') ?>" />
                </div>

                <div class="form-group">
                  <label for="gender">Jenis Kelamin</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" id="male" value="1">
                      Laki-laki
                    </label>
                    <label>
                      <input type="radio" name="gender" id="female" value="2">
                      Perempuan
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label >Tempat tanggal Lahir</label>
                    <div>
                      <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Masukkan tempat lahir" autocomplete="off" value="<?php echo $this->input->post('product_name') ?>">
                    </div>
                    <br /> 
                    <div>
                      <input type="text" class="form-control" id="date" placeholder="Masukkan tanggal lahir">
                    </div>
                </div>

                <div class="form-group">
                  <label for="product_name">Pekerjaan</label>
                  <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Masukkan nama panggilan pasien" autocomplete="off" value="<?php echo $this->input->post('product_name') ?>" />
                </div>

                <div class="form-group">
                  <label for="gender">Status Perkawinan</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" id="male" value="1">
                      Nikah
                    </label>
                    <label>
                      <input type="radio" name="gender" id="female" value="2">
                      Tidak Menikah
                    </label>
                    <label>
                      <input type="radio" name="gender" id="male" value="1">
                      Janda
                    </label>
                    <label>
                      <input type="radio" name="gender" id="female" value="2">
                      Duda
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="product_name">Alamat</label>
                  <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Masukkan nama panggilan pasien" autocomplete="off" value="<?php echo $this->input->post('product_name') ?>" />
                </div>

                <div class="form-group">
                  <label for="product_name">Kode Pos</label>
                  <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Masukkan nama panggilan pasien" autocomplete="off" value="<?php echo $this->input->post('product_name') ?>" />
                </div>

                <div class="form-group">
                  <label for="product_name">Telpon/Fax/HP</label>
                  <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Masukkan nama panggilan pasien" autocomplete="off" value="<?php echo $this->input->post('product_name') ?>" />
                </div>

                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" id="price" name="price" placeholder="Enter price" autocomplete="off" value="<?php echo $this->input->post('price') ?>"/>
                </div>

                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter 
                  description" autocomplete="off">
                  <?php echo $this->input->post('description') ?>
                  </textarea>
                </div>

                <div class="form-group">
                  <label for="category">Category</label>
                  <select class="form-control select_group" id="category" name="category[]" multiple="multiple">
                    <?php foreach ($category as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="store">Store</label>
                  <select class="form-control select_group" id="store" name="store[]" multiple="multiple">
                    <?php foreach ($stores as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="store">Active</label>
                  <select class="form-control" id="active" name="active">
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                  </select>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success">Save Changes</button>
                <a href="<?php echo base_url('products/') ?>" class="btn btn-danger">Back</a>
              </div>
            </form>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- col-md-12 -->
    </div>
    <!-- /.row -->
    

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
 <script>
  $( function() {
    $( "#date" ).datepicker();
  } );
  </script>

<script type="text/javascript">
  $(document).ready(function() {
    $(".select_group").select2();
    $("#description").wysihtml5();

    $("#productMainNav").addClass('active');
    $("#createProductSubMenu").addClass('active');
    
    var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' + 
        'onclick="alert(\'Call your custom code here.\')">' +
        '<i class="glyphicon glyphicon-tag"></i>' +
        '</button>'; 
    $("#product_image").fileinput({
        overwriteInitial: true,
        maxFileSize: 1500,
        showClose: false,
        showCaption: false,
        browseLabel: '',
        removeLabel: '',
        browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
        removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
        removeTitle: 'Cancel or reset changes',
        elErrorContainer: '#kv-avatar-errors-1',
        msgErrorClass: 'alert alert-block alert-danger',
        // defaultPreviewContent: '<img src="/uploads/default_avatar_male.jpg" alt="Your Avatar">',
        layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
        allowedFileExtensions: ["jpg", "png", "gif"]
    });

  });
</script>