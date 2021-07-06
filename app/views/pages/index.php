<?php

foreach($data['users'] as $user){
    echo "Informtion: " . $user->user_name . ' ' . $user->user_email;
    echo "<br>";
}
    
?>