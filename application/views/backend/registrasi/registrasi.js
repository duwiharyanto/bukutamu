<script type="text/javascript">
	$(document).ready(function(){
		$("form").validate({
		errorPlacement: function ( error, element ) {
			
			if ( element.prop( "type" ) === "checkbox" ) {
				error.insertAfter( element.parent( "label" ) );
			} else {
				error.insertAfter( element );
			}
			// Add the `help-block` class to the error element
			error.addClass( "help-block" );
			$('.error').css('font-weight', 'normal');
		},		
		highlight: function ( element, errorClass, validClass ) {
			$( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
		},
		unhighlight: function (element, errorClass, validClass) {
			$( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
		}		
		});
	    $(".pricetag").priceFormat({
	        prefix:'Rp ',
	        thousandsSeparator:'.',
	        centsLimit:'0'
	    })  		
		$('.datepicker').datepicker({
			autoclose: true,
			todayHighlight: true,
			format: "dd-mm-yyyy",
			todayBtn: true,
		});
		$(".selectdata").select2();
	})
</script>