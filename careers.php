<?php require_once("top_header.php"); ?>

<?php /* ?><?php if($_SESSION['user_type_logged']!='1') { ?>
  <script type="text/javascript">location.href = 'login.php';</script>
  <?php } ?>
  <?php */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
            <meta charset="utf-8">
                <title>ShopsyShop</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta name="description" content="">
                        <?php require_once("header.php"); ?>
                        <?php
//                        if (!isset($_SESSION['cart_item_id'])) {
//                            unset($_REQUEST["product_id"]);
//                        }
//                        if ($_REQUEST["product_id"]) {
//                            unset($_SESSION['cart_item_id']);
//                            unset($_SESSION['cart_item_name']);
//                            unset($_SESSION['cart_item_price']);
//                            unset($_SESSION['cart_item_thumb']);
//                            unset($_SESSION['cart_item_qty']);
//                            unset($_SESSION['cart_item_color']);
//                            unset($_SESSION['cart_item_size']);
//                            unset($_SESSION['cart_item_shipping']);
//                            unset($_SESSION['cart_item_offer']);
//                        }
                        ?>

                        <link href="stylesheets/font-awesome.css" rel="stylesheet">
                            <!-- Custom CSS -->
                            <link href="stylesheets/bootstrap-rating.css" rel="stylesheet">

                                </head>
                                <body class="">

                                    <div class="master-wrapper">
                                        <!--  ==========  -->
                                        <?php require_once("main_header.php"); ?>
                                        <!--  = Main container =  -->
                                        <!--  ==========  -->
                                        <!--  ==========  -->
                                        <!--  = Header =  -->
                                        <!--  ==========  -->



                                        <!--  ==========  -->
                                        <!--  = Breadcrumbs =  -->
                                        <!--  ==========  -->
                                        <div class="darker-stripe">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="span12">
                                                        <ul class="breadcrumb">
                                                            <li>
                                                                <a href="index.php">ShopsyShop</a>
                                                            </li>
                                                            <li><span class="icon-chevron-right"></span></li>
                                                            <li>
                                                                <a href="#">Careers</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!--  ==========  -->
                                        <!--  = Main container =  -->
                                        <!--  ==========  -->
                                        <div class="container">
                                            <div class="push-up blocks-spacer">
                                                <div class="row">

                                                    <!--  ==========  -->
                                                    <!--  = Sidebar =  -->
                                                    <!--  ==========  -->
                                                    <aside class="span12">
                                                        <div class="sidebar-item">
                                                            <div>
                                                                <h3><span class="light">Careers</span></h3>
                                                            </div>
                                                            <div class="row">
                                                                <div class="span12">
                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </aside> <!-- /sidebar -->
                                                </div>
                                            </div>
                                        </div> <!-- /container -->
                                        <?php require_once("footer.php"); ?>
                                    </div> <!-- end of master-wrapper -->
                                    <?php require_once("javascript.php"); ?>                                   
                                </body>
                                </html>
