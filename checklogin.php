<?php
        // Als je methoden uit de loginclass wilt gebruiken moet je deze class eerst toevoegen
        require_once("class/LoginClass.php");
        require_once("class/SessionClass.php");
        
        if ( !empty ($_POST['email']) && !empty($_POST['password']))
        {
                // Check of de ingevulde emailadres en wachtwoord bestaan in de database
                if (LoginClass::check_if_email_password_exists($_POST['email'],
                                                                                                           $_POST['password']))
                {
                        /* Check nu duicelijk is dat de combinatie van email en password bestaat
                         * of het account wel geactiveerd is.
                         */
                                 if (LoginClass::check_if_account_is_activated($_POST['email'],
                                                                                                                            $_POST['password']))
                                    {
                                   
                                           
                                
                                //roep de static method find_user_by_email_password aan uit de LoginClass. deze method geeft precies 1 LoginClass-object terug, je kunt via dit object de properties opvragen zoals get_id(); enz...
                                $session->
                                login($userObject = LoginClass::find_user_by_email_password($_POST['email'],
                                                                                                                                           $_POST['password']));
                
                                switch ($_SESSION['userrole'])
                                {
                                        case 'root';
                                        header("location:index.php?content=root_homepage");
                                        
                                        break;
                                        
                                        case 'admin';
                                        header("location:index.php?content=admin_homepage");
                                        
                                        
                                        break;
                                        
                                        case 'customer';
                                        header("location:index.php?content=customer_homepage");
                                        
                                        break;
                                        
                                        case 'photographer';
                                        header("location:index.php?content=photographer_homepage");
                                        
                                        break;
                                        
                                        case 'developer';
                                        header("location:index.php?content=developer_homepage");
                                        
                                        break;
                                }
                        }
                        else
                        {
                                echo "Uw account is nog niet door u geactiveerd. <br> Check uw email voor de activatielink"        ;
                                header("refresh:5 url=index.php?content=login_form");
                        }
                }
                else
                {
                        // Deze echo vertelt of het email adres of wachtwoord bestaat in de database
                        echo 'This e-mail/password is unknown to our database, you will be redirected to the login page';
                        header("refresh:5; url=index.php?form=login_form");
                }
        }
        else
        {
                // Deze echo vertelt of er een leeg veld is
                echo 'You did not fill all fields, you will be redirected to the login page';
                header("refresh:4;url=index.php?content=login_form");
        }
?>