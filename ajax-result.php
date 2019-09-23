<?php
			  $c= $_POST['message'];
			  $t= $_POST['nott'];
			  
			  if($t=="" && $c!=""){
				  $header="From: message@therecruitersbay.com \r\n";;
	              $to="bobotheavatar@gmail.com";
	    
	              $subject ="CV Quick Message"; 
	              $message=$t;
	        
		          $msg=""; $img=""; $spa="";
		
		          $retval = mail($to,$subject,$message,$header); 
                  if( $retval == true )   
                      { 
                      $msg="Message Sent To Bobo Successfully."; 
					  $img="true.png";
					  $spa="color:#00ff00;";
                      }
                  else
                      {
                      $msg="System failure, Operation Unsuccessful.";
					  $img="false.png";
					  $spa="color:#ff0000;";
                      }
		
		          echo "<div width=100%><center><img src=\"".$img."\" class=\"animated pulse infinite\" Style=\"height:100px; width:100px;\"></div></div><div><center><span Style=\"".$spa."\">".$msg."</span></center></div>";

           }
           else
           {
                echo "<center><h4 style=\"color:#ff0000;\" class=\"animated pulse infinite\"><b>Button Pressed without Purpose.</b></h4></center>";
           }
			  
			  
			  
			  


?>