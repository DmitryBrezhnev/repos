<?php
 
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
	 
 }
 
<?php