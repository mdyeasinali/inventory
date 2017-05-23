<?php 
	include('common_head.php');
	$info_id = Input::get('info_id');
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$it = Input::get('eit');
		$ifd = Input::get('eid');
		$mtt = Input::get('eimtt');
		$mtd = Input::get('eimtd');
		$mtk= Input::get('eimtk');
		  if(empty($_POST['itop'])){
			  $ibtom = '0';
			  }else{
				  $ibtom = '1';
				  }
		$tkn = Input::get('token');
		$info_id = Input::get('info_id');
		$info->update_info($it,$ifd,$mtt,$mtd,$mtk,$ibtom,$tkn,$info_id);
	  }

	include('header.php');
?>

            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    Edit Information
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Users</a></li>
                        <li><a href="#">Partners</a></li>
                        <li class="active">Edit Informations</li>
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
									<button type="button" style="" class="btn btn-success"><i class="fa fa-info"></i> Edit Informations</button>
								</div>
								<div class="col-md-8"><header class="pull-right">
									<button type="button"  id="myButton" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
									<button type="button"  class="btn btn-danger" onclick="window.history.back()"><i class="fa fa-reply"></i> Cancel</button>
								</header></div>
							</div>
                            <div class="row">                            
								<div class="panel-body">
									<div class="form">
										<form class="cmxform form-horizontal tasi-form" id="basic-form" method="POST" action="<?php Config::get('site/action'); ?>" enctype="multipart/form-data">
											<input type="hidden" name="token" value="<?php echo $token; ?>" />	
											<input type="hidden" name="info_id" value="<?php echo $info_id; ?>" />
											<?php $row = $info->show_edit_info($info_id); 
											foreach($row as $key){ ?>
											
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>Information Title *</b></label>
												<div class="col-lg-10">
													<input class=" form-control" id="firstname" name="eit" value="<?php echo $key['title'];?>" type="text" placeholder="Information Title" />
												</div>
											</div>
											<div class="form-group ">
												<label for="cname" class="control-label col-lg-2"><b>Description</b></label>
												<div class="col-lg-10">
													<textarea name="eid" id="" cols="30" rows="10" class="wysihtml5 form-control"><?php echo $key['info_des'];?></textarea>
												</div>
											</div>
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>Meta Tag Title *</b></label>
												<div class="col-lg-10">
													<input class=" form-control" id="firstname" name="eimtt" value="<?php echo $key['info_m_title'];?>" type="text" placeholder="Meta Tag Title" required />
												</div>
											</div>
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>Meta Tag Description</b></label>
												<div class="col-lg-10">
													<textarea name="eimtd" id="" cols="30" rows="10" class="wysihtml5 form-control"><?php echo $key['info_m_des'];?></textarea>
												</div>
											</div>
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>SEO Keyword</b></label>
												<div class="col-lg-10">
													<input class=" form-control" id="firstname" name="eis" type="text" placeholder="SEO Keyword" disabled />
												</div>
											</div>
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>Meta Tag Keyword</b></label>
												<div class="col-lg-10">
													<input class=" form-control" id="firstname" name="eimtk" value="<?php echo $key['info_m_key'];?>" type="text" placeholder="Meta Tag Keyword" />
												</div>
											</div><div class="form-group">
												<label class="col-sm-2 control-label col-lg-2" for="inputSuccess"><b>Bottom</b></label>
												<div class="col-lg-10">
													<input type="checkbox" class="js-switch-large" name="itop" value="<?php echo $key['info_m_b'];?>" checked/>
												</div>
											</div>
											
											<?php }?>
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