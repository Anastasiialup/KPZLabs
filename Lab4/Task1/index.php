<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Support System</title>
</head>
<body>
<h1>User Support System</h1>
<p>Choose your support level:</p>
<form action="SupportHandler.php" method="post">
    <label for="support_level">Select support level:</label>
    <select name="support_level" id="support_level">
        <option value="basic">Basic</option>
        <option value="premium">Premium</option>
        <option value="ultimate">Ultimate</option>
        <option value="free">Free</option>
    </select>
    <button type="submit">Submit</button>
</form>
</body>
</html>
