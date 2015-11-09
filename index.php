     <?php
     header('Content-type: text/plain');
     $name = "PataRide";

  
    // The variables sent introduced
    $input=getInput();
    $text=$input['text']; 
    function getInput()
    { 
    $input=array();
    $input['sessionId']   = $_REQUEST["sessionId"];
    $input['serviceCode'] = $_REQUEST["serviceCode"];
    $input['phoneNumber'] = $_REQUEST["phoneNumber"];
    $input['text'] = $_REQUEST["text"];
    return $input;
    }
    /*Always check if string is empty first*/
    if($text=="")
    {
      echo "CON Test";
      exit;
    }
    else
    {
    // set default level to zero
       $level = 0;
       $ussd_string = str_replace("#","*",$ussd_string);
       $ussd_string_exploded = explode("*",$ussd_string);
       $ussd_string_exploded2 = array_shift($ussd_string_exploded);

    // get level id from ussd_string reply
       $level = count($ussd_string_exploded);

       $parameters = array('parameters'=>array('cell_number'=>$cell_number,
                                               'session_id'=>$session_id,
                                               'ussd_string'=>$ussd_string));

       $phone = substr($cell_number,4,strlen($cell_number));
   

    if ( $level == 0 ) {
       display_menu();
       }

    if($level > 0)
      {
          switch($ussd_string_exploded[0])
         {
          case 1:
          have($ussd_string_exploded,$phone);
          break;
    
          case 2:
          have1($ussd_string_exploded,$phone);
          break;
          
          case 3:
          have($ussd_string_exploded,$phone);
          break;
    
          case 4:
          need($ussd_string_exploded,$phone);
          break;

          case 5:
          need($ussd_string_exploded,$phone);
          break;
         }

      }

// introducing functions or main menu

  function display_menu(){
           $ussd_text = "Welcome to PataRide. Find your selection from the menu options and press call\n";
           $ussd_proceed($ussd_text);
         }

  function have($pick_location, $phone)
  {

           $c = $details[1];
           if(count($details) == 1)
          {
            /*Error one initially was $pick_location = " " , ;*/
          $pick_location = " ";
          /*Error two initially was index = 1;*/
          $index = 1; 
          /*Error three what condition is this examining exception thrown at = sign*/
          if ( "7" = or > $text > 0 ) { 
             // Response from defined menu - location
                $response  = "Enter available pick-up location:

                1. Kilimani \n
                2. Yaya \n
                3. Prestige \n
                4. Kawangware \n
                5. Dag. Corner \n
                6. Kibera \n
                7. Jamhuri \n"
                }

          elseif ( $text > "7") {
                echo = "INVALID LOCATION \n";
                } 
           }

    }

  function have1($destination, $phone){

          elseif ( "7" = or > $text > 0 ) { [case 2]
                $ussd_text = "Enter destination";
                ussd_proceed($ussd_text);
                }

          else ( $text > "7") {
               echo = "INVALID DESTINATION \n";
               } 
        }

        if(count($details) == 3)
                {
                $ussd_text = "300" <br> $option_text = "Accept" "Decline";
                ussd_proceed($ussd_text);
                }

        if(count($details) == 4)
                {
                function charge_cost($charge_figure){
                $charge_figure = "300";
                echo "$charge_figure"
                }

        if(count($details) == 5)
                {
                $ussd_text = "Godwin San", "X55 YTH", "Due 15 Minutes", "PataRide Contact +254 717 620 064";
                ussd_proceed($ussd_text);
                }

        } else {
               $errors = $sth->errorInfo();
               }

    //USSD proceed reply
             function ussd_proceed($ussd_text)
             {
             echo "CON $ussd_text";
             exit(0);
             }

    //USSD stop reply
             function ussd_stop($ussd_text)
             {
             echo "END $ussd_text";
             exit(0);
             }

    // Print the response onto the page so that our gateway can read it
         $response = "Thank you for using Pataride.";
         echo $response;
         }

    //The rest of the information on the coming motorcyclist will be sent to customer via sms.
// DONE!!!
       
?>