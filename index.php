<?php
session_start();
$_SESSION['token'] = md5(session_id() . time());
$token = $_SESSION['token'];
?>

<html>
<body>
  <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script>
  function sendMail()//Use jquery to do ajax request, easier than diretly in javascript 
  {
    $.post('postMail.php',{token:$("#token").val(), mail:$("#mail").val()}).done(function(data) {
      $('#complete').html(data);
    }
  );
}
</script>

<form>
  <label for="mail">Mail:</label>	 <input type="text" name="mail" id="mail" />
  <input type="hidden" id="token" name="token" value="<?php echo $token ?>" />
  <input type="button" value="submit" onClick="sendMail();" />
  <p id="complete"> </p>
</form>

</body>
</html>
