
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Autocomplete JS</title>
	<link rel="stylesheet" type="text/css" href="">
	 <style>  
	 	   body {
	 	   	margin-left: 38%;
			margin-top: 10%;
	 	   }
	 	   body h2{
	 	   	border-bottom: 1px solid #ddd;
			color: #6c6c6c;
			font-size: 36px;
			width: 70%;
	 	   }
           ul{  
                cursor: pointer;
				margin-top: -8px;  
           }  
           li{  
                background-color: #ddd;
				border-bottom: 1px solid #ddd;
				box-shadow: 2px 2px 2px #ddd;
				list-style: outside none none;
				margin-top: 6px;
				padding: 2px 0 2px 7px;
				width: 18%;
				margin-left: 3px;
           }
           td > input{
				height: 24px;
           }  
     </style> 
</head>
<body>
	<h2>Autocomplete box with PHP & AJAX</h2>
	<form method="POST" action="">
		<table>
			<tr>
				<td>Skill</td>
				<td>:</td>
				<td>
					<input type="text" id="inputData">
				</td>
			</tr>
		</table>
		<div id="showData"></div>
	</form>
	<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script>
  	$(document).ready(function(){
  		$("#inputData").keyup(function(){
  			var lol = $(this).val();
  			if(lol != ''){
  				$.ajax({
  					url: "http://localhost/autocomplete/data.php",
  					method: "POST",
  					data: {lol:lol},
  					success: function(data){
  						$("#showData").fadeIn();
  						$("#showData").html(data);
  						
  					}
  				});
  			}
  		});
  		$(document).on('click', 'li', function(){
  			$('#inputData').val($(this).text());
  			$("#showData").fadeOut();
  		});
  	});
  </script>
</body>
</html>