<?php include 'komponen/head.php' ; ?>

</head>

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>
                    Opini Orang orang <small>Sinau Academy</small>
                 
                </h3>
			
                        </div>

                        

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    	 <a href="adm_inputopini"> <button type="submit" class="btn btn-info"> <i class="fa fa-check"> </i> Tambah Opini </button></a>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                                
                                                <th width="50">No </th>
                                                <th>Nama </th>
                                                <th>Opini </th>
                                                <th>Photo </th>
                                               	<th width="200">Aksi </th>
                                            </tr>
                                        </thead>
										
                                        <tbody>
										<tr class="even pointer">
										<?php 
											$i = 1;
											$query = mysql_query("SELECT * from opini") or die (mysql_error());
											while ($data = mysql_fetch_array($query)){ ?>
                                                <td> <?php echo $i; ?> </td>
                                                <td class=" "><?php echo "$data[nama]"; ?></td>
                                                <td class=" "><?php echo "$data[opini]"; ?></td>
                                                <td class=" "><?php echo "$data[photo]"; ?></td>
												<td class=" ">
												<?php 
													if (empty($data['photo'])) { ?>
														<img src="images/admin/no.png" class="img-polaroid" width="100" height="100" >
													<?php } else { ?>
														<img src="images/admin/<?php echo $data['photo']; ?>" class="img-polaroid" width="100" height="100"> 
													<?php } ?>
												</td>
												
												<td>
<a href="opiniinputexe.php?id_opini=<?php echo $data['id_opini']; ?>" OnClick="return confirm('Apakah anda yakin akan menghapus Opini <?php echo "$data[nama]";?> ? ')"><button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> hapus</button></a>
													<a href="adm_inputopini&aksi=ubah&id_opini=<?php echo $data['id_opini']; ?>"><button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> ubah</button></a>
												</td>
                                            </tr>
                                            	<?php $i++; } ?>
												
                                        </tbody>

                                    </table>

                                </div>
                            </div>
                        </div>

                        <br />
                        <br />
                        <br />

                    </div>
                </div>

