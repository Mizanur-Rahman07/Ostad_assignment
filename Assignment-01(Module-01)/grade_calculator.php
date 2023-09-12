<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-indigo-300 h-[100vh] flex items-center justify-center">
    <div class="container">
        <h1 class="text-2xl font-bold mb-4 text-center">Grade Calculate</h1>
        <form method="POST" action="" class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md">
            <div class="mb-4">
                <label class="text-gray-700 text-sm font-bold mb-2">First Subject Mark</label>
                <input name="courseOne" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" type="number" placeholder="Input Your First Number" required>
            </div>
            <div class="mb-4">
                <label class="text-gray-700 text-sm font-bold mb-2">Second Subject Mark</label>
                <input type="number" name="courseTwo" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Input Your Second Number" required>
            </div>
            <div class="mb-4">
                <label class="text-gray-700 text-sm font-bold mb-2">Third Subject Mark</label>
                <input type="number" name="courseThree" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Input Your Second Number" required>
            </div>
           
            <button type="submit" class="w-full font-bold bg-blue-600 text-white h-12 rounded-md mb-4">Calculate</button>
            <div class="font-bold text-center">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $courseOne = $_POST["courseOne"];
                    $courseTwo = $_POST["courseTwo"];
                    $courseThree = $_POST["courseThree"];

                    $average = ($courseOne + $courseTwo + $courseThree) / 3;

                    if ($average >= 90 && $average <= 100) {
                        $grade = 'Golden A+';
                    } elseif ($average >= 80 && $average <= 100) {
                        $grade = 'A+';
                    } elseif ($average >= 70 && $average <= 79) {
                        $grade = 'A';
                    } elseif ($average >= 60 && $average <= 69) {
                        $grade = 'A-';
                    } elseif ($average >= 50 && $average <= 59) {
                        $grade = 'B';
                    } elseif ($average >= 40 && $average <= 49) {
                        $grade = 'C';
                    } elseif ($average >= 33 && $average <= 39) {
                        $grade = 'D';
                    } elseif ($average <= 32 && $average >= 0) {
                        $grade = 'F';
                    } else {
                        $grade = "Invalid Input";
                    }

                    echo "<p>Your Average Mark: $average</p>";
                    echo "<p>Your Grade (GPA): $grade</p>";
                    }
                    ?>
            </div>
        </form>
    </div>
</body>

</html>