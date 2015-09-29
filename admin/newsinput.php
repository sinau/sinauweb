<?php include 'komponen/head.php' ;?>

	</head>

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>
                    <?php if (empty($_GET['aksi'])) echo "Input"; else echo "Ubah"; ?> Data Berita <small>Sinau Academy</small>
                </h3>
                        </div>

                         
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                     
                          <a href="adm_news"> <button type="submit"  class="btn btn-warning"> <i class="fa fa-mail-reply"></i> Kembali </button> </a>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
									<?php if (empty($_GET['aksi'])) { ?>
									
                                    <form action="newsinputexe.php" enctype="multipart/form-data" method="post" class="form-horizontal form-label-left" novalidate>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="email" name="tanggal" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Judul <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="email2" name="judul" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
										<div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Ringkasan <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="email2" name="ringkasan" required="required" class="form-control col-md-7 col-xs-12">
											
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">News <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea id="number" name="news" required="required"  class="form-control col-md-7 col-xs-12"></textarea>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Gambar
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="file" name="gambar_news">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                 <button type="submit" name="simpan" class="btn btn-primary"> <i class="fa fa-check-square-o"></i> Simpan </button>
                                            </div>
                                        </div>
                                    </form>
									
									<?php 
									} if ($_GET['aksi'] == 'ubah') { 
									
									$id_news = $_GET['id_news'];
									$tanggal = $_POST['tanggal'];
									$judul = $_POST['judul'];
									$ringkasan = $_POST['ringkasan'];
									$news = $_POST['news'];
									$gambar_news = $_POST['gambar_news'];
									
									$sql = "SELECT * from news where id_news = '$id_news'";
									$qry = mysql_query($sql);
									$row = mysql_fetch_array($qry);
									
									?> 
									<form action="newsinputexe.php" enctype="multipart/form-data" method="post" class="form-horizontal form-label-left" novalidate>
									<input type="hidden" name="id_news" value="<?php echo $row['id_news']; ?>">
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" value="<?php echo $row['tanggal']; ?>" name="tanggal" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Judul <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" value="<?php echo $row['judul']; ?>" name="judul" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
										
										<div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Ringkasan <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" value="<?php echo $row['ringkasan']; ?>" name="ringkasan" required="required" class="form-control col-md-7 col-xs-12">
											
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">News <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" value="<?php echo $row['news']; ?>" name="news" required="required"  class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Gambar lama
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <img src="images/news/<?php echo $row['gambar_news']; ?>" width="100" height="100">
	       										<input type="file" name="gambar_news">
                                            </div>
                                        </div>
										
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                             <button type="submit" name="ubah" class="btn btn-primary"> <i class="fa fa-check-square-o"></i> Simpan </button>
                                            </div>
                                        </div>
                                    </form>
									<?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
<?php include 'komponen/footer.php' ; ?>