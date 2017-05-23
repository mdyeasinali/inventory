<?php
	include('common_head.php');
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		  if(empty($_REQUEST['it'])|| empty($_REQUEST['id']))
			{
		 	$admin->url_return(array('add_information.php','Some of fields is empty','error',Input::get('token')));
			  }else{
				$it = Input::get('it');
				$ifd = Input::get('id');
				$mtt = Input::get('imtt');
				$mtd = Input::get('imtd');
				$mtk = Input::get('imtk');
					if(empty(Input::get('itop'))){
					  $itop = '0';
					  }else{
						  $itop = '1';
						  }
				
				$tkn = Input::get('token');
				$info->add_information($it,$ifd,$mtt,$mtd,$mtk,$itop,$tkn);
			  }	  
	  }
  include('header.php');
  ?>

            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    Add Information
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Users</a></li>
                        <li><a href="#">Partners</a></li>
                        <li class="active">Add Informations</li>
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
									<button type="button" style="" class="btn btn-success"><i class="fa fa-info"></i> Add Informations</button>
								</div>
								<div class="col-md-8"><header class="pull-right">
									<button type="button"  id="myButton" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
									<button type="button"  class="btn btn-danger" onclick="window.history.back()"><i class="fa fa-reply"></i> Cancel</button>
								</header></div>
							</div>
                            <div class="row">                            
								<div class="panel-body">
									<div class="form">
										<form class="cmxform form-horizontal tasi-form" id="basic-form" method="POST" action="<?php Config::get('site/action'); ?>">
											<input type="hidden" name="token" value="<?php echo $token; ?>" />
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>Information Title *</b></label>
												<div class="col-lg-10">
													<input class=" form-control" id="firstname" name="it" type="text" placeholder="Information Title" required />
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-2 col-sm-2 control-label"><b>Description</b> </label>
												<div class="col-lg-10">
													<textarea name="id" class=" form-control" id="" cols="30" rows="10"></textarea>
												</div>
											</div>
											
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>Meta Tag Title</b></label>
												<div class="col-lg-10">
													<input class=" form-control" id="firstname" name="imtt" type="text" placeholder="Meta Tag Title" />
												</div>
											</div>
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>Meta Tag Description</b></label>
												<div class="col-lg-10">
													<input class=" form-control" id="firstname" name="imtd" type="text" placeholder="Meta Tag Description" />
												</div>
											</div>
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>Meta Tag Keyword</b></label>
												<div class="col-lg-10">
													<input class=" form-control" id="firstname" name="imtk" type="text" placeholder="Meta Tag Keyword" />
												</div>
											</div>
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>SEO Keyword</b></label>
												<div class="col-lg-10">
													<input class=" form-control" id="firstname" name="isk" type="text" placeholder="Disabled SEO Keyword…" disabled />
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label col-lg-2" for="inputSuccess"><b>Bottom</b></label>
												<div class="col-lg-10">
													<input type="checkbox" class="js-switch-large" name="itop" checked/>
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