
<!-- <footer class="text-center">
   <p>Footer</p>
</footer> -->
</div>

       <script>
            let table = new DataTable('#dataTable')

            $(document).ready(function(){
               // Select2 library
               $('#select2').select2();


                $("#flip1").click(function(){
                    $(".drop-down-panel1").slideToggle("slow");
                });

                $("#flip2").click(function(){
                    $(".drop-down-panel2").slideToggle("slow");
                });

                $("#flip3").click(function(){
                    $(".drop-down-panel3").slideToggle("slow");
                });

                $("#flip4").click(function(){
                    $(".drop-down-panel4").slideToggle("slow");
                });

                $("#flip5").click(function(){
                    $(".drop-down-panel5").slideToggle("slow");
                });

                $("#flip6").click(function(){
                    $(".drop-down-panel6").slideToggle("slow");
                });

                $("#flip7").click(function(){
                    $(".drop-down-panel7").slideToggle("slow");
                });
                
                $("#flip8").click(function(){
                    $(".drop-down-panel8").slideToggle("slow");
                });
                });

                
        </script>
<script src="<?php echo base_url('public/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('public/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>