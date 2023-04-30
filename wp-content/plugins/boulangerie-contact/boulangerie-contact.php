<?php

/* 
* 
* Plugin Name: Boulangerie Contact
* Description: Simple contact formulaire 
* Author: Zo Mess
* Version: 1.0.0
* Text Domaine: boulangerie-contact
* 
*/

if ( !defined('ABSPATH') ) {
    exit;
}

class BoulangerieContact {

    private $message_sent = false;

    public function __construct(){
        $this->init();
    }
	
	private function init(){
		
		// Ajouter une action
		add_action('wp',array($this,'process_data'));
        // Ajouter un shortcode
        add_shortcode('contact-form', array($this, 'displayForm'));
	}

    public function process_data(){

        if (isset($_POST['contact_email']) && $_POST['contact_email'] != '') {
    
            if ( filter_var($_POST['contact_email'], FILTER_VALIDATE_EMAIL) ) {
                
                $userName = filter_input(INPUT_POST, 'contact_name', FILTER_SANITIZE_SPECIAL_CHARS);
                $userName = filter_input(INPUT_POST, 'contact_name', FILTER_SANITIZE_STRING	);
                $userEmail = filter_input(INPUT_POST, 'contact_email', FILTER_SANITIZE_EMAIL);
                $messageObjet = filter_input(INPUT_POST, 'contact_objet', FILTER_SANITIZE_STRING);
                $message = filter_input(INPUT_POST, 'contact_message', FILTER_SANITIZE_STRING);
        
                $to = "zomess@gmail.com";
                $body = "";
        
                $body .= 'From: '.$userName. "\r\n";
                $body .= 'Email: '.$userEmail. "\r\n";
                $body .= 'Message: '.$message. "\r\n";
        
                $this->message_sent = mail($to, $messageObjet, $body);
      
				    ob_start();
        			$this->displayForm();
          			return ob_get_clean();
            }
            
                
        }

    }
    
    public function displayForm(){

       if ($this->message_sent) {

           echo '<h1>merci, on reste en contact !</h1>';

       }
       else{
        ?>
            <style>
                .form{
                    background-color: #f2f2f2;
                    height: 100vh;
                    box-sizing: border-box;
                    box-shadow: 0 0 5px #c9c9c9;
                    align-items: center;
                    display: flex;
                    justify-content: center;
                    flex-direction: column;
                    
                }

                .title{
                    font-size: 35px;
                    color: #47C679;
                    font-weight: bold;
                }

                .formulaire{
                 
                    display: flex;
                    flex-direction: column;
                    box-sizing: border-box;
                }

                .form-group{
                    margin-bottom: 1em;
                    width: 100%;
                }

                .form-control{
                    width: 100%;
                    padding: 15px;
                    font-size: 15px;
                    border-radius: 3px;
                    border-style: none;
                }

                .btn{
                    background-color: #47C679;
                    color: #fff;
                    border-radius: 3px;
                    padding: 20px;
                    border-style: none;  
                    font-size: 20px; 
                    width: 50%; 
                }

                .btn:hover{
                    color: #c9c9c9;     
                }
                
                textarea{
                    resize: none;
                }
            </style>

            <div class="form">
               
                <p class="title">Contactez-nous !</p>

                <form method="POST"  class="formulaire">
                    <div class="form-group">
                    <input class="form-control" type="text" tabindex="1" name="contact_name" placeholder="John Doe" required>
                    </div>
                    <div class="form-group">
                    <input class="form-control" type="email" tabindex="2" name="contact_email" placeholder="John@Doe.com" required>
                    </div>
                    <div class="form-group">
                    <input class="form-control" type="text" tabindex="3" name="contact_objet" placeholder="Votre objet !" required>
                    </div>
                    <div class="form-group">
                    <textarea class="form-control" tabindex="4" name="contact_message" cols="50" rows="10" placeholder="Ecrivez votre message..."></textarea>
                    </div>
                    <input class="btn" tabindex="5" type="submit" name="contact_submit"  value="Envoyer" />
                </form>
            </div>
        <?php
        }
    }


}

new BoulangerieContact;


function boulangerie_activation(){

}

function boulangerie_deactivation(){
    
}

 //activation du plugin
register_activation_hook(__FILE__, 'boulangerie_activation');

//desactivation du plugin
register_deactivation_hook(__FILE__,'boulangerie_deactivation');