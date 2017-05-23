<?php 
	include('common_head.php');
	if(($_SERVER['REQUEST_METHOD'] == "POST") ){	
				 $fn = Input::get('first_name');
				 $ln = Input::get('last_name');
				 $un = Input::get('un');
				 $em = Input::get('em');
				 $ad1 = Input::get('ad1');
				 $ad2 = Input::get('ad2');
				 $hidden_img = Input::get('hidden_img');
				 $token = Input::get('token');
				 $user_id = Input::get('user_id');			
				 $admin->admin_update($fn,$ln,$un,$em,$ad1,$ad2,'img',$hidden_img,$user_id,$token);
				 } 
	
	include('header.php');
?>

            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    Settings Page
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Users</a></li>
                        <li><a href="#">Partners</a></li>
                        <li class="active"> Settings Page</li>
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
									<button type="button" style="" class="btn btn-success"><i class="fa fa-sliders"></i> Account Settings</button>
								</div>
								<div class="col-md-8"><header class="pull-right">
									<button type="button"  id="myButton" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
									<button type="button"  class="btn btn-danger" onclick="window.history.back()"><i class="fa fa-reply"></i> Cancel</button>
								</header></div>
							</div>
                            
                            <div class="row">
								<div class="panel-body">
									<div class="form">
                                    <h3></h3>
										<form class="cmxform form-horizontal tasi-form" id="basic-form" method="post" action="<?php Config::get('site/action'); ?>" enctype="multipart/form-data">
                                        <input type="hidden" name="token" value="<?php echo $token; ?>" />	
                                        <input type="hidden" name="hidden_img" value="<?php echo $admin->admin_data('user_img');?>" />	
                                        <input type="hidden" name="user_id" value="<?php echo $admin->admin_data('user_id');?>" />	
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>First Name</b></label>
												<div class="col-lg-8">
													<input class=" form-control" id="firstname" name="first_name" type="text" placeholder="First Name" value="<?php echo $admin->admin_data('user_first_name');?>" />
												</div>
											</div>
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>Last Name</b></label>
												<div class="col-lg-8">
                                                <input class=" form-control" id="lastname" name="last_name" type="text" placeholder="First Name" value="<?php echo $admin->admin_data('user_last_name');?>" />
													
												</div>
											</div>
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>Username</b></label>
												<div class="col-lg-8">
													<input class=" form-control" id="firstname" name="un" type="text" placeholder="Username"  value="<?php echo $admin->admin_data('user_username');?>" />
												</div>
											</div>
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>Email</b></label>
												<div class="col-lg-8">
													<input class=" form-control" id="firstname" name="em" type="text" placeholder="Email"  value="<?php echo $admin->admin_data('user_email');?>" />
												</div>
											</div>
                                            <div class="form-group  gal-upload">
                                                            <label class="col-lg-2 control-label"><b>Profile Image</b></label>
                                                            <div class="col-lg-4">
                                                            <img  id="uploadPreview"  style="height:70px; width:70px;" data-placeholder="" class="image marginR10" src="<?php echo $admin->admin_data('user_img');?>" alt="" >
                                                               <input id="uploadImage" type="file" name="img" onChange="PreviewImage();" />
                                                            </div>
                                                        </div>
											<div class="form-group">
												<label class="col-lg-2 col-sm-2 control-label"><b>Address</b></label>
												<div class="col-lg-8">
													<textarea name="ad1" class="form-control" id="" cols="30" rows="8"><?php echo $admin->admin_data('user_address');?></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-2 col-sm-2 control-label"><b>Address 2</b></label>
												<div class="col-lg-8">
													<textarea name="ad2" class="form-control" id="" cols="30" rows="8"><?php echo $admin->admin_data('user_address2');?></textarea>
												</div>
											</div>
                                            
											
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