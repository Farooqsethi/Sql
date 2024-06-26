<?php
include("component/header.php");
?>
 <!-- Blank Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="row bg-light rounded pt-4 mx-0">
                    <div class="col-md">
                    
            <!-- Blank End -->
                            <div class="table-responsive">
                            <div class="row mb-4">
                <div class="col-md-6 d-flex">
                    <h6 class="align-content-center m-0">All Products</h6>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="addproduct.php" class="btn btn-success">Add New</a>
                </div>
            </div>
                                <table class="table">
                                    <thead> 
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Image</th>
                                            <th scope="col" class="px-5" colspan="2">Action</th>
                      
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = $pdo->query("SELECT `products`.*, `categories`.`catname`
                                        FROM `products` 
                                            INNER JOIN `categories` ON `products`.`productcatid` = `categories`.`catid`;");
                                        $prorow = $query ->fetchAll(PDO::FETCH_ASSOC);
                                        foreach($prorow as $values){
                                                ?>
                                      <tr>
                                            <td scope="row"><?php echo $values['productid']?></td>
                                            <td><?php echo $values['productname']?></td>
                                            <td><?php echo $values['productprice']?></td>
                                            <td><?php echo $values['productdescription']?></td>
                                            <td><?php echo $values['catname']?></td>
                                            <td><?php echo $values['productquantity']?></td>
                                            <td><img src="<?php echo $proref.$values['productimage']?>" alt="" width="80px"></td>
                                            <td><a href="updateproduct.php?pid=<?php echo $values['productid'] ?>" class="btn btn-success">Edit</a></td>
                                            <td><a href="?prodeleteKey=<?php echo $values['productid'] ?>" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                                <?php

                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                            </div>
                </div>
            </div>   
<?php
include("component/footer.php");
?>