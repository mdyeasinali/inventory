<?php
include('common_head.php');
if (($_SERVER['REQUEST_METHOD'] == "POST")) {
    if (empty($_REQUEST['p_pt'])) {
        $admin->url_return(array('add_products.php', 'Some of fields is empty', 'error', $token));
    } else {
        //start--------------------------------tab1
        $p_pt = Input::get('p_pt');
        $pd = Input::get('pd');
        $mtt = Input::get('mtt');
        $mtd = Input::get('mtd');
        //start--------------------------------tab2
        $ex_date = Input::get('ex_date');
        $pon = Input::get('pon');
        $pp = Input::get('pp');
        $pro_st = Input::get('pro_st');

        if (empty(Input::get('ps'))) {
            $ps = '0';
        } else {
            $ps = '1';
        }

        $pro_u_id = Input::get('pro_u_id');
        $tkn = Input::get('token');
        $Products->add_products($p_pt, $pd, 'pro_img', $ex_date, $pon, $pp, $pro_st, $ps, $token);
    }
}
include('header.php');
?>
    <!-- page head start-->
    <div class="page-head">
        <h3 class="m-b-less">
            Products Page
        </h3>
        <!--<span class="sub-title">Welcome to Static Table</span>-->
        <div class="state-information">
            <ol class="breadcrumb m-b-less bg-less">
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li class="active">Products Page</li>
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
                            <button type="button" style="" class="btn btn-success"><i class="fa fa-cc-discover"></i> Add
                                Products
                            </button>
                        </div>
                        <div class="col-md-8">
                            <header class="pull-right">
                                <button type="button" id="myButton" class="btn btn-success"><i class="fa fa-save"></i>
                                    Save
                                </button>
                                <button type="button" class="btn btn-danger" onclick="window.history.back()"><i
                                            class="fa fa-reply"></i> Cancel
                                </button>
                            </header>
                        </div>
                    </div>
                    <div class="row">
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal tasi-form" id="basic-form" method="post"
                                      action="<?php Config::get('site/action'); ?>" enctype="multipart/form-data">
                                    <input type="hidden" name="token" value="<?php echo $token; ?>"/>
                                    <input type="hidden" name="pro_u_id"
                                           value="<?php echo $admin->admin_data('user_id') ?>"/>


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
                                                <a data-toggle="tab" href="#gallary-iso"><b>Gallary</b></a>
                                            </li>
                                            <li class="">
                                                <a data-toggle="tab" href="#warehouse-iso"><b>Warehouse </b></a>
                                            </li>
                                            <li class="">
                                                <a data-toggle="tab" href="#supplier-iso"><b>Supplier </b></a>
                                            </li>


                                        </ul>
                                        <div class="panel-body">
                                            <div class="tab-content">
                                                <div id="home-iso" class="tab-pane active">

                                                    <div class="form-group ">
                                                        <label for="cname" class="control-label col-lg-2"> Title * <b>
                                                                *</b></label>
                                                        <div class="col-lg-10">
                                                            <input class=" form-control" id="cname" name="p_pt"
                                                                   minlength="2" type="text" required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label for="cname"
                                                               class="control-label col-lg-2">Description</label>
                                                        <div class=" col-lg-10">
                                                            <textarea class="form-control " id="ccomment"
                                                                      name="pd"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="code" class="control-label col-lg-2">Product Code *</label>
                                                        <div class="input-group">
                                                            <input type="text" name="code" value="" class="form-control" id="code" required="required" data-bv-field="code">
                                                            <span class="input-group-addon pointer" id="random_num" ">
                                <i class="fa fa-random"></i>
                            </span>
                                                        </div>
                                                        <span class="help-block">You can scan your barcode  and select the correct symbology below</span>
                                                        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="code" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter/select a value</small></div>

                                                    <div class="form-group ">
                                                        <label for="cname" class="control-label col-lg-2">Barcode
                                                            Symbology *</label>
                                                        <div class="col-lg-10">
                                                            <input class=" form-control" id="cname" name="p_pt"
                                                                   minlength="2" type="text" required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label for="cname" class="control-label col-lg-2">Brand</label>
                                                        <div class="col-lg-10">
                                                            <input class=" form-control" id="cname" name="p_pt"
                                                                   minlength="2" type="text" required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label for="cname" class="control-label col-lg-2">Product
                                                            Tax</label>
                                                        <div class="col-lg-10">
                                                            <input class=" form-control" id="cname" name="p_pt"
                                                                   minlength="2" type="text" required/>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- ========================= tab1==============================-->

                                                <div id="store-iso" class="tab-pane">
                                                    <div class="form-group  gal-upload">
                                                        <label class="col-lg-2 control-label">Product Image</label>
                                                        <div class="col-lg-4">
                                                            <img id="uploadPreview2" style="height:70px; width:70px;"
                                                                 data-placeholder="" class="image marginR10"
                                                                 src="images/defalt-image.png" alt="">
                                                            <input id="uploadImage2" type="file" name="pro_img"
                                                                   onChange="PreviewImage2();"/>
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="control-label col-lg-2">Expiry date</label>
                                                        <div class="col-lg-10">

                                                            <div data-date-viewmode="years"
                                                                 data-date-format="dd-mm-yyyy" data-date="12-02-2012"
                                                                 class="input-append date dpYears">
                                                                <input type="text" readonly="" value="12-02-2012"
                                                                       name="ex_date" size="16" class="form-control">
                                                                <span class="input-group-btn add-on">
																			<button class="btn btn-primary"
                                                                                    type="button"><i
                                                                                        class="fa fa-calendar"></i></button>
																		  </span>
                                                            </div>
                                                            <span class="help-block">Select date</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label for="cname" class="control-label col-lg-2"> Owner
                                                            Name</label>
                                                        <div class="col-lg-10">
                                                            <input class=" form-control" id="cname" name="pon"
                                                                   minlength="2" type="text" required/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group ">
                                                        <label for="cname" class="control-label col-lg-2">Price</label>
                                                        <div class="col-lg-10">
                                                            <input class=" form-control" id="cname" name="pp"
                                                                   minlength="2" type="text" required/>
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label col-lg-2"
                                                               for="inputSuccess">Status</label>
                                                        <div class="col-lg-10">
                                                            <select class="form-control m-b-10" name="pro_st">
                                                                <option>available</option>
                                                                <option>sold</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label for="firstname" class="control-label col-lg-2">SEO
                                                            Keyword</label>
                                                        <div class="col-lg-10">
                                                            <input class=" form-control" id="firstname" name="isk"
                                                                   type="text" placeholder="Disabled SEO Keyword…"
                                                                   disabled/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label col-lg-2"
                                                               for="inputSuccess">Status</label>
                                                        <div class="col-lg-10">
                                                            <input type="checkbox" name="ps" class="js-switch-large"
                                                                   checked/>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- ========================= tab2==============================-->
                                                <div id="gallary-iso" class="tab-pane">
                                                    <div class="col-md-4 amenities-first">
                                                        <!---gallary first Start--->
                                                        <div class="form-group  gal-upload">
                                                            <label class="col-lg-2 control-label">Gallary Image
                                                                One</label>
                                                            <div class="col-lg-4">
                                                                <img id="uploadPreview4"
                                                                     style="height:70px; width:70px;"
                                                                     data-placeholder="" class="image marginR10"
                                                                     src="images/defalt-image.png" alt="">
                                                                <input id="uploadImage4" type="file" name="sl_img1"
                                                                       onChange="PreviewImage4();"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group  gal-upload">
                                                            <label class="col-lg-2 control-label">Gallary Image
                                                                Two</label>
                                                            <div class="col-lg-4">
                                                                <img id="uploadPreview5"
                                                                     style="height:70px; width:70px;"
                                                                     data-placeholder="" class="image marginR10"
                                                                     src="images/defalt-image.png" alt="">
                                                                <input id="uploadImage5" type="file" name="sl_img2"
                                                                       onChange="PreviewImage5();"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group  gal-upload">
                                                            <label class="col-lg-2 control-label">Gallary Image
                                                                Three</label>
                                                            <div class="col-lg-4">
                                                                <img id="uploadPreview6"
                                                                     style="height:70px; width:70px;"
                                                                     data-placeholder="" class="image marginR10"
                                                                     src="images/defalt-image.png" alt="">
                                                                <input id="uploadImage6" type="file" name="sl_img3"
                                                                       onChange="PreviewImage6();"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group  gal-upload">
                                                            <label class="col-lg-2 control-label">Gallary Image
                                                                Four</label>
                                                            <div class="col-lg-4">
                                                                <img id="uploadPreview7"
                                                                     style="height:70px; width:70px;"
                                                                     data-placeholder="" class="image marginR10"
                                                                     src="images/defalt-image.png" alt="">
                                                                <input id="uploadImage7" type="file" name="sl_img4"
                                                                       onChange="PreviewImage7();"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ========================= tab3==============================-->
                                                <div id="warehouse-iso" class="tab-pane">


                                                        <div class="col-md-3 col-sm-3 col-xs-3"
                                                             style="padding-bottom:15px;">Warehouse 1<br>
                                                            <div class="form-group">
                                                                <input type="hidden" name="wh_1" value="1">
                                                                <input type="text" name="wh_qty_1" value=""
                                                                       class="form-control" id="wh_qty_1"
                                                                       placeholder="Quantity">
                                                            </div>
                                                            <div class="form-group"><input type="text" name="rack_1"
                                                                                           value="" class="form-control"
                                                                                           id="rack_1"
                                                                                           placeholder="Racks">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-3 col-xs-3"
                                                             style="padding-bottom:15px;">Warehouse 2<br>
                                                            <div class="form-group">
                                                                <input type="hidden" name="wh_2" value="2">
                                                                <input type="text" name="wh_qty_2" value=""
                                                                       class="form-control" id="wh_qty_2"
                                                                       placeholder="Quantity">
                                                            </div>
                                                            <div class="form-group"><input type="text" name="rack_2"
                                                                                           value="" class="form-control"
                                                                                           id="rack_2"
                                                                                           placeholder="Racks">
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>

                                                </div>
                                                <!-- ========================= tab4==============================-->
                                                <div id="supplier-iso" class="tab-pane">


                                                    <div class="form-group ">

                                                        <label class="control-label col-lg-2" for="supplier">Supplier</label>
                                                        <button type="button" class="btn btn-primary btn-xs" id="addSupplier">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                        <div class="col-lg-10">
                                                            <div class="form-group">
                                                                <input type="text" name="supplier_part_no" value="" class="form-control tip" id="supplier_part_no" placeholder="Supplier Part Number" data-original-title="" title="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-10">
                                                            <div class="form-group">
                                                                <input type="text" name="supplier_part_no" value="" class="form-control tip" id="supplier_part_no" placeholder="Supplier Part Number" data-original-title="" title="">
                                                            </div>
                                                        </div>


                                                    </div>

                                                    <div class="form-group standard" style="">



                                                        <div class="col-xs-12">
                                                            <div class="form-group">
                                                                <input type="text" name="supplier_part_no" value="" class="form-control tip" id="supplier_part_no" placeholder="Supplier Part Number" data-original-title="" title="">
                                                            </div>
                                                        </div>
                                                            <div class="col-xs-6">
                                                                <div class="form-group">
                                                                    <input type="text" name="supplier_part_no" value="" class="form-control tip" id="supplier_part_no" placeholder="Supplier Part Number" data-original-title="" title="">
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <div class="form-group">
                                                                    <input type="text" name="supplier_price" value="" class="form-control tip" id="supplier_price" placeholder="Supplier Price" data-original-title="" title="">
                                                                </div>

                                                        </div>
                                                        <div id="ex-suppliers"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!--tab nav start-->


                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-success" type="submit" style="display:none;">Save
                                            </button>
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

        $(document).ready(function () {
            $('#selecctall').click(function (event) {  //on click
                if (this.checked) { // check select status
                    $('.checkbox1').each(function () { //loop through each checkbox
                        this.checked = true;  //select all checkboxes with class "checkbox1"
                    });
                } else {
                    $('.checkbox1').each(function () { //loop through each checkbox
                        this.checked = false; //deselect all checkboxes with class "checkbox1"
                    });
                }
            });

        });


        function confirm_delete() {
            var txt;
            var r = confirm("Are You Sure to do this?");
            if (r == true) {
                $("#form-delete").submit();
            }
        }
    </script>

<?php include('footer.php'); ?>