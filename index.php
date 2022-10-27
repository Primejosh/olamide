<?php
// Reads the variables sent via POST
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
//This is the first menu screen
if ($text == "") {
  // This is the first request. Note how we start the response with CON
  $response  = "CON Hi welcome to iCare, I am your K-Doc \n";
  $response .= "1. Enter 1 to continue";

} else if ($text == "1") {
  // Business logic for first level response
  $response = "CON This is K_Doc i am here to answer your Health questions for free Choose Prefered Language \n";
  $response .= "1. English \n";
  $response .= "1. Hausa \n";
  $response .= "3. Pigin \n";

} else if ($text == "1*1") {
  // Business logic for first level response
  // This is a terminal request. Note how we start the response with END
  $response = "CON How do you identify. choose one? \n";
  $response .= "1. Male \n";
  $response .= "2. Female \n"; 
  $response .= "3. Non-Binary \n";
  $response .= "4. Enter 0 to cancel\n";

} else if($text == "1*1*1") { 
  // This is a second level response where the user selected 1 in the first instance
  $response = "CON Got it. How old are you? \n";
  $response .= "1. 10years - 20years \n";
  $response .= "2. 21years - 40years \n";
  $response .= "3. 50+ \n";
  $response .= "4. Enter 0 to cancel";

  // This is a terminal request. Note how we start the response with END
  $response = "END Your account number is ".$accountNumber;

}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;