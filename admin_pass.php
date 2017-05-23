<?php 
	include('common_head.php');
	if(($_SERVER['REQUEST_METHOD'] == "POST") ){	
				$o_pw = Input::get('opw');
				 $n_pw = Input::get('pw');
				 $c_pw = Input::get('cpw');
				 $u_id = Input::get('u_id');
				 $tkn = Input::get('token');	
				 $admin->update_user_password($o_pw,$n_pw,$c_pw,$u_id,$tkn);
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
									<button type="button" style="" class="btn btn-success"><i class="fa fa-sliders"></i> Password Settings</button>
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
                                        <input type="hidden" name="u_id" value="<?php echo $admin->admin_data('user_id') ?>" />	
											<div>
												<h3></h3>
												<section>
													<div class="form-group clearfix">
														<label class="col-lg-2 control-label " for="userName"><b>Old Password *</b></label>
														<div class="col-lg-8">
															<input class="form-control" id="password" name="opw" type="password"  value="">

														</div>
													</div>
													<div class="form-group clearfix">
														<label class="col-lg-2 control-label " for="password"> <b>New Password *</b></label>
														<div class="col-lg-8">
															<input id="password" name="pw" type="password" class="required form-control">

														</div>
													</div>

													<div class="form-group clearfix">
														<label class="col-lg-2 control-label " for="confirm"><b>Confirm Password *</b></label>
														<div class="col-lg-8">
															<input id="confirm" name="cpw" type="password" class="required form-control">
														</div>
													</div>
													<div class="form-group">
														<div class="col-lg-offset-2 col-lg-10">
															<button class="btn btn-success" type="submit" style="display:none;">Save</button>
														</div>
													</div>
												</section>
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