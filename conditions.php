<?php
$username = "ahmet";
$userPassword = 12345;

// if ($username == "ahmet" || $userPassword == 12345) {
//     echo "username yada parola doğru";
// } else {
//     echo "username yanlış";
// }

// if ($username == "ahmet") {
//     if ($userPassword == 12345) {
//         echo "username ve parola doğru";
//     }
   
// } else {
//     echo "username yanlış";
// }

if ($username!="ahmet") {
    echo "username yanlış";
}
elseif($userPassword!=1345) {
    echo "parola yanlış";
}
else {
    echo "giriş başarılı";
}
?>