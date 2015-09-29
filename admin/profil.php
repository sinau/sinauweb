<?php include 'komponen/head.php'; ?>

</head>

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Profil <small>Aida Florist Bandung</small></h3>
                        </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                	<h2> Form Design </h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                                <th align="center">Keterangan </th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<tr class="even pointer">
											<?php 
											$query = mysql_query("SELECT * from profil") or die (mysql_error());
											while ($data = mysql_fetch_array($query)){ ?>
												
                                                <td class=" "> <font size="5" face="Courier New, Courier, monospace"> <?php echo "$data[judul_profil]"; ?> </font></td>
                                                <td class=" "> <font size="3" face="Courier New, Courier, monospace"> <?php echo "$data[prakata]"; ?> </font></td>

                                            </tr>
                                        </tbody>
                                    </table>
									<center>
										<a href="adm_ubahprofil&aksi=ubah&id_profil=<?php echo $data['id_profil']; ?>"><button type="submit" class="btn btn-primary"><i class="fa fa-pencil"> </i> ubah</button></a>
									</center>
									<? } ?>
                                </div>
                            </div>
                        </div>

                        <br />
                        <br />
                        <br />

                    </div>
                </div>

<?php include 'komponen/footer.php' ;?>