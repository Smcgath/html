$(document).ready(function(){
	$(".myCategories").on("click", function(){

		var clickedId = this.id;
		$.get( "selectSubcategory.php?id=" + clickedId, function( data ) {
  			
  			$( "#ajax_Output" ).html( data );
		});
			
	});

});
