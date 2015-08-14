<?php
require_once 'config.php';
print_tpl_start();
?>

<h1>Search wow.</h1>
<div class="jumbotron" id="result">
</div>
<script type="text/javascript">
$("#result").masonry({
	itemSelector: ".tn",
	columnWidth: 100
});
$.get( "search_m.php", function( data ) {

// image.alt = "Alt information for image"



var arr = JSON.parse(data);
for (var i = arr.length - 1; i >= 0; i--) {
	var image = document.createElement("IMG");
	image.src=arr[i];
	image.setAttribute('class', 'tn');
	$( "#result" ).append( image );
	
}
  
});
	
</script>

</body>
</html> 