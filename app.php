<?


//getting the message from address
// if there is ?name= .. then $_GET["name"]
$my_message = $_GET["message"];
$to = $_GET["to"];

echo "My message is ".$my_message." and is to ".$to;

?>

<h2> First application </h2>

<form method="get">
   <label for="to">to:* <label><br>
   <input type="text" name="to"><br><br>
   
   <label for="message">Message:* <label><br>
   <input type="text" name="message"><br><br>
   
   <!-- This is the save button--> 
   <input type="submit" value="Save to DB">
   
<form>
