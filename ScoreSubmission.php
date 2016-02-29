<?php

$servername = "localhost";
$username = "niranjan";
$password = "anandam";
$dbname = "MemoryControl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name = $_POST['name'];
$email = $_POST['email'];
$score = $_POST['gameScore'];

$sql = "INSERT INTO MemoryGameStats (id, name, email, score)
VALUES ('memory game', '" . $name . "', '" . $email . "', " . $score . ")";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

<script type="text/javascript" src="JS/jquery.min.js"></script>

<script type="text/javascript">

var highScore, currentPosition, score = "<?php echo $score; ?>";

$.get("returnMaxScore.php", function (data) {
        if (data != undefined) {
            highScore = data[0]["MAX_SCORE"];

	    $.get("returnCurrrentPosition.php?Score=" + score + "", function (data) {
        		if (data != undefined) {
            currentPosition = data[0]["CURRENT_POSITION"];

	    document.write("<h1 style='text-align:center'>Thanks for playing and enjoying Game<h1>");
	    document.write("<h2 style='text-align:center'>High Score : " + highScore + "<h2>");
	    document.write("<h2 style='text-align:center'>Your Score :" + score + "<h2>");
	    document.write("<h2 style='text-align:center'>Your Rank: " + (parseInt(currentPosition) + 1) + "<h2>");
	    document.write("<h2 style='text-align:center'><a href='MemoryGame.html'>Do you want to play again</a><h2>");
        }
        else {
            document.write("error conntecting to Database");     
        }
    });
		
        }
        else {
            document.write("error conntecting to Database");
        }
    });


</script>

