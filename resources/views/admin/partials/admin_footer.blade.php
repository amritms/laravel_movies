	<!-- admin footer -->
	<div id="footer-section">
         <div class="container-fluid">
         	<div class="row">
         		<div class="col-md-12">
         			<span>An Amazon company.</span> 
         		</div>
         	</div>
         </div>
      </div>    
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{!! url('js/jquery.1.1.4.min.js') !!}"></script>
    <script src="{!! url('js/moment.2.15.1.min.js') !!}"></script>
    {{--<script src="{{ URL::asset('js/bootstrap.3.3.7.min.js) }}" crossorigin="anonymous"></script>--}}
   	<script src="{!! url('js/banner-bootstrap.js') !!}"></script>
   	<script async src=" {!! url('js/widgets.js') !!}"></script>
   	
   	<script src="{!! url('js/bootstrap-datetimepicker.min.js') !!}"></script>
   	<script src="{!! url('js/jquery.dataTables.1.10.16.min.js') !!}"></script>
   	
   	 <script type="text/javascript">
  	$(function () {
   $('#datetimepicker').datetimepicker({
   		format: 'YYYY-MM-DD'
   });
//
   // Add more button
   // Director
   $(".add-more").click(function(){
       var html = $(".copy").html();
       $(".after-add-more").after(html);
   });
//
//
//
   // Writer
   $(".add-more-writer").click(function(){
       var html = $(".copy2").html();
       $(".after-add-more-writer").after(html);
   });
//
//
   // Stars
   $(".add-more-stars").click(function(){
       var html = $(".copy3").html();
       $(".after-add-more-stars").after(html);
   });
//
   $("body").on("click",".remove",function(){
       $(this).parents(".control-group").remove();
   });
//
   // Datatable
   $('#table_id').DataTable();
    });
</script>
  </body>
</html>