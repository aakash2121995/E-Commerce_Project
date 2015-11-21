<!DOCTYPE html>

<?php
require_once "header.php";
include("functions.php");

?>
<script type="text/javascript">
$(function(){

    $('.btn-warning').click(function(){
       productId =  this.id;

        $.post( "insertCart.php", { prodID: productId } ).done(function(data){
            //alert("done")
            var demoTimeout
            var cart = $('.glyphicon-shopping-cart')
            
                cart.jrumble()
                clearTimeout(demoTimeout)
                cart.trigger('startRumble')
                demoTimeout = setTimeout(function(){cart.trigger('stopRumble');}, 500)
            
    })


    
})
})
</script>

    <div class="container-fluid">
        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            Shop By Category
                        </a>
                    </li>
                    <li>
                        <a href="#">CATEGORIES</a>
                        <ul id="cats">
                            <?php getCats();?>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>

        <div >
            <div class="thumbnail">
                <div class = "row">   
					   <?php getCatPro();
                           SearchQuery();
                       ?>		 
				</div>
		</div>
                        
        <hr>
                    
					
        <hr>

                    

    </div>

</div>
       
   
   
</body>
</html>
