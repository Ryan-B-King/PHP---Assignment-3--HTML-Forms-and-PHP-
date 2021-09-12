<?php // Variable(s) Section
    
// test data returned
// print_r($_POST);

// Stored Data in Variables
$name = $_POST['name'];  // Name Variable
$email = $_POST['email']; // Email Variable
$phone = $_POST['phone']; // Phone Variable
$heard = $_POST['heard']; // Heard Varliable
$comments = $_POST['comments']; // Comments Variable

?>
<!DOCTYPE html> <!--Ryan King -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Results</title>
</head>
<body>   

    <header>
        <h1>Form Results</h1>
    </header>

    <h2>You Submitted the below information</h2>

    <p>Name: <?php print $name?></p> <!-- display $name data -->
    <p>Email: <?php print $email?></p> <!-- display $email data -->
    <p>Phone: <?php print $phone?></p> <!-- display $phone data -->
    <p>How you heard of us: <?php print $heard?></p> <!-- display $heard data -->
    <p>Comments: <?php print $comments?></p> <!-- display $comments data -->

</body>
</html>