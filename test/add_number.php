<?php 
    if(isset($_POST["add"])){
        $add_num = $_POST['addnumber'];
        $res = explode( ',', $add_num );
        $merge_arr = array_merge($result,$res);
        asort($merge_arr);
        echo "Total numbers in ascending order is :";
        echo "<br>";
        foreach ($result as $key => $val) {
            echo "$val";
            echo "<br>";
        }
    }
?>
