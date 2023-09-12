<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-indigo-300 h-[100vh] flex items-center justify-center">
    <div class="container">
        <h1 class="text-2xl font-bold mb-4 text-center">Temperature Converter</h1>
        <form method="POST" action="" class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md">
            <div class="mb-4">
                <label class="text-gray-700 text-sm font-bold mb-2">Enter Temperature</label>
                <input  type="number" name="temperature" id="temperature" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Input Your First Number" required>
            </div>
            <div class="mb-4">
                <select name="conversion" id="conversion" class="border border-gray-300 w-full rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
                    <option value="" disabled selected>Select Temperature type</option>
                    <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
                    <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
                </select>
            </div>
           
            <button type="submit" class="w-full font-bold bg-blue-600 text-white h-12 rounded-md mb-4">Convert</button>
            <div class="font-bold text-center">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $temperature = $_POST["temperature"];
                    $conversion = $_POST["conversion"];
                    $result = 0;

                    if ($conversion == "celsius_to_fahrenheit") {
                        $result = ($temperature * 9/5) + 32;
                        echo "<p>$temperature &deg;C is equal to $result &deg;F</p>";
                    } elseif ($conversion == "fahrenheit_to_celsius") {
                        $result = ($temperature - 32) * 5/9;
                        echo "<p>$temperature &deg;F is equal to $result &deg;C</p>";
                    }
                }
                ?>
            </div>
        </form>
    </div>
</body>
</html>