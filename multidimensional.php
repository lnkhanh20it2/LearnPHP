<?php
    $emp = [
        [1,"Bill Gate","Manager",50000],
        [2,"Adam","Sale man",50000],
        [3,"Eva","Computer Operator",50000],
        [4,"David","Driver",50000]    
    ];
//     for ($i = 0; $i<4 ; $i++){
//         for ($j= 0; $j<4 ; $j++){
//             echo $emp[$i][$j]. " ";
//         }
//         echo "<br>";
//     }


// echo "<pre>";
// print_r($emp);
// echo "</pre>";
echo "<table border='2px' cellpadding='5px'>";
echo "<tr>
        <th>Emp Id </th>
        <th>Emp Name </th>
        <th>Emp Designation </th>
        <th>Emp Salary </th>
        </tr> ";
    foreach ($emp as $v1){
        echo "<tr>";
        foreach ($v1 as $v2){
            echo "<td> $v2 </td>";
        }
        echo "</tr>";
    }
echo "<table>";
?>