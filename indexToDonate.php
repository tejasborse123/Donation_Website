<?php
              session_start();
              if( isset  ($_COOKIE['username'])  )
              {
                     if( isset  ($_COOKIE['password']))
                     {
                          header("Location: Donate.html");
                     }
              }
              else{
              header("Location: entry.html ");
            }

?>