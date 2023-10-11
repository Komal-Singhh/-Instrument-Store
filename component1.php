
<html>
<head>  <script type='text/javascript'>
            $(document).ready(function(){
                $('.quick').click(function(){
                    var pid = $(this).data('id');
                    $.ajax({
                        url: 'quickview.php',
                        type: 'post',
                        data: {pid: pid},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#staticBackdrop').modal('show'); 
                        }
                    });
                });
            });
           
            </script>
        
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  </head>
  
</head><body>
<?php
 function component($product_name,$product_image,$product_brand,$product_id,$prev,$curr,$rat)
{    $id=$product_id;
    $element="<div class='card my-3 mx-auto ' style='width:300px'>
  <img class='card-img-top' src='./Product_image/$product_image'width='100px'height='100px''>
  <div class='card-body'>
    <h4 class='card-title'>$product_name</h4>
    <p class='card-text'> Brand:$product_brand <br><small><s>₹$prev&nbsp&nbsp</s></small><span class='price'>  ₹$curr</span>
         <br> ";
            
        echo $element;  
     for ($i=1;$i<=5;$i++)
     {
         if($i<=$rat)
         {
             echo "<span class='fas fa-star'></span>";
            
             
         }
         else{
             echo "<span class='far fa-star '></span>";
         }
         
     }
     echo "</p>
    <button type='button'  data-id='$product_id' class=' quick btn btn-success' data-bs-toggle='modal' data-bs-target='#staticBackdrop'onclick='fun(this.value)'>
  +Quick View
</button>  </div>
</div>";
    
}
?>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="mod" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" >ADD TO CART</button>
      </div>
    </div>
  </div>
</body>




        
    </html>