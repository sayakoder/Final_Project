<div class="page-content">
  <div class="page-header">
    <div class="alert alert-block alert-success">
      <button type="button" class="close" data-dismiss="alert">
        <i class="ace-icon fa fa-times"></i>
      </button>

      <i class="ace-icon fa fa-check green"></i>

      Selamat Datang di
      <strong class="green">
        Form 
        <small>EDIT SISWA</small>
      </strong>,
    </div>
    <h1><?=$judul ?>
      <small>
        <i class="ace-icon fa fa-angle-double-right"></i>
        Edit Siswa
      </small>
    </h1>
  </div><!-- /.page-header -->

  <form class="form-horizontal" method="POST" action="<?php echo site_url('siswa/act_edit'); ?>">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-3 control-label">
       <i class="ace-icon glyphicon glyphicon-user bigger-110 hidden-480"></i>
       nama 	:
     </label>
     <div class="col-sm-8">
      <input type="hidden" name="id_siswa" value="<?=$data_siswa->id_siswa?>" class="form-control" readonly>
      <input type="text" name="nama_siswa" value="<?=$data_siswa->nama_siswa?>" class="form-control" id="inputEmail3" placeholder="Masukkan nama_siswa" required="required">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">
      <i class="ace-icon fa fa-users bigger-110 hidden-480"></i>
      Kelamin  :
    </label>
    <div class="col-sm-8">
     <select class="form-control" name="id_kelamin"> <option value="">--Jenis Kelamin--</option>
       <?php foreach ($data_kelamin as $key => $value):?>
        <?php 
        if ($value->id_kelamin == $data_siswa->id_kelamin) {
         $selected = 'selected';
       }
       else
       {
        $selected = '';
      }
      ?>
      <option value="<?=$value->id_kelamin?>" <?=$selected?> > <?=$value->nama_kelamin?></option>
    <?php endforeach ?>
  </select>
</div>
</div>

<div class="form-group">
  <label for="inputEmail3" class="col-sm-3 control-label">
    <i class="ace-icon fa fa-heart bigger-110 hidden-480"></i>
    <i class="ace-icon fa fa-heart-o bigger-110 hidden-480"></i>
    Status  :
  </label>
  <div class="col-sm-8">
    <input type="text" name="status" value="<?=$data_siswa->status?>" class="form-control" id="inputEmail3" placeholder="Status">
  </div>
</div>


<div class="form-group">
  <label for="inputPassword3" class="col-sm-3 control-label">
    <i class="ace-icon fa fa-home bigger-110 hidden-480"></i>
    Alamat 	:
  </label>
  <div class="col-sm-8">
    <input type="text" name="alamat" value="<?=$data_siswa->alamat?>" class="form-control" id="inputPassword3" placeholder="Masukkan Alamat" required="required">
  </div>
</div>

<div class="form-group">
  <label for="inputPassword3" class="col-sm-3 control-label">
    <i class="ace-icon fa fa-book bigger-110 hidden-480"></i>
    Kelas  :
  </label>
  <div class="col-sm-8">
   <select class="form-control" name="id_kelas"> <option value="">--pilih kelas--</option>
     <?php foreach ($data_kelas as $key => $value):?>
      <?php 
      if ($value->id_kelas == $data_siswa->id_kelas) {
       $selected = 'selected';
     }
     else
     {
      $selected = '';
    }
    ?>
    <option value="<?=$value->id_kelas?>" <?=$selected?> > <?=$value->nama_kelas?></option>
  <?php endforeach ?>
</select>
</div>
</div>

<div class="form-group">
  <div class="col-sm-offset-3 col-sm-9">

    <button type="reset" class="btn btn-white btn-warning btn-bold">
      <i class="ace-icon glyphicon glyphicon-refresh green"></i>
      Reset
    </button>

    <button type="submit" class="btn btn-white btn-info btn-bold">
      <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
      Simpan
    </button>

    <a class="btn btn-white btn-default btn-round" id="kembali" data-dismiss="modal">
      <i class="ace-icon glyphicon glyphicon-backward"></i>
      Kembali
    </a>

  </div>
</div>
</form>
</div>