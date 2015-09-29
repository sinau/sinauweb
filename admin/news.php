<?php include 'komponen/head.php' ; ?>


<!-- data tables -->
<link href="template/media/css/style.css" type="text/css">
<style type="text/css">
	@import "template/media/css/demo_table_jui.css";
	@import "template/media/themes/smoothness/jquery-ui-1.8.4.custom.css";
</style>
<script src="template/media/js/jquery.js" ></script>
<script src="template/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$('#datatables').dataTable({
			"oLanguage": {
				"sLengthMenu": "Tampilkan _MENU_ data per halaman",
				"sSearch": "Pencarian: ", 
				"sZeroRecords": "Maaf, tidak ada data yang ditemukan",
				"sInfo": "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
				"sInfoEmpty": "Menampilkan 0 s/d 0 dari 0 data",
				"sInfoFiltered": "(di filter dari _MAX_ total data)",
				"oPaginate": {
					"sFirst": "<<",
					"sLast": ">>", 
					"sPrevious": "<", 
					"sNext": ">"
				}
			},
			"sPaginationType":"full_numbers",
			"bJQueryUI":true
		 });
     })    
	</script>

</head>

	<div class="">
		<div class="page-title">
        	<div class="title_left">
            	<h3> Tabel Data Berita <small>Sinau Academy</small></h3>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
                	<div class="x_panel">
                    	<div class="x_title">
                        	<a href="adm_inputnews"> <button type="submit" class="btn btn-info"> <i class="fa fa-check"> </i> Tambah Data </button></a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table class="table table-condensed table-hover table-striped" id="datatables" class="display">
                            	<thead>
                                	<tr class="headings">
                                    	<th width="50">No</th>
                                        <th>Tanggal </th>
                                        <th>Judul</th>
										<th> Ringkasan </th>
                                        <th>News</th>
                                        <th>Gambar </th>
                                        <th width="200" class=" no-link last"><span class="nobr">Aksi</span></th>
                                     </tr>
                                </thead>
								<tbody>
									<tr class="even pointer">
										<?php 
											$i = "1";
											$query = mysql_query("SELECT * from news") or die (mysql_error());
											while ($data = mysql_fetch_array($query)){ ?>
												<td class=" "><?php echo "$i"; ?></td>
												<td class=" "><?php echo "$data[tanggal]"; ?></td>
												<td class=" "><?php echo "$data[judul]"; ?></td>
												<td class=" "><?php echo "$data[ringkasan]"; ?></td>
												<td class=" "><?php echo "$data[news]"; ?></td>
												<td class="">
												<?php 
													if (empty($data['gambar_news'])) { ?>
														<img src="images/admin/no.png" class="img-polaroid" width="100" height="100" >
													<?php } else { ?>
														<img src="images/news/<?php echo $data['gambar_news']; ?>" class="img-polaroid" width="100" height="100"> 
													<?php } ?>
												</td>
												<td class=" last">
													<a href="newsinputexe.php?id_barang=<?php echo $data['id_news']; ?>" OnClick="return confirm('Apakah anda yakin akan menghapus berita <?php echo "$data[judul]";?> ? ')"><button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> hapus</button></a>
													<a href="adm_inputnews&aksi=ubah&id_news=<?php echo $data['id_news']; ?>"><button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> ubah</button></a>
												</td>
										  </tr>
											<? $i++ ?>
											<? } ?>
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
				
<?php include 'komponen/footer.php' ; ?>