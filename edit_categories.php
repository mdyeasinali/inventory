<?php include('header.php');?>
            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    Edit Category
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Users</a></li>
                        <li><a href="#">Partners</a></li>
                        <li class="active"> Edit Categories</li>
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
									<button type="button" style="" class="btn btn-success"><i class="fa fa-chain"></i> Edit Categories</button>
								</div>
								<div class="col-md-8"><header class="pull-right">
									<button type="button"  id="myButton" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
									<button type="button"  class="btn btn-danger" onclick="window.history.back()"><i class="fa fa-reply"></i> Cancel</button>
								</header></div>
							</div>
							<div class="row">
								<div class="panel-body">
									<div class="form">
										<form class="cmxform form-horizontal tasi-form" id="basic-form" method="get" action="#">
											<!--tab nav start-->
											<section class="isolate-tabs">
												<ul class="nav nav-tabs">
													<li class="active">
														<a data-toggle="tab" href="#gen-iso">General</a>
													</li>
													<li class="">
														<a data-toggle="tab" href="#data-iso">Data</a>
													</li>
												</ul>
												<div class="panel-body">
													<div class="tab-content">
														<div id="gen-iso" class="tab-pane active">
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Category Name</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="ecn" minlength="2" type="text" required placeholder="Category Name" />
																</div>
															</div>
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Description</label>
																<div class="col-lg-10">
																	<textarea class="summernote" name="ecd" style="width:75%;"></textarea>
																</div>
															</div>
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Meta Tag Title</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="ecmtt" minlength="2" type="text" required placeholder="Meta Tag Title" />
																</div>
															</div>
															<div class="form-group ">
																<label for="ccomment" class="control-label col-lg-2">Meta Tag Keyword</label>
																<div class="col-lg-10">
																	<textarea class="form-control " id="ccomment" name="ecmtk" required placeholder="Meta Tag Keyword"></textarea>
																</div>
															</div>
															<div class="form-group ">
																<label for="ccomment" class="control-label col-lg-2">Meta Tag Description</label>
																<div class="col-lg-10">
																	<textarea class="form-control " id="ccomment" name="ecmtd" required placeholder="Meta Tag Description"></textarea>
																</div>
															</div>
														</div>
														<div id="data-iso" class="tab-pane">
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2">Parent</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="ecp" minlength="2" type="text" required placeholder="Parent" />
																</div>
															</div>
															<div class="form-group ">
																<label for="cname" class="control-label col-lg-2">SEO Keyword</label>
																<div class="col-lg-10">
																	<input class=" form-control" id="cname" name="ecs" minlength="2" type="text" required placeholder="SEO Keyword" disabled />
																</div>
															</div>
															<div class="form-group">
																<label class="col-lg-2 col-sm-2 control-label">Image</label>
																<div class="col-lg-10">
																	<input id="file-4" name="img" class="file" type="file" multiple=true>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<!--tab nav start-->
										   
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