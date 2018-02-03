	<div id="footer-section">
         <div class="container-fluid">
         	<div class="row">
         		<div class="col-md-12">
         			<span>An Amazon company.</span> <span class="pull-right">Copyright © 1990-2018 IMDb.com, Inc.</span>
         		</div>
         	</div>
         </div>
      </div>    
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
	<?php if ($page == index.php || $page == '') :?>
   	<script src="<?php echo BASEURL; ?>js/banner-bootstrap.js"></script>
   	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
   	<?php endif; ?>
   	
   	
   	<script src="<?php echo BASEURL; ?>js/bootstrap-datetimepicker.min.js"></script>
   	
   	 <script type="text/javascript">
   	$(function () {
        $('#datetimepicker').datetimepicker({
        		format: 'YYYY-MM-DD',
        });
    });
    </script>
  </body>
</html>