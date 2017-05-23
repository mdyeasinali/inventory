<?php 
	include('common_head.php');
	$slider_id = Input::get('slider_id');
		if($_SERVER['REQUEST_METHOD'] == "POST"){		  
			  $sl_name = Input::get('name');
			  $sl_url = Input::get('sl_url');
			  if(empty($_POST['status'])){
							$st = '0';
						}else{
							$st ='1';
						}		  
			  $tkn = Input::get('token');
			  $sl_id = Input::get('sl_id');
			  $hidden_img = Input::get('hidden_img');
			 $slider->update_slider($sl_name,$sl_url,$st,'img',$hidden_img,$tkn,$sl_id);
			   
	}
	include('header.php');
?>

            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    Edit Slide
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Slider</a></li>
                        <li class="active"> Edit Slides</li>
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
									<button type="button" style="" class="btn btn-success"><i class="fa fa-sliders"></i> Edit Slides</button>
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
											<input type="hidden" name="sl_id" value="<?php echo $sl_id; ?>" />	
											<?php $row = $slider->edit_show_slider($sl_id); 
											foreach($row as $key){ ?>
											<input type="hidden" name="hidden_img" value="<?php echo $key['img'];?>" />	
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>Title *</b></label>
												<div class="col-lg-10">
													<input class=" form-control" id="firstname" name="name" value="<?php echo $key['title'];?>" type="text" placeholder="Slider Title" />
												</div>
											</div>
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>Slider URL *</b></label>
												<div class="col-lg-10">
													<input class=" form-control" id="firstname" name="surl" value="<?php echo $key['url'];?>" type="text" placeholder="Slider URL" />
												</div>
											</div>
                                            
                                        <div class="form-group  gal-upload">
                                                <label class="col-lg-2 control-label" for="username">Image</label>
                                                <div class="col-lg-4">
                                                        <img id="uploadPreview" style="width:auto;height:160px;" data-placeholder="images/Blank-person-photo-e1372195842442.png" src="images/Blank-person-photo-e1372195842442.png"  border="1px" class="image marginR10"/>
													<input id="uploadImage" type="file" name="img" onChange="PreviewImage();" />
                                                </div>
                                            </div>
                                            
                                            
                                            
											<div class="form-group">
												<label class="col-sm-2 control-label col-lg-2" value="<?php echo $key['status'];?>" for="inputSuccess">Status</label>
												<div class="col-lg-10">
													<input type="checkbox" name="status" class="js-switch-large" checked/>
												</div>
											</div>
											<?php }?>
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