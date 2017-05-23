<?php include('header.php');?>
            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                   Customer Page
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">User</a></li>
                        <li class="active">Customer Page</li>
                    </ol>
                </div>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">
                <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
							<div class="row">
								<div class="col-md-4">
									<button type="button" style="" class="btn btn-success"><i class="fa fa-stack-overflow"></i> All Customer</button>
								</div>
								<div class="col-md-8">
									<header class="pull-right">
										<a href="add_customer.php" class=""><button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add </button></a>
										<a href=""><button type="button" class="btn btn-danger "><i class="fa fa-trash-o"></i> Delete </button></a>
									</header>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<table class="table responsive-data-table data-table" id="checkAll">
										<thead>
											<tr>
												<th id="masterCh" class="ch"><input type="checkbox" name="checkbox"  id="selectall" value="all" class="styled" /></th>
												<th class="hidden-xs"><i class="fa  fa-file-text-o"></i> ID</th>
												<th><i class="fa fa-bookmark"></i> Customer name</th>
												<th><i class="fa fa-envelope-o"></i> Email</th>
												<th class="hidden-xs"><i class="fa fa-cog"></i> Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="chChildren"><input type="checkbox" name="check_list[]" class="selectedId styled" id="selectall" value="#" onclick="resetSelectAll()"; /></td>
												<td class="hidden-xs">
													1
												</td>
												<td>
													Jones
												</td>
												<td>
													Yes
												</td>
											   
												<td class="hidden-xs">
													<button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>                                
												</td>
											</tr>
											<tr>
												<td class="chChildren"><input type="checkbox" name="check_list[]" class="selectedId styled" id="selectall" value="#" onclick="resetSelectAll()"; /></td>
												<td class="hidden-xs">
													1
												</td>
												<td>
													Jones
												</td>
												<td>
													Yes
												</td>
											   
												<td class="hidden-xs">
													<button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>                                
												</td>
											</tr>
											<tr>
												<td class="chChildren"><input type="checkbox" name="check_list[]" class="selectedId styled" id="selectall" value="#" onclick="resetSelectAll()"; /></td>
												<td class="hidden-xs">
													1
												</td>
												<td>
													Jones
												</td>
												<td>
													Yes
												</td>
											   
												<td class="hidden-xs">
													<button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>                                
												</td>
											</tr>
											<tr>
												<td class="chChildren"><input type="checkbox" name="check_list[]" class="selectedId styled" id="selectall" value="#" onclick="resetSelectAll()"; /></td>
												<td class="hidden-xs">
													1
												</td>
												<td>
													Jones
												</td>
												<td>
													Yes
												</td>
											   
												<td class="hidden-xs">
													<button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>                                
												</td>
											</tr>
										</tbody>
										</table>
									</div>
								</div>
							</section>
						</div>
					</div>

                

            </div>
            <!--body wrapper end-->
            <script type="text/javascript">
				$(document).ready(function () {
					$('#selectall').click(function () {
						 var checked = $(this).is(':checked');
						
						$('.selectedId').each(function () {
							var checkBox = $(this);
							console.debug(checkBox);
							if (checked) {
								checkBox.prop('checked', true);                
							}
							else {
								checkBox.prop('checked', false);                
							}
						});
						
					});
				});
			</script>
            
<?php include('footer.php'); ?>