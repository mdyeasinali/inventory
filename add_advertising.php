<?php
	include('common_head.php');
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		  if(empty($_REQUEST['at'])|| empty($_REQUEST['as']))
			{
		 	$admin->url_return(array('advertiseing.php','Some of fields is empty','error',$_POST['token']));
			  }else{
				$ad_title = Input::get('at');
				$ad_url = Input::get('as');
					if(empty(Input::get('af'))){
					  $ad_footer = '0';
					  }else{
						  $ad_footer = '1';
						  }
					if(empty(Input::get('ap'))){
					  $ad_p_page = '0';
					  }else{
						  $ad_p_page = '1';
						  }
					if(empty(Input::get('ast'))){
					  $ad_st = '0';
					  }else{
						  $ad_st = '1';
						  }
				
				$tkn = Input::get('token');
				$adv->add_adv($ad_title,$ad_url,$ad_footer,$ad_p_page,$ad_st,$tkn);
			  }	  
	  }
  include('header.php');
  ?>

            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    Add Advertising
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Advertising Page</a></li>
                        <li class="active"> Add Advertising</li>
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
									<button type="button" style="" class="btn btn-success"><i class="fa fa-share-square-o"></i> Add Advertiseing</button>
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
										<form class="cmxform form-horizontal tasi-form" id="basic-form" method="POST" action="<?php Config::get('site/action'); ?>">
											<input type="hidden" name="token" value="<?php echo $token; ?>" />
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>Title *</b></label>
												<div class="col-lg-10">
													<input class=" form-control" id="firstname" name="at" type="text" placeholder="Advertiseing Title" />
												</div>
											</div>
												
                                            <div class="form-group">
                                            <label for="firstname" class="control-label col-lg-2"><b>Script *</b></label>
                                            <div class="col-lg-10">                                                
                                                <input type="text" class="form-control" name="as" id="g-url" placeholder="../images/default.jpg">
                                                </div>
                                            </div>	
                                            									
											<div class="form-group">
												<label class="col-sm-2 control-label col-lg-2" for="inputSuccess"><b>Footer</b></label>
												<div class="col-lg-10">
													<input type="checkbox" name="af" class="js-switch-small-blue" checked/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label col-lg-2" for="inputSuccess"><b>Properties</b></label>
												<div class="col-lg-10">
													<input type="checkbox" name="ap" class="js-switch-small-purple" checked/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label col-lg-2" for="inputSuccess"><b>Status</b></label>
												<div class="col-lg-10">
													<input type="checkbox" name="ast" class="js-switch-small-red" checked/>
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