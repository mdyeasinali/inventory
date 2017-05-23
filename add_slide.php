<?php 
	include('common_head.php');
	if($_SERVER['REQUEST_METHOD'] == "POST"){
			if(empty($_REQUEST['name']))
			{
		 	$admin->url_return(array('add_slide.php','Some of fields is empty','error',Input::get('token')));
			  }else{
			  $sl_name = Input::get('name');
			  $sl_url = Input::get('surl');
			  if(empty($_POST['status'])){
							$st = '0';
				}else{
					$st ='1';
				}				  
			  $token = Input::get('token');			  
			  $slider->add_slider($sl_name,$sl_url,'img',$st,$token);
			  }
			   
	}
?>
<?php include('header.php');?>

            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    Add Slide
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Slider</a></li>
                        <li class="active"> Add Slides</li>
                    </ol>
                </div>

            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
							<div class="row">
								<div class="col-md-4">
									<button type="button" style="" class="btn btn-success"><i class="fa fa-sliders"></i> Add Slides</button>
								</div>
								<div class="col-md-8"><header class="pull-right">
									<button type="button"  id="myButton" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
									<button type="button"  class="btn btn-danger" onclick="window.history.back()"><i class="fa fa-reply"></i> Cancel</button>
								</header></div>
							</div>
                            
                            <div class="row">
								<div class="panel-body">
									<div class="form">
										<form class="cmxform form-horizontal tasi-form" id="basic-form" method="post" action="<?php Config::get('site/action'); ?>" enctype="multipart/form-data">
                                        <input type="hidden" name="token" value="<?php echo $token; ?>" />	
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>Title *</b></label>
												<div class="col-lg-10">
													<input class=" form-control" id="firstname" name="name" type="text" placeholder="Slider Title" />
												</div>
											</div>
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>Slider URL *</b></label>
												<div class="col-lg-10">
													<input class=" form-control" id="firstname" name="surl" type="text" placeholder="Slider URL" />
												</div>
											</div>
                                            <div class="form-group  gal-upload">
                                                <label class="col-lg-2 control-label"><b>Upload Image</b></label>
                                                <div class="col-lg-4">
                                                    <input id="file-4" class="file" type="file" name="img" multiple=true>
                                                </div>
                                            </div>
                                            
											<div class="form-group">
												<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Status</label>
												<div class="col-lg-10">
													<input type="checkbox" name="status" class="js-switch-large" checked/>
												</div>
											</div>

											<div class="form-group">
												<div class="col-lg-offset-2 col-lg-10">
													<input type="submit" style="display:none" />													
												</div>
											</div>
										</form>
									</div>

								</div>
							</div>
                        </section>
                    </div>
                </div>

            </div>
            <!--body wrapper end-->

<?php include('footer.php');?>