<?php
// <!-- fungsi yang membalikkan nilai -->
function biodata($name,$age){
    $data = [ 'name' => $name,
                'age' => $age,
                'addres' => "desa Jatinegara rt 2 rw 1, Kab Tegal",
                'hobbies' => array('Main game','Mainbola'),
                'is married' => false,
                'list_school' => [
                                "High School"  =>  "SMK N 1 Adiwerna",
                                "year In"      => 2016,
                                "year Out"     => 2019,
                                "Major"        => "Teknik Audio Video"
                ],
                'skill'     => [
                                "PHP"  => "Beginner",
                                "Js"   => "Beginner"
                ],
                'interest in coding' => true


     
];
echo json_encode($data);
}

$biodata = biodata('Mochamad Sofyan', 19);



?>