<?php
              session_start();
              if( isset  ($_COOKIE['username'])  )
              {
                     if( isset  ($_COOKIE['password']))
                     {
                          header("Location: Member.html");
                     }
              }
              else{
              header("Location: entry.html ");
            }

?>