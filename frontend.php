<?php 
include('common_head.php');	
if(($_SERVER['REQUEST_METHOD'] == "POST")){
			 $st = Input::get('st');
			 $ss = Input::get('ss');
			 $sn = Input::get('sn');
			 $son = Input::get('son');
			 $pn = Input::get('pn'); 
			 $se = Input::get('se');
			 $sa = Input::get('sa');
			 $m_lat = Input::get('m_lat');
			 $m_lon = Input::get('m_lon');
			 $mk = Input::get('mk');	
			 $mt = Input::get('mt');
			 $md = Input::get('md');
			 $cr = Input::get('cr');
			 $fb = Input::get('fb');
			 $tw = Input::get('tw');
			 $gl = Input::get('gl');
			 $yt = Input::get('yt');
			 $hi_logo = Input::get('hi_logo');
			 $hi_bag_img = Input::get('hi_bag_img');
			 $hi_footer_logo = Input::get('hi_footer_logo');
			 $token = Input::get('token');		
		  	 $front->update_frontend($st,$ss,$sn,$son,$pn,$se,$sa,$m_lat,$m_lon,$mk,$mt,$md,'bag_img',$hi_bag_img,'f_logo',$hi_footer_logo,$cr,$fb,$tw,$gl,$yt,'s_logo',$hi_logo,$token);
		  }
		include('header.php');
		  ?>
            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                   Frontend Page
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Settings</a></li>
                        <li class="active">Frontend Page</li>
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
									<button type="button" style="" class="btn btn-success"><i class="fa fa-cc-discover"></i> Add Frontends</button>
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
                                        <?php 
											$get_data = $front->get_frontEnd_data();
											foreach($get_data as $key){ 
										?>
                                    	<input type="hidden" name="hi_logo" value="<?php echo $key['logo']; ?>" />
                                        <input type="hidden" name="hi_bag_img" value="<?php echo $key['bag_img']; ?>" />
                                        <input type="hidden" name="hi_footer_logo" value="<?php echo $key['footer_img']; ?>" />
											<!--tab nav start-->
											<section class="isolate-tabs">
												<ul class="nav nav-tabs">
													<li class="active">
														<a data-toggle="tab" href="#home-iso"><b>Header</b></a>
													</li>
													<li class="">
														<a data-toggle="tab" href="#store-iso"><b>Store</b></a>
													</li>
													<li class="">
														<a data-toggle="tab" href="#seo-iso"><b>Seo</b></a>
													</li>
													<li class="">
														<a data-toggle="tab" href="#footer-iso"><b>Footer</b></a>
													</li>
													<li class="">
														<a data-toggle="tab" href="#social-iso"><b>Social</b></a>
													</li>
												</ul>
												<div class="panel-body">
													<div class="tab-content">
                                                    <!--================================ tabe Home==========================-->
														<div id="home-iso" class="tab-pane active">
                                                        
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Site Title</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="st"  value="<?php echo $key['title']; ?>" minlength="2" type="text" required />
																</div>
															</div>
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Site Slogan</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="ss" minlength="2" type="text" value="<?php echo $key['slogan']; ?>"  required />
																</div>
															</div>
														<div class="form-group ">
                                                            <label class="col-lg-2 control-label">Site Logo </label>
                                                            <div class="col-lg-4">
                                                            <img  id="uploadPreview"  style="height:100px; width:160px;" data-placeholder="" class="image marginR10" src="<?php echo $key['logo']; ?>" alt="" >
                                                               <input id="uploadImage" class="file1" type="file" name="s_logo" onChange="PreviewImage();" />
                                                            </div>
                                                        </div>
														</div>
                                                    <!--================================ tabe Store==========================-->
														<div id="store-iso" class="tab-pane">
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Store name</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="sn" minlength="2" type="text" value="<?php echo $key['store_name']; ?>" required />
																</div>
															</div>
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Store Owner Name</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="son" minlength="2" type="text" value="<?php echo $key['store_owner_name']; ?>" required />
																</div>
															</div>
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Phone No:</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="pn" minlength="2" type="text" value="<?php echo $key['phone']; ?>"  required />
																</div>
															</div>
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Store Email:</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="se" minlength="2" type="text"value="<?php echo $key['email']; ?>"  required />
																</div>
															</div>
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Address:</label>
																<div class="col-lg-10">
																	<textarea class="form-control " id="ccomment" name="sa" required><?php echo $key['address']; ?></textarea>
																</div>
															</div>
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2"> Map Latitude</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="m_lat" value="<?php echo $key['maps_latitude']; ?>" minlength="2" type="text"  required />
																</div>
															</div>
                                                            <div class="form-group ">
																<label for="cname" class="control-label col-lg-2"> Map Longitude</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="m_lon" value="<?php echo $key['maps_longitude']; ?>" minlength="2" type="text"  required />
																</div>
															</div>
														</div>
                                                    <!--================================ tabe Seo==========================-->
														<div id="seo-iso" class="tab-pane">
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Meta Keyword</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="mk" minlength="2" type="text"value="<?php echo $key['meta_keyword']; ?>"  required />
																</div>
															</div>
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Meta Title</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="mt" minlength="2" type="text" value="<?php echo $key['meta_title']; ?>" required />
																</div>
															</div>
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Meta Description:</label>
																<div class="col-lg-10">
																	<textarea class="form-control " id="ccomment" name="md" required><?php echo $key['meta_dis']; ?></textarea>
																</div>
															</div>
														</div>
                                                    <!--================================ tabe Footer==========================-->
														<div id="footer-iso" class="tab-pane">
                                                        <div class="form-group  gal-upload">
                                                            <label class="col-lg-2 control-label">Background Images</label>
                                                            <div class="col-lg-4">
                                                              
                                                                <img  id="uploadPreview2"  style="height:100px; width:160px;" data-placeholder="" class="image marginR10" src="<?php echo $key['bag_img']; ?>" alt="" >
                                                                <input id="uploadImage2" type="file" name="bag_img" onChange="PreviewImage2();" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="col-lg-2 control-label">Logo </label>
                                                            <div class="col-lg-4">
                                                            <img  id="uploadPreview3"  style="height:100px; width:160px;" data-placeholder="" class="image marginR10" src="<?php echo $key['footer_img']; ?>" alt="" >
                                                               <input id="uploadImage3"   type="file" name="f_logo" onChange="PreviewImage3();" />
                                                            </div>
                                                        </div>
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Copyright:</label>
																<div class="col-lg-10">
																	<textarea class="form-control " id="ccomment" name="cr" required><?php echo $key['copy_text']; ?></textarea>
																</div>
															</div>
                                                            
														</div>
                                                    <!--================================ tabe Social==========================-->
														<div id="social-iso" class="tab-pane">
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Facebook</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="fb" minlength="2" type="text"value="<?php echo $key['facebook']; ?>" required />
																</div>
															</div>
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Twitter</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="tw" minlength="2" type="text" value="<?php echo $key['twitter']; ?>" required />
																</div>
															</div>
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Google</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="gl" minlength="2" type="text"value="<?php echo $key['google']; ?>"  required />
																</div>
															</div>
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Youtubbe</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="yt" minlength="2" type="text"value="<?php echo $key['youtube']; ?>" required />
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<!--tab nav start-->
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
            <script>

			  $(document).ready(function() {
				$('#selecctall').click(function(event) {  //on click
					if(this.checked) { // check select status
						$('.checkbox1').each(function() { //loop through each checkbox
							this.checked = true;  //select all checkboxes with class "checkbox1"              
						});
					}else{
						$('.checkbox1').each(function() { //loop through each checkbox
							this.checked = false; //deselect all checkboxes with class "checkbox1"                      
						});        
					}
				});
			   
			});
			
			
			function confirm_delete() {
				var txt;
				var r = confirm("Are You Sure to do this?");
				if (r == true) {					
					$( "#form-delete" ).submit();					
				}			
			}
			</script>
            
<?php include('footer.php'); ?>