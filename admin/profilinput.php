
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>
                    <?php if (empty($_GET['aksi'])) { echo "Input"; } 
					else { echo "Ubah"; } ?> Data Profil <small>Sinau Academy</small>
                </h3>
                        </div>

                        
                         
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                               <a href="adm_profil"> <button class="btn btn-warning"> <i class="fa fa-mail-reply"></i> Kembali </button>  </a>
  
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
								
									<?php 
									if (empty($_GET['aksi'])) { ?>
                                    <form action="profilinput.php" method="post" class="form-horizontal form-label-left" novalidate>
									
									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12"> Keterangan
                                         </label>
									<div class="col-md-8 col-sm-6 col-xs-20">
                                       <textarea name="prakata" class="resizable_textarea form-control" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: horizontal; height: 150px;" data-autosize-on="true">
                                        </textarea>
									</div>
									</div>
                                     
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                             <input type="reset" value="Reset" class="btn btn-primary">
                                                 <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                                            </div>
                                        </div>
                                    </form>
									
									<?php 
									}
									if ($_GET['aksi'] == 'ubah') { 
									
										$id_profil = $_GET['id_profil'];
										$qry ="SELECT * from profil where id_profil = '$id_profil'";
										$sql = mysql_query($qry);
										$row = mysql_fetch_array($sql) or die (mysql_error()); ?>
							
									<form action="profilinputexe.php" method="post" class="form-horizontal form-label-left" novalidate>
										 <input type="hidden" name="id_profil" value="<?php echo $row['id_profil']; ?>">
									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12"> Judul
                                         </label>
									<div class="col-md-8 col-sm-6 col-xs-20">
                                       <textarea name="judul" class="resizable_textarea form-control" style="width: 100%; word-wrap: break-word; resize: horizontal; height: 80px;" data-autosize-on="true">  <?php echo $row['judul_profil']; ?>
                                        </textarea>
									</div>
										<label class="control-label col-md-3 col-sm-3 col-xs-12"> Prakata
                                         </label>
									<div class="col-md-8 col-sm-6 col-xs-20">
                                       <textarea  name="prakata" class="resizable_textarea form-control" style="width: 100%; word-wrap: break-word; resize: horizontal; height: 250px;" data-autosize-on="true">  <?php echo $row['prakata']; ?>
                                        </textarea>
									</div>
									</div>
                                     
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">

                                            <button class="btn btn-primary" type="submit" name="ubah"><i class="fa fa-check-square-o"></i> Simpan </button>
                                            </div>
                                        </div>
                                    </form>									
									
									<?php } ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- footer content -->
            
            <!-- /footer content -->
                
            </div>
            <!-- /page content -->
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="js/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>

    <script src="js/custom.js"></script>
    <!-- form validation -->
    <script src="js/validator/validator.js"></script>
    <script>
        // initialize the validator function
        validator.message['date'] = 'not a real date';

        // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
        $('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

        $('.multi.required')
            .on('keyup blur', 'input', function () {
                validator.checkField.apply($(this).siblings().last()[0]);
            });

        // bind the validation to the form submit event
        //$('#send').click('submit');//.prop('disabled', true);

        $('form').submit(function (e) {
            e.preventDefault();
            var submit = true;
            // evaluate the form using generic validaing
            if (!validator.checkAll($(this))) {
                submit = false;
            }

            if (submit)
                this.submit();
            return false;
        });

        /* FOR DEMO ONLY */
        $('#vfields').change(function () {
            $('form').toggleClass('mode2');
        }).prop('checked', false);

        $('#alerts').change(function () {
            validator.defaults.alerts = (this.checked) ? false : true;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);
    </script>

</body>

</html>