<?php 
	include('common_head.php');
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$slider->delete_slider($token);	
	}
	include('header.php');
?>
            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    Slider Page
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Settings</a></li>
                        <li class="active">Slider Page</li>
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
									<button type="button" style="" class="btn btn-success"><i class="fa fa-sliders"></i> All Sliders</button>
								</div>
								<div class="col-md-8">
									<header class="pull-right">
										<a href="add_slide.php?token=<?php echo $token ;?>" class=""><button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add </button></a>
										<a href="#"onclick="confirm_delete()" id="delete"><button type="button" class="btn btn-danger "><i class="fa fa-trash-o"></i> Delete </button></a>
									</header>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<form action="<?php Config::get('site/aciton'); ?>" class="" id="form-delete" method="POST">
										<table class="table responsive-data-table data-table" id="checkAll">
										<thead>
											<tr>
												<th id="masterCh" class="ch"><input type="checkbox" name="checkbox" value="all" id="selecctall" class="styled" /></th>
												<th class="hidden-xs"><i class="fa  fa-file-text-o"></i> ID</th>
												<th class="hidden-xs"><i class="fa fa-sliders"></i> Slider Image</th>
												<th><i class="fa   fa-bookmark-o"></i> Slider Title</th>
												<th><i class="fa   fa-calendar"></i> Date</th>
												<th><i class="fa  fa-star-half-empty"></i> Status</th>
												<th class="hidden-xs"><i class="fa fa-cog"></i> Action</th>
											</tr>
										</thead>
										<tbody>
											<?php $row = $slider->slider_list();foreach($row as $key){?>
											<tr>
												<td class="chChildren"><input type="checkbox" name="check_list[]" value="<?php echo $key['id']; ?>" class="checkbox1" /></td>
												<td class="hidden-xs">
													<?php echo $key['id'];  ?>
												</td>
												<td class="hidden-xs">
													<a href="" ><img class="image marginR9" style="height:40px; width:50px; border="1px"" src="<?php  echo  $key['img'];  ?>"/></a>
												</td>
												<td class="hidden-xs">
													<?php echo $key['name']; ?>
												</td>
												<td>
													<?php echo $key['date'];  ?>
												</td>
												<td>
													<?php echo $key['status'];  ?>
												</td>
											   
												<td class="hidden-xs">
													<a  class="btn btn-success btn-xs" href="edit_slide.php?slider_id=<?php echo $key['id'];?>&token=<?php echo $token ;?>"><i class="fa fa-pencil"></i></a>                                
												</td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
									</form>
								</div>
							</div>
						</section>
					</div>
				</div>
            </div>
            <!--body wrapper end-->
            
<?php include('footer.php'); ?>