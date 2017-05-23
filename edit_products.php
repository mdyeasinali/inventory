<?php 
include('common_head.php');	
if(($_SERVER['REQUEST_METHOD'] == "POST")){
			 //start--------------------------------tab1 
			 $pro_id = Input::get('pro_id');
			 $p_pt = Input::get('p_pt');
			 $pd = Input::get('pd');
			 $mtt = Input::get('mtt');
			 $mtd = Input::get('mtd');
			 
			 //start--------------------------------tab2 
			 $ex_date = Input::get('ex_date');
			 $pon = Input::get('pon');	
			 $pan = Input::get('pan');
			 $pl = Input::get('pl');
			 $pp = Input::get('pp');
			 $pm = Input::get('pm');
			 $pml = Input::get('pml');
			 $hed_image = Input::get('hed_image');
			 $hed_sl1 = Input::get('hed_sl1');
			 $hed_sl2 = Input::get('hed_sl2');
			 $hed_sl3 = Input::get('hed_sl3');
			 $hed_sl4 = Input::get('hed_sl4');
			 $hed_plans_img = Input::get('hed_plans_img');
			 if(empty(Input::get('ps'))){
					  $ps = '0';
					  }else{
						  $ps = '1';
						  }
			 //start--------------------------------tab3
			 $p_dom = Input::get('p_dom');	
			 $p_area = Input::get('p_area');
			 $p_bed = Input::get('p_bed');
			 $p_dining = Input::get('p_dining');
			 $p_bath = Input::get('p_bath');
			 $p_gar = Input::get('p_gar'); 
			 
			 // start------------------------------tab 4
			  if(empty(Input::get('p_air'))){
					  $p_air = '0';
					  }else{
						  $p_air = '1';
						  }
						  
			 if(empty(Input::get('p_bal'))){
					  $p_bal = '0';
					  }else{
						  $p_bal = '1';
						  }
			 if(empty(Input::get('p_ct'))){
					  $p_ct = '0';
					  }else{
						  $p_ct = '1';
						  }
			 if(empty(Input::get('p_cp'))){
					  $p_cp = '0';
					  }else{
						  $p_cp = '1';
						  }
			 if(empty(Input::get('p_dish'))){
					  $p_dish = '0';
					  }else{
						  $p_dish = '1';
						  }
			 if(empty(Input::get('p_fridge'))){
					  $p_fridge = '0';
					  }else{
						  $p_fridge = '1';
						  }
			 if(empty(Input::get('p_grill'))){
					  $p_grill = '0';
					  }else{
						  $p_grill = '1';
						  }
						  
			  if(empty(Input::get('p_heating'))){
					  $p_heating = '0';
					  }else{
						  $p_heating = '1';
						  }
			if(empty(Input::get('p_micro'))){
					  $p_micro = '0';
					  }else{
						  $p_micro = '1';
						  }
						  
			  if(empty(Input::get('p_oven'))){
					  $p_oven = '0';
					  }else{
						  $p_oven = '1';
						  }
						 
			 if(empty(Input::get('p_parking'))){
					  $p_parking = '0';
					  }else{
						  $p_parking = '1';
						  }
			if(empty(Input::get('p_terrace'))){
					  $p_terrace = '0';
					  }else{
						  $p_terrace = '1';
						  }
			if(empty(Input::get('p_spr'))){
					  $p_spr = '0';
					  }else{
						  $p_spr = '1';
						  }
						  
			 if(empty(Input::get('p_toast'))){
					  $p_toast = '0';
					  }else{
						  $p_toast = '1';
						  }
			 if(empty(Input::get('p_den'))){
					  $p_den = '0';
					  }else{
						  $p_den = '1';
						  }
			 if(empty(Input::get('p_op'))){
					  $p_op = '0';
					  }else{
						  $p_op = '1';
						  }
			 if(empty(Input::get('p_ig'))){
					  $p_ig = '0';
					  }else{
						  $p_ig = '1';
						  }
			 if(empty(Input::get('p_int'))){
					  $p_int = '0';
					  }else{
						  $p_int = '1';
						  }
			 if(empty(Input::get('p_out'))){
					  $p_out = '0';
					  }else{
						  $p_out = '1';
						  }
						  
			  if(empty(Input::get('p_rt'))){
					  $p_rt = '0';
					  }else{
						  $p_rt = '1';
						  }
						 
	
			 $tkn = Input::get('token');		
		  	 $Property->update_properties($p_pt,$pd,$mtt,$mtd,'pro_image',$hed_image,'sl_img1',$hed_sl1,'sl_img2',$hed_sl2,'sl_img3',$hed_sl3,'sl_img4',$hed_sl4,'pln_image',$hed_plans_img,$pon,$pan,$pl,$pm,$pml,$pro_type,$pro_st,$ex_date,$pp,$p_dom,$p_area,$p_bed,$p_dining,$p_bath,$p_gar,$p_air,$p_bal,$p_ct,$p_cp,$p_dish,$p_fridge,$p_grill,$p_heating,$p_micro,$p_oven,$p_parking,$p_terrace,$p_spr,$p_toast,$p_den,$p_op,$p_ig,$p_int,$p_out,$p_rt,$ps,$pro_id,$token);
		  }
		include('header.php');
		  ?>
            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                   Update Properties Page
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Properties</a></li>
                        <li class="active">Update Properties Page</li>
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
									<button type="button" style="" class="btn btn-success"><i class="fa fa-cc-discover"></i> Update Properties</button>
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
                                        <input type="hidden" name="pro_id" value="<?php echo $pro_id ; ?>" />
                                        <?php 
											$get_data = $Property->edit_show_property($pro_id);
											foreach($get_data as $key){ 
										?>
                                        <input type="hidden" name="hed_image" value="<?php echo $key['pro_img']; ?>" />
                                        <input type="hidden" name="hed_sl1" value="<?php echo $key['sl_img1']; ?>" />
                                        <input type="hidden" name="hed_sl2" value="<?php echo $key['sl_img2']; ?>" />
                                        <input type="hidden" name="hed_sl3" value="<?php echo $key['sl_img3']; ?>" />
                                        <input type="hidden" name="hed_sl4" value="<?php echo $key['sl_img4']; ?>" />
                                        
                                        <input type="hidden" name="hed_plans_img" value="<?php echo $key['plans_img']; ?>" />
                                    	
											<!--tab nav start-->
											<section class="isolate-tabs">
												<ul class="nav nav-tabs">
													<li class="active">
														<a data-toggle="tab" href="#home-iso"><b>General</b></a>
													</li>
													<li class="">
														<a data-toggle="tab" href="#store-iso"><b>Data</b></a>
													</li>
                                                    <li class="">
														<a data-toggle="tab" href="#additional-iso"><b>Additional </b></a>
													</li>
                                                    <li class="">
														<a data-toggle="tab" href="#amenities-iso"><b>Amenities</b></a>
													</li>
                                                    <li class="">
														<a data-toggle="tab" href="#gallary-iso"><b>Gallary</b></a>
													</li>
													
												</ul>
												<div class="panel-body">
													<div class="tab-content">
														<div id="home-iso" class="tab-pane active">
                                                        
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2"> Title</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="p_pt"  value="<?php echo $key['pro_title']; ?>"  minlength="2" type="text" required />
																</div>
															</div>
                                                            <div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Description</label>
																<div class="col-lg-10">
																	<textarea class="form-control " id="ccomment" name="pd" > <?php echo $key['dis']; ?></textarea>
																</div>
															</div>
															
                                                            <div class="form-group ">
																<label for="cname" class="control-label col-lg-2"> Meta Tag Title</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="mtt"   value="<?php echo $key['m_title']; ?>"  minlength="2" type="text" required />
																</div>
															</div>
                                                            <div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Meta Tag Description</label>
																<div class="col-lg-10">
																	<textarea class="form-control " id="ccomment" name="mtd" > <?php echo $key['m_dis']; ?></textarea>
																</div>
															</div>
                                                            
															
														</div>
                                                         <!-- ========================= tab1==============================-->
														<div id="store-iso" class="tab-pane">
															<div class="form-group  gal-upload">
                                                            <label class="col-lg-2 control-label">Property Image</label>
                                                            <div class="col-lg-4">
                                                               <img  id="uploadPreview2"  style="height:70px; width:70px;" data-placeholder="" class="image marginR10" src="<?php echo $key['pro_img']; ?>" alt="" >
                                                                <input id="uploadImage2" type="file" name="pro_image" onChange="PreviewImage2();" />
                                                            </div>
                                                        </div>
                                                        	<div class="form-group  gal-upload">
                                                            <label class="col-lg-2 control-label">Plans Image</label>
                                                            <div class="col-lg-4">
                                                            <img  id="uploadPreview"  style="height:70px; width:70px;" data-placeholder="" class="image marginR10" src="<?php echo $key['plans_img']; ?>" alt="" >
                                                               <input id="uploadImage" type="file" name="pln_image" onChange="PreviewImage();" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-2">Expiry date</label>
                                                            <div class="col-lg-10">
                            
                                                                <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
                                                                    <input type="text" readonly=""  value="<?php echo $key['ex_date']; ?>" name="ex_date"  size="16" class="form-control">
                                                                      <span class="input-group-btn add-on">
                                                                        <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                                                      </span>
                                                                </div>
                                                                <span class="help-block">Select date</span>
                                                            </div>
                                                        </div>
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2"> Owner Name</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="pon"   value="<?php echo $key['owner_name']; ?>"minlength="2" type="text"  required />
																</div>
															</div>
                                                            <div class="form-group ">
																<label for="cname" class="control-label col-lg-2"> Agents Name</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="pan"  value="<?php echo $key['agents_name']; ?>" minlength="2" type="text"  required />
																</div>
															</div>                                                            
                                                            <div class="form-group ">
                                                                <label for="cname" class="control-label col-lg-2">Locations</label>
                                                                <div class="col-lg-10">
                                                                    <input class=" form-control" id="pl" name="pl"  value="<?php echo $key['location']; ?>" minlength="2" type="text"  required />
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Price</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="pp"  value="<?php echo $key['price']; ?>" minlength="2" type="text"  required />
																</div>
															</div>	
                                                            <div class="form-group ">
																<label for="cname" class="control-label col-lg-2"> Map Latitude</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname"  value="<?php echo $key['latitude']; ?>" name="pm" minlength="2" type="text"  required />
																</div>
															</div>
                                                            <div class="form-group ">
																<label for="cname" class="control-label col-lg-2"> Map Longitude</label>
																<div class="col-lg-10">
																	<input class=" form-control" value="<?php echo $key['longitude']; ?>" id="cname" name="pml" minlength="2" type="text"  required />
																</div>
															</div>
                                                            <div class="form-group">
																<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Type</label>
																<div class="col-lg-10">
																	<select class="form-control m-b-10" name="pro_type">
																		<option value="<?php echo $key['type']; ?>">Sale</option>
																		<option value="<?php echo $key['type']; ?>">Rent</option>
																	</select>
																</div>
															</div>
															<div class="form-group">
																<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Status</label>
																<div class="col-lg-10">
																	<select class="form-control m-b-10" name="pro_st">
																		<option value="<?php echo $key['status2']; ?>" >available</option>
																		<option value="<?php echo $key['status2']; ?>" >sold</option>
																	</select>
																</div>
															</div>
															<div class="form-group ">
																<label for="firstname" class="control-label col-lg-2">SEO Keyword</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="firstname" name="isk" type="text" placeholder="Disabled SEO Keyword…" disabled />
																</div>
															</div>
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Status</label>
                                                                <div class="col-lg-10">
                                                                    <input type="checkbox"  name="ps"  value="<?php echo $key['pro_status']; ?>" class="js-switch-large" <?php echo $key['pro_status']; ?>/>
                                                                </div>
                                                            </div>														
														</div>
                                                        <!-- ========================= tab2==============================-->
                                                        <div id="additional-iso" class="tab-pane">
                                                        <div class="form-group ">
																<label for="cname" class="control-label col-lg-2">DOM</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="p_dom"   value="<?php echo $key['dom']; ?>"minlength="2" type="text"  required />
																</div>
															</div>
                                                            <div class="form-group ">
																<label for="cname" class="control-label col-lg-2"> Area (in sq ft)</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="p_area"   value="<?php echo $key['area']; ?>" minlength="2" type="text"  required />
																</div>
															</div>
                                                            <div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Bedrooms</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="p_bed"   value="<?php echo $key['bed_rooms']; ?>" minlength="2" type="text"  required />
																</div>
															</div>
                                                            <div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Dining Room</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="p_dining"  value="<?php echo $key['dining_room']; ?>"  minlength="2" type="text"  required />
																</div>
															</div>
                                                            <div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Bathrooms</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="p_bath"   value="<?php echo $key['baths']; ?>" minlength="2" type="text"  required />
																</div>
															</div>
                                                            <div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Garages</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="p_gar"  value="<?php echo $key['garages']; ?>"  minlength="2" type="text"  required />
																</div>
															</div>
                                                        </div>
                                                        <!-- ========================= tab3==============================-->
														<div id="amenities-iso" class="tab-pane">
															<div class="col-md-4 amenities-first">
																<!---amenities first Start--->                                                                 
                                                                <div class="form-group">
																	<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Air Conditioning</label>
																	<div class="col-lg-2">
                                                                    
																	   <input type="checkbox"  name="p_air"  value="<?php echo $key['p_air']; ?>"  class="checkbox1" <?php echo $key['p_air'];?> />
																	</div>
																</div>
                                                                <div class="form-group">
																	<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Balcony</label>
																	<div class="col-lg-2">
																	   <input type="checkbox" name="p_bal"  value="<?php echo $key['p_bal']; ?>" class="checkbox1" <?php echo $key['p_bal']; ?> />
																	</div>
																</div>  
                                                                <div class="form-group">
																	<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Cable TV</label>
																	<div class="col-lg-2">
																	   <input type="checkbox" name="p_ct"   value="<?php echo $key['p_ct']; ?>" class="checkbox1" <?php echo $key['p_ct']; ?> />
																	</div>
																</div>
                                                                <div class="form-group">
																	<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Coffee Pot</label>
																	<div class="col-lg-2">
																	   <input type="checkbox" name="p_cp"   value="<?php echo $key['p_cp']; ?>" class="checkbox1" <?php echo $key['p_cp']; ?> />
																	</div>
																</div>
                                                                <div class="form-group">
																	<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Dishwasher</label>
																	<div class="col-lg-2">
																	   <input type="checkbox" name="p_dish"  value="<?php echo $key['p_dish']; ?>" class="checkbox1" <?php echo $key['p_dish']; ?> />
																	</div>
																</div>
                                                                 
                                                                                                                   
																<div class="form-group">
																	<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Fridge</label>
																	<div class="col-lg-2">
																	   <input type="checkbox" name="p_fridge"  value="<?php echo $key['p_fridge']; ?>"class="checkbox1" <?php echo $key['p_fridge']; ?> />
																	</div>
																</div>
                                                                <div class="form-group">
																	<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Grill</label>
																	<div class="col-lg-2">
																	   <input type="checkbox" name="p_grill"   value="<?php echo $key['p_grill']; ?>"class="checkbox1"  <?php echo $key['p_grill']; ?>/>
																	</div>
																</div>
                                                                <div class="form-group">
																	<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Heating</label>
																	<div class="col-lg-2">
				 													   <input type="checkbox" name="p_heating"   value="<?php echo $key['p_heating']; ?>" class="checkbox1"  <?php echo $key['p_heating']; ?>/>
																	</div>
																</div>
                                                                <div class="form-group">
																	<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Microwave</label>
																	<div class="col-lg-2">
																	   <input type="checkbox" name="p_micro"   value="<?php echo $key['p_micro']; ?>" class="checkbox1" <?php echo $key['p_micro']; ?> />
																	</div>
																</div>
                                                                <div class="form-group">
																	<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Oven</label>
																	<div class="col-lg-2">
																	   <input type="checkbox" name="p_oven"  value="<?php echo $key['p_oven']; ?>" class="checkbox1" <?php echo $key['p_oven']; ?> />
																	</div>
																</div>
                                                                <div class="form-group">
																	<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Parking</label>
																	<div class="col-lg-2">
																	   <input type="checkbox" name="p_parking"  value="<?php echo $key['p_parking']; ?>" class="checkbox1" <?php echo $key['p_parking']; ?> />
																	</div>
																</div>
                                                                  
                                                                <div class="form-group">
																	<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Terrace</label>
																	<div class="col-lg-2">
																	   <input type="checkbox" name="p_terrace"  value="<?php echo $key['p_terrace']; ?>" class="checkbox1" <?php echo $key['p_terrace']; ?> />
																	</div>
																</div>
                                                                
																<!---amenities first End--->
															</div>
															<div class="col-md-4 amenities-second">
																<!---amenities Second Start--->
                                                              
                                                                
                                                                <div class="form-group">
																	<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Sprinkler System</label>
																	<div class="col-lg-2">
																	   <input type="checkbox" name="p_spr"  value="<?php echo $key['p_spr']; ?>" class="checkbox1" <?php echo $key['p_spr']; ?> />
																	</div>
																</div>
                                                                
                                                                <div class="form-group">
																	<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Toaster</label>
																	<div class="col-lg-2">
																	   <input type="checkbox" name="p_toast" value="<?php echo $key['p_toast']; ?>" class="checkbox1" <?php echo $key['p_toast']; ?> />
																	</div>
																</div>
                                                                
																<div class="form-group">
																	<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Den</label>
																	<div class="col-lg-2">
																	   <input type="checkbox" name="p_den" value="<?php echo $key['p_den']; ?>"  class="checkbox1" <?php echo $key['p_den']; ?> />
																	</div>
																</div>
																<div class="form-group">
																	<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Outdoor Pool</label>
																	<div class="col-lg-2">
																	   <input type="checkbox" name="p_op" value="<?php echo $key['p_op']; ?>"  class="checkbox1" <?php echo $key['p_op']; ?> />
																	</div>
																</div>
																<div class="form-group">
																	<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Indoor Gym</label>
																	<div class="col-lg-2">
																	   <input type="checkbox" name="p_ig"  value="<?php echo $key['p_ig']; ?>" class="checkbox1" <?php echo $key['p_ig']; ?> />
																	</div>
																</div>
																
																<div class="form-group">
																	<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Internet</label>
																	<div class="col-lg-2">
																	   <input type="checkbox" name="p_int"  value="<?php echo $key['p_int']; ?>"  class="checkbox1" <?php echo $key['p_int']; ?> />
																	</div>
																</div>
																
																<div class="form-group">
																	<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Outdoor fireplace</label>
																	<div class="col-lg-2">
																	   <input type="checkbox" name="p_out" value="<?php echo $key['p_out']; ?>"  class="checkbox1" <?php echo $key['p_out']; ?> />
																	</div>
																</div>
																
																<div class="form-group">
																	<label class="col-sm-2 control-label col-sm-2" for="inputSuccess">Roof Terrace</label>
																	<div class="col-lg-1">
																	   <input type="checkbox" name="p_rt" value="<?php echo $key['p_rt']; ?>" class="checkbox1" <?php echo $key['p_rt']; ?> />
																	</div>
																</div>
																<!---amenities Second End--->
															</div>
															<div class="col-md-4 amenities-second"></div>
                                                        
															
                                                              
                                                        </div>
                                                        <!-- ========================= tab4==============================-->
                                                        <div id="gallary-iso" class="tab-pane">
															<div class="col-md-4 amenities-first">
																<!---gallary first Start---> 
																<div class="form-group  gal-upload">
																	<label class="col-lg-2 control-label">Gallary Image One</label>
																	<div class="col-lg-4">
																	   <img  id="uploadPreview4"  style="height:70px; width:70px;" data-placeholder="" class="image marginR10" src="<?php echo $key['sl_img1']; ?>" alt="" >
																		<input id="uploadImage4" type="file" name="sl_img1" onChange="PreviewImage4();" />
																	</div>
																</div>  
																<div class="form-group  gal-upload">
																	<label class="col-lg-2 control-label">Gallary Image Two</label>
																	<div class="col-lg-4">
																	   <img  id="uploadPreview5"  style="height:70px; width:70px;" data-placeholder="" class="image marginR10" src="<?php echo $key['sl_img2']; ?>" alt="" >
																		<input id="uploadImage5" type="file" name="sl_img2" onChange="PreviewImage5();" />
																	</div>
																</div>  
																<div class="form-group  gal-upload">
																	<label class="col-lg-2 control-label">Gallary Image Three</label>
																	<div class="col-lg-4">
																	   <img  id="uploadPreview6"  style="height:70px; width:70px;" data-placeholder="" class="image marginR10" src="<?php echo $key['sl_img3']; ?>" alt="" >
																		<input id="uploadImage6" type="file" name="sl_img3" onChange="PreviewImage6();" />
																	</div>
																</div>  
																<div class="form-group  gal-upload">
																	<label class="col-lg-2 control-label">Gallary Image Four</label>
																	<div class="col-lg-4">
																	   <img  id="uploadPreview7"  style="height:70px; width:70px;" data-placeholder="" class="image marginR10" src="<?php echo $key['sl_img4']; ?>" alt="" >
																		<input id="uploadImage7" type="file" name="sl_img4" onChange="PreviewImage7();" />
																	</div>
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
       
            
<?php include('footer.php'); ?>