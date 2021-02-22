<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
    </head>
    <body>
    <h2> Simple Calculator</h2>

        <form method="post">
            <input type="text" name="numb1" placeholder="Enter firstNumber">
            <input type="text" name="numb2" placeholder="Enter secondNumber">
            <select name="operator" id="">
            <option>Select operation</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>  
            </select> <br>
            <button type="submit" name="submit" value="submit" style='margin-top:3px'>Calculate</button>
        </form>

    Result:

        <?php 

            if (isset($_POST['submit'])) {
                $result1 = $_POST['numb1'];
                $result2 = $_POST['numb2'];
                $operator = $_POST['operator'];
                switch ($operator) {
                    case 'Select operation':
                        echo "select an operator";
                        break;
                    case 'Add':
                        echo $result1 + $result2;
                        break;
                    case 'Subtract':
                        echo $result1 - $result2;
                        break;
                    case 'Multiply':
                        echo $result1 * $result2;
                        break;
                    case 'Divide':
                        echo $result1 / $result2;
                        break;
                }
            }
        ?>
    </body>
    </html>