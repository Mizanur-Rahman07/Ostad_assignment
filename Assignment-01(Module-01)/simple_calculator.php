<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-indigo-300 h-[100vh] flex items-center justify-center">
    <div class="container">
        <h1 class="text-2xl font-bold mb-4 text-center">Simple calculator</h1>
        <form method="POST" action="" class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md">
            <div class="mb-4">
                <label class="text-gray-700 text-sm font-bold mb-2">First Number</label>
                <input name="num1" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" type="number" placeholder="Input Your First Number" required>
            </div>
            <div class="mb-4">
                <label class="text-gray-700 text-sm font-bold mb-2">Second Number</label>
                <input type="number" name="num2" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Input Your Second Number" required>
            </div>
            <div class="mb-4">
                <select name="operation" id="" class="border border-gray-300 w-full rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
                    <option value="" disabled selected>Select Option</option>
                    <option value="add">Addition (+)</option>
                    <option value="subtract">Subtraction (-)</option>
                    <option value="multiply">Multiplication (*)</option>
                    <option value="divide">Division (/)</option>
                </select>
            </div>
            <button type="submit" class="w-full font-bold bg-blue-600 text-white h-12 rounded-md mb-4">Calculate</button>
            <div class="font-bold text-center">
                <?php 
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $num1 = $_POST["num1"];
                        $num2 = $_POST["num2"];
                        $operation = $_POST["operation"];
                        // switch ($operation) {
                        //     case 'add':
                        //         $result = $num1 + $num2;
                        //         echo "The Result is : $result";
                        //         break;
                        //     case 'subtract':
                        //         $result = $num1 - $num2;
                        //         echo "The Result is : $result";
                        //         break;
                        //     case 'multiply':
                        //         $result = $num1 * $num2;
                        //         echo "The Result is : $result";
                        //         break;
                        //     case 'divide':
                        //         if ($num2 != 0) {
                        //             $result = $num1 / $num2;
                        //             echo "The Result is : $result";
                        //         }else {
                        //             echo "Please don't divide with ZERO";
                        //         }
                        //         break;
                        //     default:
                        //         echo "Not a Valid Operation";
                        //         break;
                        // }

                         //system 2 
                         
                        if ($operation == 'add') {
                            $result = $num1 + $num2;
                            echo "The Sum is : $result";
                        }elseif ($operation == 'subtract') {
                            $result = $num1 - $num2;
                            echo "The Subtraction is : $result";
                       
                        }elseif ($operation == 'multiply') {
                            $result = $num1 * $num2;
                            echo "The Result is : $result";
                        }elseif ($operation == 'divide') {
                            $result = $num1 / $num2;
                            echo "The Quotient is : $result";
                        }    } else {
                            $result = "Invalid operator";
                       
                    }                
                ?>
            </div>
        </form>
    </div>
</body>
</html>