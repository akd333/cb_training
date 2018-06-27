<?php
    if(isset($_POST["submit"])){
        session_start();
        $_SESSION['number'] = $_POST['number'];
        $num_list = $_SESSION['number'];
        echo "Your input is : $num_list";
        echo "<br>";
        //global $result;
        $result = explode( ',', $num_list );
        asort($result);
            echo "Numbers in ascending order is :";
            echo "<br>";
            foreach ($result as $key => $val) {
                echo "$val";
                echo "<br>";
            }
            
        echo "<br>";
        arsort($result);
            echo "Numbers in descending order is :";
            echo "<br>";
            foreach ($result as $key => $val) {
                echo "$val";
                echo "<br>";
            }
    }
    if(isset($_POST["add"])){
        session_start();
        $num_list = $_SESSION['number'];
        $result = explode( ',', $num_list );
        $add_num = $_POST['addnumber'];
        $res = explode( ',', $add_num );
        $merge_arr = array_merge($result,$res);
        asort($merge_arr);
        echo "Total numbers in ascending order is :";
        echo "<br>";
        foreach ($merge_arr as $key => $val) {
            echo "$val";
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
                        <label class="label">Add numbers separated by comma(,) only</label>
                        <div class="control">
                            <input class="input is-primary" type="text" placeholder="Enter number" name="addnumber" required>
                        </div>
                    </div>
                    <div class="field is-grouped is-grouped-centered">
                        <div class="control">
                            <button type="submit" name="add" class="button is-primary">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</body>

</html>