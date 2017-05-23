<?php 
	include('common_head.php');
	$adv_id = Input::get('ad_id');
	if($_SERVER['REQUEST_METHOD'] == "POST"){		  	
			  
			  $ad_title = Input::get('eat');
			  $ad_des = Input::get('eas');
			  if(empty($_POST['af'])){
					$ad_footer = '0';
				}else{
					$ad_footer ='1';
				}
				if(empty($_POST['ap'])){
					$ad_p_page = '0';
				}else{
					$ad_p_page ='1';
				}
				if(empty($_POST['ast'])){
					$ad_st = '0';
				}else{
					$ad_st ='1';
				}			  
			  $tkn = $_POST['token'];
			  $adv_id = Input::get('ad_id');
			  $adv->edit_adv($ad_title,$ad_url,$ad_footer,$ad_p_page,$ad_st,$adv_id,$tkn);
			   
	}
	
	include('header.php');

?>

            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    Edit Advertising
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Users</a></li>
                        <li><a href="#">Partners</a></li>
                        <li class="active"> Edit Advertising</li>
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
									<button type="button" style="" class="btn btn-success"><i class="fa fa-share-square-o"></i> Edit Advertising</button>
								</div>
								<div class="col-md-8">
									<header class="pull-right">
										<button type="button"  id="myButton" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
										<button type="button"  class="btn btn-danger" onclick="window.history.back()"><i class="fa fa-reply"></i> Cancel</button>
									</header>
								</div>
							</div>
                            
                            <div class="row">
								<div class="panel-body">
									<div class="form">
										<form class="cmxform form-horizontal tasi-form" id="basic-form" method="POST" action="<?php Config::get('site/action'); ?>" enctype="multipart/form-data">
											<input type="hidden" name="token" value="<?php echo $token; ?>" />	
											<input type="hidden" name="adv_id" value="<?php echo $adv_id; ?>" />
											<?php $row = $adv->edit_show_adv($adv_id); foreach($row as $key){ ?>
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>Title *</b></label>
												<div class="col-lg-10">
													<input class=" form-control" id="firstname" name="eat" value="<?php echo $key['title'];?>" type="text" placeholder="Advertising Title" />
												</div>
											</div>
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>Script *</b></label>
												<div class="col-lg-10">
													<input class=" form-control" id="firstname" name="eas" value="<?php echo $key['url'];?>" type="text" placeholder="Advertising Script" />
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Footer</label>
												<div class="col-lg-10">
													<input type="checkbox" name="af" value="<?php echo $key['ad_footer'];?>" class="js-switch-small-green" checked/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Properties</label>
												<div class="col-lg-10">
													<input type="checkbox" name="ap" value="<?php echo $key['ad_p_page'];?>" class="js-switch-small-purple" checked/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Status</label>
												<div class="col-lg-10">
													<input type="checkbox" name="ast" value="<?php echo $key['ad_st'];?>" class="js-switch-small-red" checked/>
												</div>
											</div>
											<?php  } ?>
											<div class="form-group">
												<div class="col-lg-offset-2 col-lg-10">
													<button class="btn btn-success" type="submit" style="display:none;">Save</button>
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
            