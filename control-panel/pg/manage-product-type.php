﻿<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');

$PRODUCT_TYPE = new ProductType(NULL);

?>
﻿<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Products</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="plugins/node-waves/waves.css" rel="stylesheet" />
        <link href="plugins/animate-css/animate.css" rel="stylesheet" />
        <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />
        <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/themes/all-themes.css" rel="stylesheet" />
    </head>

    <body class="theme-red">
        <?php
        include './navigation-and-header.php';
        ?>
        <section class="content">
            <div class="container-fluid"> 
                <!-- Manage Brand -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Manage Product Types
                                </h2>
                                <ul class="header-dropdown">
                                    <li>
                                        <a href="create-product-type.php">
                                            <i class="material-icons">add</i> 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <!--                                <div class="table-responsive">-->
                                <div>
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th> 
                                                <th>Short Description</th>
                                                <th>Description</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th> 
                                                <th>Short Description</th>
                                                <th>Description</th>
                                                <th>Option</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php
                                            $PRODUCT_TYPE = new ProductType(NULL);
                                            foreach ($PRODUCT_TYPE->all() as $key => $product_type) {
                                                ?>
                                                <tr id="row_<?php echo $product_type['id']; ?>">
                                                    <td><?php echo $product_type['id']; ?></td> 
                                                    <td><?php echo $product_type['name']; ?></td> 
                                                    <td><?php echo $product_type['short_description']; ?></td> 
                                                    <td><?php echo $product_type['description']; ?></td> 
                                                    <td> 
                                                        <a href="edit-product-type.php?id=<?php echo $product_type['id']; ?>" class="op-link btn btn-sm btn-default"><i class="glyphicon glyphicon-pencil"></i></a>  |  
                                                        <a href="#" class="delete-product-type btn btn-sm btn-danger" data-id="<?php echo $product_type['id']; ?>">
                                                            <i class="waves-effect glyphicon glyphicon-trash" data-type="cancel"></i>
                                                        </a> |   
                                                        <a href="view-products.php?id=<?php echo $product_type['id']; ?>" class="op-link btn btn-sm btn-default"><i class="glyphicon glyphicon-picture"></i></a> 
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>   
                                        </tbody>
                                    </table>
                                </div>
                                <!--                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Manage brand -->

            </div>
        </section>

        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.js"></script>
        <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>
        <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="plugins/node-waves/waves.js"></script>
        <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
        <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
        <script src="js/admin.js"></script>
        <script src="js/pages/tables/jquery-datatable.js"></script>
        <script src="js/demo.js"></script>

        <script src="plugins/sweetalert/sweetalert.min.js"></script>
        <script src="plugins/bootstrap-notify/bootstrap-notify.js"></script>
        <script src="js/pages/ui/dialogs.js"></script>
        <script src="js/demo.js"></script>
        <script src="delete/js/product-type.js" type="text/javascript"></script>
    </body>

</html> 