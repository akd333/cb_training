<?php
    if(isset($_POST["submit"])){
        session_start();
        $_SESSION['number'] = $_POST['number'];
        $num_list = $_SESSION['number'];
        echo "Your input is : $num_list";
        echo "<br>";
        $result = explode( ',', $num_list );
        asort($result);
        print_r($result);
        echo "Numbers in ascending order is :";
        echo "<br>";
        foreach ($result as $key => $val) {
            echo "$key : $val";
            echo "<br>";
        }
            
        echo "<br>";
        arsort($result);
        echo "Numbers in descending order is :";
        echo "<br>";
        foreach ($result as $key => $val) {
            echo "$key : $val";
            echo "<br>";
        }
    }
    if(isset($_POST["swap"])){
        session_start();
        $num_list = $_SESSION['number'];
        $result = explode( ',', $num_list );
        asort($result);
        echo "<br>";
        $temp = $result[$_POST['index1']];
        $result[$_POST['index1']] = $result[$_POST['index2']];
        $result[$_POST['index2']] = $temp;
        Echo "The swapped result is :";
        Echo "<br>";
        foreach ($result as $key => $val) {
            echo "$key : $val";
            echo "<br>";
       }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
</head>
<body>
    <section class="container">
        <form method="POST">
            <div class="columns is-centered ">
                <div class="column is-8">
                    <div class="field">
                        <label class="label">Enter two existing indices to swap </label>
                        <div class="control">
                            <input class="input is-primary" type="number" placeholder="Enter index" name="index1" required>
                        </div>
                        <div class="control">
                            <input class="input is-primary" type="number" placeholder="Enter index" name="index2" required>
                        </div>
                    </div>
                    <div class="field is-grouped is-grouped-centered">
                        <div class="control">
                            <button type="submit" name="swap" class="button is-primary">Swap</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</body>

</html>