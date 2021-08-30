<?php
  $food = array ("orange","apple","banana","grapes","apple");

//   $len = count($food);

//   for ($i = 0; $i <$len ;$i++ ){
//       echo $food[$i] . "<br>";
//   }

//     $food = array (
//             'fruits'=>array('orange','apple','banana'),
//             'veggie'=>array('carrot','collard','pea')
//         );
//    echo count($food['fruits'],1);
//     echo "<pre>";
//     print_r(array_count_values($food));
//     echo "</pre>";

//in_array
    // if (in_array("banana",$food)){
    //     echo "Find successfully";
    // }else {
    //     echo "Can't find.";
    // }

    echo array_search("banana",$food);

?>