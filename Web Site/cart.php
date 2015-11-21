<?php 
    require_once "header.php" ?>
    <script type="text/javascript">
    $(function(){
        $('button[name="removeCart"]').click(function(){
            prodId = this.id;
            //alert('clicked')
            $.post( "delCart.php", { dprodID: prodId } ).done(function(data){
                window.location = "cart.php"
            })
        })

    })

    </script>
    <div class="row">
        <div class="col-sm-12 col-md-10 ">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT product.ID_PROD,product.Name_PROD,product.UnitPrice_PROD,product.STOCK_PROD,cart2.QTY_CART,cart2.TOTAL_PRICE FROM product,cart2 WHERE product.ID_PROD IN (SELECT cart2.PRODUCT_ID FROM cart2 WHERE cart2.CUSTOMER_USERNAME = '$_SESSION[user]' ) AND product.ID_PROD = cart2.PRODUCT_ID";
                    $subject=mysql_query($query);
                    $count = mysql_num_rows($subject);
                    
                    while ($row=mysql_fetch_row($subject)) {
                        
                        echo "
                    <tr>
                        <td class='col-xs-12 col-sm-8 col-md-6'>
                        <div class='media'>
                            <a class='thumbnail pull-left' href='#''> <img class='media-object' src='http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png' style='width: 72px; height: 72px;'> </a>
                            <div class='media-body'>
                                <h4 class='media-heading'><a href='#'>$row[1]</a></h4>";
                                
                                if($row[3]>20)
                                    echo" <span>Status: </span><span class='text-success'><strong>In Stock</strong></span>";
                                else if($row[3]>10)
                                    echo"<span>Status: </span><span class='text-warning'><strong>Leaves warehouse in 2 - 3 weeks</strong></span>";
                                else
                                    echo" <span>Status: </span><span style='color:red'><strong>Only $row[3] left in stock</strong></span>";

                                $totalAmount = $row[4]*$row[2];

                            echo"
                            </div>
                        </div></td>
                        
                        <td class='col-sm-1 col-md-1' style='text-align: center'>
                        <input type='email' class='form-control' id='quanity' value='$row[4]'>
                        </td>
                        <td class='col-sm-1 col-md-1 text-center'><strong>Rs $row[2]</strong></td>
                        <td class='col-sm-1 col-md-1 text-center'><strong>Rs $totalAmount</strong></td>
                        <td class='col-sm-1 col-md-1'>
                        <button id='$row[0]' type='button' name = 'removeCart'  class='btn btn-danger'>
                            <span  class='glyphicon glyphicon-remove'></span> Remove
                        </button></td>
                    </tr>
                    ";

                    }
                    
                    $query = "SELECT sum(TOTAL_PRICE*QTY_CART) FROM cart2 WHERE cart2.CUSTOMER_USERNAME = '$_SESSION[user]' ";
                    $subject=mysql_query($query);
                    $row = mysql_fetch_row($subject);
                    $_SESSION['total'] =$total =  $row[0];
                    
                    ?>
                   
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>

                        <?php
                        echo"<td class='text-right'><h5><strong>$total</strong></h5></td>";
                        ?>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <?php
                        $shipping = $total*0.25;
                        echo"<td class='text-right'><h5><strong>$shipping</strong></h5></td>";
                        ?>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <?php
                        $_SESSION['grandTotal'] = $grandTotal = $shipping + $total;
                        echo"<td class='text-right'><h3><strong>$grandTotal</strong></h3></td>";
                        ?>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        
                        <a href='index.php'> <button  type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button>
                        </a>
                      </td>
                        <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
    </body>
    </html>