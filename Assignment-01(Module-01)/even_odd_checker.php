<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Checker</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-indigo-300 h-[100vh] flex items-center justify-center">
    <div class="container">
        <h1 class="text-2xl font-bold mb-4 text-center">Check Your Number Even or Odd</h1>
        <form method="POST" action="" class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md">
            <div class="mb-4">
                <label class="text-gray-700 text-sm font-bold mb-2">Enter a Number</label>
                <input  type="number" name="number" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Input Your First Number" required>
            </div>
           
            <button type="submit" class="w-full font-bold bg-blue-600 text-white h-12 rounded-md mb-4">Check Odd or Even</button>
            <div class="font-bold text-center">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $number = $_POST["number"];
                    echo ($number % 2 == 0) ? "$number is Even Number " : "$number is Odd Number";
                }
                ?>
            </div>
        </form>
    </div>
</body>
</html>