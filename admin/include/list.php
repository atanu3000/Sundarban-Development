<?php
$connect = mysqli_connect("localhost", "root", "", "project");
$query = "SELECT * FROM products";
$res = mysqli_query($connect, $query);
?>

<div class="px-5">
    <?php if (mysqli_num_rows($res) == 0) { ?>
        <h2 class="text-center">Empty Product List</h2>
    <?php } else { ?>
        <h2 class="text-center mb-5">Product Listing</h2>
        <table class="table table-striped table-hover border border-2">
            <thead>
                <tr>
                    <!-- <th scope="col"><span> No</span>.</th> -->
                    <th scope="col"><span> Product</span></th>
                    <th scope="col"><span> Price</span></th>
                    <th scope="col"><span> Location</span></th>
                    <th scope="col"><span> Delivery Spots</span></th>
                    <th scope="col"><span> Photo</span></th>
                    <th scope="col"><span> Payment Mode</span></th>
                    <th scope="col"><span> Edit</span></th>
                    <th scope="col"><span> Delete</span></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($res)) { ?>
                    <tr>
                        <!-- <td scope="row">
                            <span>
                                <?php echo $row['id']; ?>
                            </span>
                        </td> -->
                        <td>
                            <span>
                                <?php echo $row['pname']; ?>
                            </span>
                        </td>
                        <td>
                            <span>
                                <?php echo $row['price']; ?>
                            </span>
                        </td>
                        <td>
                            <span>
                                <?php echo $row['location']; ?>
                            </span>
                        </td>
                        <td>
                            <span>
                                <?php echo $row['d_location']; ?>
                            </span>
                        </td>
                        <td>
                            <span><img src="include/form/images/<?php echo $row['image']; ?>" alt="product" class="products"></span>
                        </td>
                        <td>
                            <span>
                                <?php echo $row['pmode']; ?>
                            </span>
                        </td>
                        <td>
                            <span id="center">
                                <a href="#" class="btn"> <i class="fa-solid fa-pen-to-square fa-xl" style="color: #ffdd00;"></i></a>
                            </span>
                        </td>
                        <td>
                            <span id="center">
                                <a href="delete_products.php?id=<?php echo $row['id']?>" onclick="return confirm('Are you sure?')" class="btn"> <i class="fa-solid fa-trash fa-xl" style="color: #ff0000;"></i></a>
                            </span>
                        </td>
                    </tr>
                
                    <?php } ?>
            </tbody>
        </table>
    
        <?php } ?>
</div>