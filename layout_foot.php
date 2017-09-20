            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

        <!-- jQuery library -->
        <script src="libs/js/jquery.min.js"></script>

        <!-- bootstrap JavaScript -->
        <script src="libs/js/bootstrap.min.js"></script>

        <script>
          $(document).ready(function(){
            //add to cart button listener
            $('.add-to-cart-form').on('submit', function(){
              var id = $(this).find('.product-id').text();
              var quantity = $(this).find('.cart-quantity').val();

              window.location.href="add_to_cart.php?id=" + id + "&quantity=" + quantity;
              return false;
            });

            // change product image on hover
            $(document).on('mouseenter', '.product-img-thumb', function(){
                var data_img_id = $(this).attr('data-img-id');
                $('.product-img').hide();
                $('#product-img-'+data_img_id).show();
            });
          });
        </script>

</body>
</html>
