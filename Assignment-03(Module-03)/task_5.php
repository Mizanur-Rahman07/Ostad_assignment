<!-- Task 5: Password Generator
Create a PHP function called generatePassword($length) that generates a random password of the 
specified length. The password should include lowercase letters, uppercase letters, numbers, and 
special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 
characters using this function and print the password. -->

<?php
function generatePassword($length) {
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $special_chars = '!@#$%^&*()_+';
    $all_characters = $lowercase . $uppercase . $numbers . $special_chars;
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $random_index = mt_rand(0, strlen($all_characters) - 1);
        $password .= $all_characters[$random_index];
    }
    return $password;
}

$password = generatePassword(12);
echo "Generated Password: $password\n";
?>
