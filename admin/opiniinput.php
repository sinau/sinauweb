<?php include 'komponen/head.php'; ?>

</head>
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>
                    <?php if (empty($_GET['aksi'])) echo "Input"; else echo "Ubah"; ?> Data Opini Anggota <small>Sinau Academy</small>
                </h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                     <a href="adm_opini"> <button type="submit"  class="btn btn-warning"><i class="fa fa-mail-reply"></i> Kembali </button> </a>
  
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
									<?php if (empty($_GET['aksi'])) { ?>
									
                                    <form action="opiniinputexe.php" method="post" class="form-horizontal form-label-left" novalidate>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> Nama <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="nama" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> Opini <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea name="opini" required="required" class="form-control col-md-7 col-xs-12"></textarea>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Photo
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="file" name="photo">
                                            </div>
                                        </div>
										
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                             
                                                 <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Simpan</button>
                                            </div>
                                        </div>
                                    </form>
									
									<?php 
									} if ($_GET['aksi'] == 'ubah') { 
									
									$id_opini= $_GET['id_opini'];
									$nama = $_POST['nama'];
									$opini= $_POST['opini'];
									$photo = $_POST['photo'];
									
									$sql = "SELECT * from opini where id_opini = '$id_opini'";
									$qry = mysql_query($sql);
									$row = mysql_fetch_array($qry);
									
									?> 
									<form action="opiniinputexe.php" method="post" class="form-horizontal form-label-left" novalidate>
									<input type="hidden" name="id_opini" value="<?php echo $row['id_opini']; ?>">
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" value="<?php echo $row['nama']; ?>" name="nama" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Opini <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" value="<?php echo $row['opini']; ?>" name="opini" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Photo lama
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <img src="images/admin/<?php echo $row['photo']; ?>" width="100" height="100">
	       										<input type="file" name="photo">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                 <button type="submit" name="ubah" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Simpan</button>
                                            </div>
                                        </div>
                                    </form>
									<?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
