<style type="text/css">
	body{
		max-width: 640px;
		max-height: 360px;
	 	position: static;
    	border: 2px solid black;
		margin: auto;
	}
	.buttonAContainer{
		padding-bottom: 10px;
		
		float: right;

	}
	.buttonBContainer{
		padding-bottom: 10px;
		
		float: right;
	}
	.buttonXContainer{
		padding-bottom: 10px;
		
		float: right;
	}
	.buttonAYContainer{
		padding-bottom: 10px;
		
		float: right;
	}

	.buttonA{
		padding-top: 180%;
		
	}
	.buttonB{
		padding-top: 142%;
		padding-right: 10%;
		
	}
	.buttonX{
		padding-top: 142%;
		
	}
	.buttonY{
		
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
				<!-- button B -->
					<div class="buttonBContainer">
						<div class="buttonB"><img class="B" id="B" height="30px" width="30px" src="images/Xbox-controller-b-button"></div>
					</div>
				<!-- button Y -->
					<div class="buttonAYContainer">
						<div class="buttonY"><img class="Y" id="Y" height="30px" width="30px" src="images/Xbox-controller-y-button"></div>	
				<!-- button A -->
						<div class="buttonA"><img class="A" id="A" height="30px" width="30px" src="images/Xbox-controller-a-button"></div>
					</div>
				<!-- button X -->
					<div class="buttonXContainer">
						<div class="buttonX"><img class="X" id="X" height="30px" width="30px" src="images/Xbox-controller-x-button"></div>
					</div>

				</div>			
			</div>
		</body>
	</html>
	<script type="text/javascript">
		$( document ).ready(function() {
    		$("#A").on("click", function(){
    			console.log('A')
    		});
    		$("#B").on("click", function(){
    			console.log('B')
    		});
    		$("#X").on("click", function(){
    			console.log('X')
    		});
    		$("#Y").on("click", function(){
    			console.log('Y')
    		});
		});
	</script>
