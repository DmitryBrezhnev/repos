<?


//getting the message from address
// if there is ?name= .. then $_GET["name"]
$my_message = $_GET["message"];


echo "My message is ".$my_message;

?>

<h2> First application </h2>

<form method="get">
   <label for="message">Message:* <label><br>
   <input type="text" name="message"><br><br>
   <input type="submit" value="Save to DB">
   
<form>
