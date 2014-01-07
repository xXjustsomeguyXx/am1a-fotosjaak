<?php
        require_once("class/LoginClass.php");
        
        if (LoginClass::check_if_email_exists($_POST['email']))
        {
                // Uw emailadres bestaat al        terugsturen registerpagina
                echo "Het ingevulde emailadres bestaat al,<br>
                          gebruik een ander emailadres. U wordt doorgestuurd<br>
                          naar het registratieformulier";
                header("refresh:5;url=index.php?content=register_form");
        }
        
        else 
        {
                LoginClass::insert_into_loginClass($_POST);
                echo "test goed";
                
        }

        header("refresh:1500; url=index.php?content=login_form");

        //hier wordt contact gemaakt met de mysql server
        $db = mysql_connect("localhost", "root", "");        
        
        //Hier wordt er een database gekozen op de mysql server
        mysql_select_db("fotosjaak", $db) or die("De database is niet gevonden");
        
        $sql = "INSERT INTO `user` ( `id`, 
                                                                `firstname`,
                                                                `infix`,
                                                                `surname`,
                                                                `adress`,
                                                                `adressnumber`,
                                                                `city`,
                                                                `postalcode`,
                                                                `country`,
                                                                `phonenumber`,
                                                                `mobilephonenumber`
                                                                
                                                                )

                                        VALUES                ( NULL,
                                                                '".$_POST['firstname']."',
                                                                '".$_POST['infix']."',
                                                                '".$_POST['surname']."',
                                                                '".$_POST['adress']."',
                                                                '".$_POST['adressnumber']."',
                                                                '".$_POST['city']."',
                                                                '".$_POST['postalcode']."',
                                                                '".$_POST['country']."',
                                                                '".$_POST['phonenumber']."',
                                                                '".$_POST['mobilephonenumber']."',
                                                                'customer'
                                                                
                                                                )";
?>c