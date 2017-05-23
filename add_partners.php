<?php 
include('common_head.php');	
if(($_SERVER['REQUEST_METHOD'] == "POST") ){	
		if(empty($_REQUEST['fn'])||
			empty($_REQUEST['ln'])||
			empty($_REQUEST['em'])||
			empty($_REQUEST['un'])||
			empty($_REQUEST['pw']))
		{
			$admin->url_return(array('add_partners.php','Some of fields is empty','error',Input::get('token')));
			}else{				
				 $fn = Input::get('fn');
				 $ln = Input::get('ln');
				 $em = Input::get('em');
				 $un = Input::get('un');
				 $pw = Input::get('pw'); 
				 $ad1 = Input::get('ad1');
				 $ad2 = Input::get('ad2');	
				 $token = Input::get('token');		
				 $users->add_user($fn,$ln,$em,$un,$pw,$ad1,$ad2,'u_img',$token);
				 }
	}
 include('header.php');
 ?>

            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    Add Partners
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Users</a></li>
                        <li><a href="#">Partners</a></li>
                        <li class="active"> Add Partners</li>
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
									<button type="button"  class="btn btn-success"><i class="fa fa-shield"></i> Add Partners</button>
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
										<form class="cmxform form-horizontal tasi-form" id="basic-form" method="post" action="<?php Config::get('site/action'); ?>" enctype="multipart/form-data">
                                        <input type="hidden" name="token" value="<?php echo $token; ?>" />	
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>Firstname *</b></label>
												<div class="col-lg-10">
													<input class=" form-control" id="firstname" name="fn" type="text" required />
												</div>
											</div>
											<div class="form-group ">
												<label for="lastname" class="control-label col-lg-2"><b>Lastname  *</b></label>
												<div class="col-lg-10">
													<input class=" form-control" id="lastname" name="ln" type="text" required/>
												</div>
											</div>
											<div class="form-group ">
												<label for="username" class="control-label col-lg-2"><b>Username *</b></label>
												<div class="col-lg-10">
													<input class="form-control " id="username" name="un" type="text" required />
												</div>
											</div>
											<div class="form-group ">
												<label for="password" class="control-label col-lg-2"><b>Password *</b></label>
												<div class="col-lg-10">
													<input class="form-control " id="password" name="pw" type="password" required />
												</div>
											</div>
                                            <div class="form-group ">
                                                            <label class="col-lg-2 control-label"><b>Image</b> </label>
                                                            <div class="col-lg-4">
                                                            <img  id="uploadPreview"  style="height:100px; width:160px;" data-placeholder="" class="image marginR10" src="images/defalt-image.png" alt="" >
                                                               <input id="uploadImage" class="file1" type="file" name="u_img" onChange="PreviewImage();" />
                                                            </div>
                                                        </div>
                                            
                                            
											
											<div class="form-group ">
												<label for="email" class="control-label col-lg-2"><b>Email *</b></label>
												<div class="col-lg-10">
													<input class="form-control " id="email" name="em" type="email" required />
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-2 col-sm-2 control-label"><b>Address</b> </label>
												<div class="col-lg-10">
													<textarea name="ad1" class="form-control" id="" cols="30" rows="10"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-2 col-sm-2 control-label"><b>Address2 </b></label>
												<div class="col-lg-10">
													<textarea name="ad2" class="form-control" id="" cols="30" rows="10"></textarea>
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