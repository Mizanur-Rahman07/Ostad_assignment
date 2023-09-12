<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-indigo-300 h-[100vh] flex items-center justify-center">
    <div class="container">
        <h1 class="text-2xl font-bold mb-4 text-center">Comparison Tool</h1>
        <form method="POST" action="" class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md">
            <div class="mb-4">
                <label class="text-gray-700 text-sm font-bold mb-2">First Number</label>
                <input name="compareNo1" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" type="number" placeholder="Input Your First Number" required>
            </div>
            <div class="mb-4">
                <label class="text-gray-700 text-sm font-bold mb-2">Second Number</label>
                <input type="number" name="compareNo2" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Input Your Second Number" required>
            </div>
           
            <button type="submit" class="w-full font-bold bg-blue-600 text-white h-12 rounded-md mb-4">Compare</button>
            <div class="font-bold text-center">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num1 = $_POST["compareNo1"];
                    $num2 = $_POST["compareNo2"];
                    $largeNum = ($num1 == $num2) ? "Both are same Number" : (($num1 > $num2) ? "$num1 is Large Number" : "$num2 is Large Number");
                    echo $largeNum;
                }
            ?>
            </div>
        </form>
    </div>
</body>
</html>