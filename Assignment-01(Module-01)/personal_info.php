<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Info</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-indigo-300 h-[100vh] flex items-center justify-center">
    <div class="container">
        <h1 class="text-2xl font-bold mb-4 text-center">Personal Information</h1>
        <?php 
    $name = "Mizanur Rahman";
    $age = 24;
    $education =  " Software Engineering";
    $institute =  " Daffodil International University";
    $country = "Bangladesh";
    $introduction = "Hello Ostad,  I'm $name. <br> I am $age years old. I am from $country. <br> Currently I am learning PHP with Laravel in Ostad Platform. <br> My goal is to become a web developer. <br> Studying in $education at   $institute" ;

    echo $introduction."\n";

    ?>
    </div>
 
</body>
</html>


    