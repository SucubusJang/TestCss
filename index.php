<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <!------ Include the above in your HEAD tag ---------->
    <script src="https://kit.fontawesome.com/34f17e0eeb.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        #my {
            overflow-y: auto;
            height: 200px;
        }
    </style>
</head>

<body>
    <div class="container" style="margin-left: 50px;">
        <div class="row">
            <div class="col-xs-8">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <div class="row">
                                <div class="col-xs-6">
                                    <h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
                                </div>
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-primary btn-sm btn-block">
                                        <span class="glyphicon glyphicon-share-alt"></span> Continue shopping
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="my">
                            <hr>
                            <!-- show product -->
                            <?php
                            $mydb = new mysqli("localhost", "root", "", "shopshock");
                            $mydb->set_charset("utf8");
                            $sql = "SELECT Product_code,Product_Name,Stock_Quantity FROM `product`";
                            $result = $mydb->query($sql);
                            $data = $result->fetch_all(MYSQLI_NUM);
                            // print_r($data);
                            for ($i = 0; $i < sizeof($data); $i++) {
                                showproduct("", $data[$i][0], $data[$i][1], $data[$i][2]);
                            }
                            function showproduct($img, $product_code, $product_name, $product_price)
                            {
                            ?>

                                <div class="row">
                                    <div class="col-xs-2"><img class="img-responsive" src="<?php echo $img; ?>">
                                    </div>
                                    <div class="col-xs-4">
                                        <h4 class="product-name"><strong><?php echo $product_code; ?></strong></h4>
                                        <h4><small><?php echo $product_name; ?></small></h4>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="col-xs-6 text-right">
                                            <h6><strong><?php echo $product_price; ?><span class="text-muted"> x </span></strong></h6>
                                        </div>
                                        <div class="col-xs-4">
                                            <input type="text" class="form-control input-sm" value="1">
                                        </div>
                                        <div class="col-xs-2">
                                            <button type="button" class="btn btn-link btn-xs">
                                                <span class="glyphicon glyphicon-trash"> </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            <?php
                            }
                            ?>
                            <!-- end show -->
                        </div>
                        <div class="row">
                            <div class="text-center">
                                <div class="col-xs-9">
                                    <h6 class="text-right">Added items?</h6>
                                </div>
                                <div class="col-xs-3">
                                    <button type="button" class="btn btn-default btn-sm btn-block">
                                        Update cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row text-center">
                            <div class="col-xs-9">
                                <h4 class="text-right">Total <strong>$50.00</strong></h4>
                            </div>
                            <div class="col-xs-3">
                                <button type="button" class="btn btn-success btn-block">
                                    Checkout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>