<!-- Mochamad Sofyan -->

<?php
     function isAcceptedUsername($username) {
          return preg_match('/^[a-z]{3}[a-z]{2,5}$/i',$username) ;
     }
   
     // Cara menggunakan fungsi di atas
     if (isAcceptedUsername("_mustopa")) {
         echo "Username Is Valid" ;
     } else {
         echo "Username Is Invalid" ;
     };
echo "<br>";
     function isAcceptedPassword($password){
         return preg_match('/^[a-zA-Z0-9!]{9}$/i', $password);
     }

     // password
     if (isAcceptedPassword('!eeth0v3n')){
         echo "Password Is Valid";
     }else {
        echo "Password Is Invalid" ;
    };
?>