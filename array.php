<?php
    // $colors = ["red",20,"blue",12.50];
    // echo "<ul>";
    // for ( $i = 0;$i <ul 4 ; $i++){
    //     echo  "<li> $colors[$i] </li>";
    // }
    // echo "</ul>"
        // $age = [
        //     "bill" =>25,
        //     "steve"=>28,
        //     "elon" =>22
        // ];
        // echo "<pre>";
        // var_dump($age);
        // echo "</pre>";

        // echo $age["bill"]."<br>";
        // echo $age["steve"]."<br>";
        // echo $age["elon"]."<br>";

    // $colors = [
    //     "red",
    //     "green",
    //     "blue"  
    // ];
    // foreach($colors as $value)
    // {
    //     echo $value . "<br>";
    // }
    //   $age = [
    //         "bill" =>25,
    //         "steve"=>28,
    //         "elon" =>22,
    //     ];
    //     echo "<ul>";
    //     foreach ($age as $key=>$value){
    //         echo "<li> $key = $value </li>";
    //     }
    //     echo "</ul>";
        $mark = [ 
            "Adam" => [
                "physics" =>85,
                "maths" =>78,
                "chemistry"=>89
            ],
            "Eva" => [
                "physics" =>68,
                "maths" =>73,
                "chemistry"=>79
            ],
            "David" => [
                "physics" =>65,
                "maths" =>68,
                "chemistry"=>90
                ]
            ];
            echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
            foreach ($mark as $key=>$v1) {
                echo "<tr>
                        <td>$key</td>";
                foreach ($v1 as $v2){
                    echo "<td> $v2 </td>";
                }
                echo "</tr>";
            }
            echo "</table>";
    
        echo "<pre>";
        print_r($mark);
        echo "</pre>";
?>