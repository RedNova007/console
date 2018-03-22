<style type="text/css">
	body{
		max-width: 1180px;
	 	position: static;
    	border: 3px solid #73AD21;
		 margin: auto;
	}
	.buttonAContainer{
		padding-bottom: 10px;
	}
	.buttonBContainer{
		padding-bottom: 10px;
	}
	.buttonXContainer{
		padding-bottom: 10px;
	}
	.buttonYContainer{
		padding-bottom: 10px;
	}

	.A:hover{
		transform: scale(1.2,1.2);
	}
	.B:hover{
		transform: scale(1.2,1.2);
	}
	.X:hover{
		transform: scale(1.2,1.2);
	}
	.Y:hover{
		transform: scale(1.2,1.2);
	}
</style>
<!DOCTYPE html>
	<html>
		<head>
			<title>Controller</title>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		</head>
		<body>
			<div class="controller">
				<div class="controllerContainer">
				<!-- button A -->
					<div class="buttonAContainer"></div>
						<div class="buttonA"><img class="A" id="A" height="75px" width="75px" src="images/Xbox-controller-a-button"></div>
				<!-- button B -->
					<div class="buttonBContainer"></div>
						<div class="buttonB"><img class="B" height="75px" width="75px" src="images/Xbox-controller-b-button"></div>
				<!-- button X -->
					<div class="buttonXContainer"></div>
						<div class="buttonX"><img class="X" height="75px" width="75px" src="images/Xbox-controller-x-button"></div>
				<!-- button Y -->
					<div class="buttonYContainer"></div>
						<div class="buttonY"><img class="Y" height="75px" width="75px" src="images/Xbox-controller-y-button"></div>
				</div>			
			</div>
		</body>
	</html>
	<script type="text/javascript">
		$( document ).ready(function() {
    		$("#A").delegate("img", "click", function(){
    			console.log('A');
    		)};
		});
	</script>
