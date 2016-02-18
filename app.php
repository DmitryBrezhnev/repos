<?

 //check if there is variable in the URL
 if(isset($_GET["message"])){
	  
	//only if there is message in the URL
    //echo "there is mesaage";

    //if its empty	
	 echo "there is message";
	 
	 
	 if(emty($_GET["message"])){
		 echo "Please, enter the message!";
		 //it is empty
	 }else{
		 //its not empty
		 echo "Message: ".$_GET["message"]."<br>";
	 }
 
 }else{
	 //echo "there is no such thing as message"

//getting the message from address
// if there is ?name= .. then $_GET["name"]
$my_message = $_GET["message"];
$to = $_GET["to"];
$email = $_email["email"];

echo "My message is ".$my_message." and is to ".$to. " and is email ".$email;

?>

<h2> First application </h2>

<form method="get">
   <label for="to">to:* <label><br>
   <input type="text" name="to"><br><br>
   
   <label for="message">Message:* <label><br>
   <input type="text" name="message"><br><br>
   
   <label for="email">email:* <label><br>
   <input type="text" name="email"><br><br>
   
   <!-- This is the save button--> 
   <input type="submit" value="Save to DB">
   
<form>
