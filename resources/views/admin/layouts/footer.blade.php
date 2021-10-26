<!-- start footer -->
<div class="page-footer">
		<div class="page-footer-inner"> 2020 &copy;
			<a href="https://www.websolla.com" target="_top" class="makerCss">Websolla </a>
		</div>
		<div class="scroll-to-top">
			<i class="icon-arrow-up"></i>
		</div>
	</div>
	<!-- end footer -->
	<!-- start js include path -->
	<script src="{{ asset('mainAdmin/assets/plugins/jquery/jquery.min.js') }}"></script>
	
	<script src="{{ asset('mainAdmin/assets/plugins/popper/popper.min.js') }}"></script>
	<script src="{{ asset('mainAdmin/assets/plugins/jquery-blockui/jquery.blockui.min.js') }}"></script>
	<script src="{{ asset('mainAdmin/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
	<!-- bootstrap -->
	<script src="{{ asset('mainAdmin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('mainAdmin/assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('mainAdmin/assets/js/pages/sparkline/sparkline-data.js') }}"></script>
	<!-- Common js-->
	<script src="{{ asset('mainAdmin/assets/js/app.js') }}"></script>
	<script src="{{ asset('mainAdmin/assets/js/layout.js') }}"></script>
	<script src="{{ asset('mainAdmin/assets/js/theme-color.js') }}"></script>
	<!-- material -->
	<script src="{{ asset('mainAdmin/assets/plugins/material/material.min.js') }}"></script>
	<!-- animation -->
	<script src="{{ asset('mainAdmin/assets/js/pages/ui/animations.js') }}"></script>
	<!-- morris chart -->
	<script src="{{ asset('mainAdmin/assets/plugins/morris/morris.min.js') }}"></script>
	<script src="{{ asset('mainAdmin/assets/plugins/morris/raphael-min.js') }}"></script>
	<script src="{{ asset('mainAdmin/assets/js/pages/chart/morris/morris_home_data.js') }}"></script>
	<script type="text/javascript">
		$(document).ready( function(){

			
			// Size Control
		   $(document).on('click', '.more', function(){ 
		   $('#prod').append('<div class="col-md-3"><label>New Size</label><input type="text" name="size[]" placeholder="put the size here!" class="form-control"><span style="color:red;text-align:center" class="mind fa fa-times"></span></div>');
		   });
   
		   $(document).on('click', '.mind', function(){
		   /*$('.size').clone().removeClass('size').appendTo('.prod');*/
		   $(this).parent().remove();
		   /*alert(go);*/
		   });
   
		   $(document).on('click', '.min', function(){
		   /*$('.size').clone().removeClass('size').appendTo('.prod');*/
		   $(this).next().remove();
		   });

		   //Image Control
		   $(document).on('click', '.more_img', function(){ 
		   $('.images').append('<div class="col-md-3 "><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width"><input type="file" name="imgs[]" class="mdl-textfield__input"><label>New Image</label><span style="color:red;text-align:center" class="mind fa fa-times"></span></div></div>');
		   });
   
		   $(document).on('click', '.del', function(){
		   /*$('.size').clone().removeClass('size').appendTo('.prod');*/
		   $(this).parent().remove();
		   /*alert(go);*/
		   });
   
	   });
   
	   </script>
	<!-- end js include path -->

	
</body>

</html>
