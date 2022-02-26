<!DOCTYPE html>
            
<html>
<head>
    <meta name="viewport" content="width=device-width" />
	<script type="text/javascript" 
            src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>
	<script type="text/javascript">
        $(document).ready(function () {
			
		 $('#ajaxBtn').click(function(){
			
			$.post('today25.php',   // url
			   { myData: 'This is my data.' }, // data to be submit
			   function(data, status, jqXHR) {// success callback
						$('p').append('status: ' + status + ', data: ' + data);
				});
			});
    });
    </script>
</head>
<body>
	<h1> jQuery post() method demo 
	</h1>

    <form method='get' action>

<input type='text' name='name' placeholder='Enter your name' id='name'>




	<input type="button" id="ajaxBtn" value="Send POST request" />
	<p>
	</p>
</body>
</html>