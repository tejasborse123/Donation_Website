<?php

              session_start();
              if( isset  ($_COOKIE['username'])  )
              {
                     if( isset  ($_COOKIE['password']))
                     {
                          json_encode($_COOKIE);
                          setcookie('username', "" , time()-3600 , "/");
                          setcookie('password', "" , time()-3600 , "/");
                          session_destroy();

                          session_start();
                          $label = " !!..You Have Successfully Logged out..!! ";
                          $_SESSION['label']=$label;
                          include 'entry.html';
                     }
              }
      
?>


<!--
      setcookie('username', $username,time()-1000);
      setcookie('password', $password,time()-1000);
-->