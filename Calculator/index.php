<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<div class="col-md-2 mx-auto mt-5">
<form class="d-flex justify-content-center flex-column" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input class="form-control mb-3" type="number" name="num1" placeholder="First Number"/>
    <input class="form-control mb-3" type="number" name="num2" placeholder="Second Number"/>
    <select class="form-select mb-3" name="oper">
        <option selected>Operator</option>
        <option value="+">Add</option>
        <option value="-">Subtract</option>
        <option value="*">Multiply</option>
        <option value="/">Divide</option>
    </select>

<?php

function calculate($num01, $num02, $oper){
    $answer;

    switch ($oper){
        case "+":
            $answer = $num01 + $num02;
            break;
        case "-":
            $answer = $num01 - $num02;
            break;
        case "*":
            $answer = $num01 * $num02;
            break;
        case "/":
            $answer = $num01 / $num02;
            break;
        default:
            $answer = "Error!";
            break;
    }
    return $answer;
}
$answer='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num01 = $_POST['num1'];
    $num02 = $_POST['num2'];
    $oper = $_POST['oper'];
    if (empty($oper)) {
        echo "Error!";
    } else {
        $answer = calculate($num01, $num02, $oper);
        echo '<input class="form-control mb-3" type="number" value="'.$answer.'" placeholder="Answer" readonly/>';
    }

} else {
    echo '<input class="form-control mb-3" type="number" value="'.$answer.'" placeholder="Answer" readonly/>';
}

?>
       <button type="submit" class="btn btn-primary mb-3 mx-auto">Calculate</button>

</form> 

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>