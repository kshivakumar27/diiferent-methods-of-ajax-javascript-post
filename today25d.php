<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
   $("#update").click(function(e) {
  e.preventDefault();
  var name = $("#name").val(); 
  var last_name = $("#last_name").val();
  var dataString = 'name='+name+'&last_name='+last_name;
  $.ajax({
    type:'POST',
    data:dataString,
    url:'insert.php',
    success:function(data) {
      alert(data);
    }
  });
});
</script>
</head>

<body>

  <form name="frm" method="POST" action="">
 <input type="text" name="name" id="name" value="" />
 <input type="text" name="last_name" id="last_name" value="" />
 <input type="submit" name="Update" id="update" value="Update" />
</form>
</body>
</html>
