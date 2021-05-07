
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		#map{
			height: 500px;
			width: 100%;
		}
	</style>
</head>
<body>
<div id="map"></div>
	
</script>
<script type="text/javascript">
	function initMap(){
		var location={lat:-25.363,lnt:131.044};
		var map= new google.maps.Map(document.getElementById("map"),{
			zoom:4,
			center: location
		});
	}
</script>

</body>
</html>
