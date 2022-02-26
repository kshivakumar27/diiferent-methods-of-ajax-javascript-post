<!DOCTYPE html>
<html>

<head>
	<title>search result of another page on
	same page using ajax in JSP</title>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">





</head>

<body>
	<center>
		<div>
			<h1 style="color:green">
			GeeksforGeeks</h1>
			<h2>Enter Your Name</h2>
			<input placeholder="Search"
				type="text"
				id="user_input"/>
			
			<button type="Submit" id="sub">
			Search
		</button>
		</div>
	</center>
	
	<div class="box_1" id="msg">
		<script type="text/javascript"
				src=
"https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js">
	</script>
		
		<script src="jquery-3.2.1.js"></script>
		<script>
			$(document).ready(function() {
				$("#sub").click(function() {
					var fn = $("#user_input").val();
					$.post("index.jsp", {
						n3: fn
					}, function(data) {
						$("#msg").html(data);
					});

				});
			});
		</script>
	</div>
</body>

</html>
