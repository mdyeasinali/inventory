<?php include('common_head.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $tkn = Input::get('token');
    //$Adjustment->delect_Adjustment($tkn);
}
include('header.php');
?>
    <!-- page head start-->
    <div class="page-head">
        <h3 class="m-b-less">
            Adjustment (All Warehouses)
        </h3>
        <!--<span class="sub-title">Welcome to Static Table</span>-->
        <div class="state-information">
            <ol class="breadcrumb m-b-less bg-less">
                <li><a href="#">Home</a></li>
                <li><a href="#">Adjustment</a></li>
                <li class="active">Adjustment Page</li>
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
                            <button type="button" style="" class="btn btn-success"><i class="fa fa-reorder"></i> All
                                Adjustment
                            </button>
                        </div>
                        <div class="col-md-8">
                            <header class="pull-right">
                                <a href="add_adjustment.php?token=<?php echo $token; ?>" class="">
                                    <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add
                                    </button>
                                </a>
                                <a href="#" onclick="confirm_delete()" id="delete">
                                    <button type="button" class="btn btn-danger "><i class="fa fa-trash-o"></i> Delete
                                    </button>
                                </a>
                            </header>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form method="post" id="form-delete" action="<?php Config::get('site/aciton'); ?>">
                                <input type="hidden" name="token" value="<?php echo $token; ?>"/>
                                <table class="table responsive-data-table data-table" id="checkAll">
                                    <thead>
                                    <tr>
                                        <th id="masterCh" class="ch"><input type="checkbox" name="checkbox" value="all"
                                                                            id="selecctall" class="styled"/></th>

                                        <th><i class="fa fa-3x"></i>Date</th>
                                        <th><i class="fa fa-3x"></i>Reference No</th>
                                        <th><i class="fa fa-3x"></i>Warehouse</th>
                                        <th><i class="fa fa-3x"></i>Created by</th>
                                        <th><i class="fa fa-3x"></i>Note</th>
                                        <th class="hidden-xs"><i class="fa fa-cog"></i> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>

                                        <?php
//                                                                               $row = $Adjustment->show_all_Adjustment();
//                                                                                foreach ($row as $key){
                                        ?>


<!--                                        <td class="chChildren"><input type="checkbox" name="check_list[]"-->
<!--                                                                      value="--><?php //echo $key['id']; ?><!--"-->
<!--                                                                      class="checkbox1"/></td>-->
<!--                                        <td class="hidden-xs"><img id="uploadPreview" style="height:50px; width:50px;"-->
<!--                                                                   data-placeholder="images/defalt-image.png"-->
<!--                                                                   class="image marginR10"-->
<!--                                                                   src="--><?php //echo $key['pro_img']; ?><!--" alt=""></td>-->
                                        <td> <?php echo "code"; ?></td>
                                        <td><?php echo "title"; ?></td>
                                        <td> <?php echo "code"; ?></td>
                                        <td> <?php echo "code"; ?></td>
                                        <td><?php echo "title"; ?></td>
                                        <td><?php echo "title"; ?></td>
                                        <td><?php echo "title"; ?></td>


                                    </tr>
                                    <?php //} ?>
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