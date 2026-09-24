<!DOCTYPE html>
<html lang="en">

<head> 
    <?php require DASHBOARD . 'includes/header.inc.php' ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <main class="wrapper">
         
        <?php 
        $pageid = 'products';
        
        require DASHBOARD . 'includes/sidebar.inc.php' ?>
        
        
        
        <div class="content-wrapper px-4 py-2">
            <div class="content-header"> 
            </div>
            <div class="content px-2">
                
                    <div class='container alert'>
                        <div class='table-responsive'>
                            <table class='table table-striped table-hover'>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Date</th>
                                        <th>Seller Paid</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $totalPrice = array_sum(array_column($this->data, 'price'));
                                    $i = 0; foreach($this->data as $row) { $i++; ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><a style="color:grey" href='/product/<?php echo $row['slug'] ?>'>
                                            <?php echo $row['title'] ?> <i class='fa fa-external-link-square-alt' ></i></a> </td>
                                        <td><?php echo $row['price'] ?></td>
                                        <td><?php echo date('m-d-Y', strtotime($row['order_created_at'])) ?></td>
                                        <td><?php echo $row['order_status'] ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfooter>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>Total Price</th>
                                        <th><?= $totalPrice ?></th> 
                                    </tr>
                                </tfooter>
                            </table>
                             
                        </div>
                        
                        <section class="alert alert-warning">
                            <h2>User Details</h2>
                         
                            <?php // echo "<pre>"; print_r($this->data); 
                            $more = json_decode($this->data[0]['more_data']??"{}", 1); ?>
                            <div>
                                <ul class="list-unstyled">
                                    <li>Email: <?= $this->data[0]['email'] ?></li>
                                    <li>Name: <?= $more['fname']??'' . ' '. $more['lname']??'' ?></li>
                                    <li>Phone: <?= $this->data[0]['phone'] ?></li>
                                    <li>Country: <?= $more['country']??'' ?></li>
                                    <li>City: <?= $more['city']??'' ?></li>
                                    <li>County: <?= $more['county']??'' ?></li>
                                    <li>Address: <?= $more['address']??'' ?></li>
                                    <li>Postcode: <?= $more['postcode'] ?></li>
                                    <li>Shipping Option: <?= $more['radio-control-0']??'' ?></li>
                                    <li>Payment Option: <?= $more['radio-control-wc-payment-method-options']??'' ?></li>
                                </ul>
                            </div>

                        </section>
                     
                        
                        
 
                    </div>
                
                 
            </div>
        </div>
        
        
        <?php require DASHBOARD.'includes/footer.inc.php' ?>
        
    
    </main> 
 
</body>

</html>