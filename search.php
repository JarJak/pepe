<?php
require_once 'config.php';
print_tpl_start();
?>

<h1>Search wow.</h1>
<form id="sform">
<input type="text" name="tags">
</form>
<button id="sbtn">SERCZ</button>
<div class="jumbotron" id="result">
</div>
<script type="text/javascript">

$("#result").masonry({
	itemSelector: ".tn",
	columnWidth: 100
});

$("#sbtn").click(
	function() 
	{

		$("#result").empty();
		$.post( "search_m.php", $("#sform").serialize(), 
			function( data )
			{	
				var arr = JSON.parse(data);
				for (var i = arr.length - 1; i >= 0; i--)
				{
					var image = document.createElement("IMG");
					image.src=arr[i];
					image.setAttribute('class', 'tn');
					$( "#result" ).append( image );
					
				}
			}
		);
	}	  
);


	
</script>

</body>
</html> 