<!DOCTYPE HTML>
<html> 

<head> 
</head>
<body>
<div style="margin-left:auto;margin-right:auto;width:60%;">
<h1>Your Score: <?php echo $_POST['Score']; ?></h1>
<h1>Provide details to save your Score</h1>
<form action="ScoreSubmission.php" method="post">
<label>Name: </label><input type="text" name="name" required /><br /><br />
<label>E-mail:   </label><input type="text" name="email" required /><br /><br />
<input type="hidden" id="score" name="gameScore" value="<?php echo $_POST['Score']; ?>" />
<br />
<input type="submit" value="submit">
</form> 
</div>
</body>
</html>
