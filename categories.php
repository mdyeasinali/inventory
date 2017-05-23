<?php include('header.php');?>
            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    Category Page
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Properties</a></li>
                        <li class="active">Category Page</li>
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
									<button type="button" style="" class="btn btn-success"><i class="fa fa-chain"></i> All categories</button>
								</div>
								<div class="col-md-8">
									<header class="pull-right">
										<a href="add_categories.php" class=""><button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add </button></a>
										<a href=""><button type="button" class="btn btn-danger "><i class="fa fa-trash-o"></i> Delete </button></a>
									</header>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<table class="table responsive-data-table data-table" id="checkAll">
										<thead>
											<tr>
												<th id="masterCh" class="ch"><input type="checkbox" name="checkbox"  id="selectall" value="all" class="styled" /></th>
												<th class="hidden-xs"><i class="fa fa-bookmark"></i> Category Name</th>
												<th><i class="fa fa-image"></i> Category Image</th>
												<th><i class="fa fa-list-alt"></i> On Menu</th>
												<th class="hidden-xs"><i class="fa fa-cog"></i> Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="chChildren"><input type="checkbox" name="check_list[]" class="selectedId styled" id="selectall" value="#" onclick="resetSelectAll()"; /></td>
												<td class="hidden-xs">
													Quebec
												</td>
												<td>
													Jones
												</td>
												<td>
													Enable
												</td>
											   
												<td class="hidden-xs">
													<a href="edit_categories.php"><button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button></a>                                
												</td>
											</tr>
											<tr>
												<td class="chChildren"><input type="checkbox" name="check_list[]" class="selectedId styled" id="selectall" value="#" onclick="resetSelectAll()"; /></td>
												<td class="hidden-xs">
													Quebec
												</td>
												<td>
													Jones
												</td>
												<td>
													Enable
												</td>
											   
												<td class="hidden-xs">
													<a href="edit_categories.php"><button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button></a>                                
												</td>
											</tr>
											<tr>
												<td class="chChildren"><input type="checkbox" name="check_list[]" class="selectedId styled" id="selectall" value="#" onclick="resetSelectAll()"; /></td>
												<td class="hidden-xs">
													Quebec
												</td>
												<td>
													Jones
												</td>
												<td>
													Enable
												</td>
											   
												<td class="hidden-xs">
													<a href="edit_categories.php"><button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button></a>                                
												</td>
											</tr>
											<tr>
												<td class="chChildren"><input type="checkbox" name="check_list[]" class="selectedId styled" id="selectall" value="#" onclick="resetSelectAll()"; /></td>
												<td class="hidden-xs">
													Quebec
												</td>
												<td>
													Jones
												</td>
												<td>
													Enable
												</td>
											   
												<td class="hidden-xs">
													<a href="edit_categories.php"><button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button></a>                                
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