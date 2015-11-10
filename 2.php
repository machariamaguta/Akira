    <?php
     header('Content-type: text/plain');
           function identity($name){
                    $name = 'PataRide';
                    echo $name 
                    }

    // The variables sent introduced
    $input = getInput();
    $text = $input["$text"];
    function getInput()
    {
       $input['sessionId']   = $_GET["sessionId"];
       $input['serviceCode'] = $_GET["serviceCode"];
       $input['phoneNumber']= $_GET["phoneNumber"];
       $input'[ussd_string']= $_GET["text"];
       return $input;
       }

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

         $phone = substr($cell_number,5,strlen($cell_number));
   

         if ( $level == 0 ) {
                            display_menu();
                            }

    if($level > 0)
      {
          switch($ussd_string_exploded[0])
         {
          case 1:
          need1($ussd_string_exploded,$phone);
          break;
    
          case 2:
          need2($ussd_string_exploded,$phone);
          break;
          
          case 3:
          need3($ussd_string_exploded,$phone);
          break;
    
          case 4:
          need4($ussd_string_exploded,$phone);
          break;

          case 5:
          need5($ussd_string_exploded,$phone);
          break;

          case 5A:
          need6($ussd_string_exploded,$phone):
          break;

         }

      }

// introducing functions or main menu

  function display_menu(){
           $ussd_text = "Welcome to PataRide. Find your selection from the menu options and press call\n";
           $ussd_proceed($ussd_text);
         }

  function need1($details, $phone)
  {

           $c = $details[1];
           if(count($details) == 1)
          {

          // if ( $text < "7" ) { 
          //      $centers = array("1" => "Kilimani", "2" => "Yaya", "3" => "Prestige", "4" => "Kawangware","5" => "Dag. Corner", "6" => "Kibera", "7" => "Jamhuri")
          //      foreach($center as $x_value => $x ) {
          //              echo $x_value . $x;
          //              echo "<br>";
          //              }
             // Response from defined menu - location
                $ussd_text = "Enter available pick-up location:

                1. Kilimani \n
                2. Yaya \n
                3. Prestige \n
                4. Kawangware \n
                5. Dag. Corner \n
                6. Kibera \n
                7. Jamhuri \n";

                echo $ussd_text;
                echo "<br>";
                }

          elseif ( $text > "7") {
                echo = "INVALID LOCATION \n";
                } 
           }

    }

  function need2($destination, $phone){

          elseif ( $text < "7" ) { [case 2]
                $ussd_text = "Enter destination";
                ussd_proceed($ussd_text);
                }

          else ( $text > "7") {
               echo = "INVALID DESTINATION \n";
               exit;
               } 
        }

        if(count($details) == 3)
                {
                $ussd_text = "300" <br> $ussd_text = "Accept";
                ussd_proceed($ussd_text);
                }

        if(count($details) == 4)
                {
                function charge_cost($charge_figure){
                $charge_figure = "300";
                }

        if(count($details) == 5)
                {
                $ussd_text = "Godwin San", "X55 YTH", "Due 15 Minutes", "PataRide Contact +254 717 620 064";
                ussd_proceed($ussd_text);
                }

        } else {
               $errors = $sth->errorInfo();
               }
                  function getInput()
                  {
                     $input=array();
                     $input['text']=$_GET['text'];
                     return $input;
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
         $response = "Thank you for using PataRide." ;
         echo $response;
         }

   
function display_menu(){ 
           //Applicable for *127*1# -motorcyclists.
           $c = $details[5A];
           if(count($details) == 5A)
                            {
           //  Showing your availability
                       $ussd_text = "Available";
                       echo $ussd_text;                   
                            }
                        }

 //The rest of the information on the coming motorcyclist will be sent to customer via sms.
// DONE!!!
?>
