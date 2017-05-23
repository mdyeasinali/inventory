<?php
	include('common_head.php');
	$pat_id = Input::get('p_id'); 
	if(($_SERVER['REQUEST_METHOD'] == "POST") ){
	 $fn = Input::get('fn');
	 $ln = Input::get('ln');
	 $em = Input::get('em');
	 $un = Input::get('un');
	 $pw = Input::get('pw'); 
	 $ad1 = Input::get('ad1');
	 $h_img = Input::get('h_img');
	 $pat_id = Input::get('pat_id');	
	 $token = Input::get('token');	
	 
	 $users->users_update($fn,$ln,$em,$un,$ad1,$ad2,'u_img',$h_img,$pat_id,$token);
	  }
	include('header.php');
	
?>

            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    Updated Informations
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Users</a></li>
                        <li><a href="#">Partners</a></li>
                        <li class="active"> updated Partners</li>
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
									<button type="button" style="" class="btn btn-success"><i class="fa fa-shield"></i> Updated </button>
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
										<form class="cmxform form-horizontal tasi-form" id="basic-form" method="post" action="<?php Config::get('site/aciton'); ?>" enctype="multipart/form-data">
                                         <input type="hidden" name="token" value="<?php echo $token; ?>" />									
                                         <input type="hidden" name="pat_id" value="<?php echo $pat_id; ?>" />
                                         <?php $row = $users->update_show_user($pat_id); foreach($row as $val){ ?>
                                         <input type="hidden" name="h_img" value="<?php echo $val['user_img']; ?>" />
											<div class="form-group ">
												<label for="firstname" class= "control-label col-lg-2"><b>Firstname</b></label>
												<div class="col-lg-10">
													<input class=" form-control" id="firstname" name="fn" type="text"value="<?php echo $val['fname']; ?>" />
												</div>
											</div>
											<div class="form-group ">
												<label for="lastname" class="control-label col-lg-2"><b>Lastname</b></label>
												<div class="col-lg-10">
													<input class=" form-control" id="lastname" name="epln" type="text" value="<?php echo $val['lname'];?>" />
												</div>
											</div>
											<div class="form-group ">
												<label for="username" class="control-label col-lg-2"><b>Username</b></label>
												<div class="col-lg-10">
													<input class="form-control " id="username" name="epun" type="text"  value="<?php echo $val['uname']; ?>" />
												</div>
											</div>
											
											<div class="form-group ">
												<label for="email" class="control-label col-lg-2"><b>Email</b></label>
												<div class="col-lg-10">
													<input class="form-control " id="email" name="em" type="email" value="<?php echo $val['uemail']; ?>" />
												</div>
											</div>
                                            <div class="form-group ">
                                                            <label class="col-lg-2 control-label">Image </label>
                                                            <div class="col-lg-4">
                                                            <img  id="uploadPreview"  style="height:100px; width:160px;" data-placeholder="" class="image marginR10" src="<?php echo $val['user_img']; ?>" alt="" >
                                                               <input id="uploadImage" class="file1" type="file" name="u_img" onChange="PreviewImage();" />
                                                            </div>
                                                        </div>
											<div class="form-group">
												<label class="col-lg-2 col-sm-2 control-label"><b>Address</b> </label>
												<div class="col-lg-10">
													<textarea name="ad1" class="form-control" id="" cols="30" rows="10"><?php echo $val['uadd']; ?></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-2 col-sm-2 control-label"><b>Address2 </b></label>
												<div class="col-lg-10">
													<textarea name="ad2" class="form-control" id="" cols="30" rows="10"><?php echo $val['uadd2']; ?></textarea>
												</div>
											</div>
                                            <?php } ?>
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