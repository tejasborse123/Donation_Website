<?php
              session_start();
              if( isset  ($_COOKIE['username'])  )
              {
                     if( isset  ($_COOKIE['password']))
                     {
                          header("Location: profile.html");
                     }
              }
              else{
              header("Location: entry.html ");
            }

?>\