<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php</title>
</head>
<body>
    <!-- عشان نكتب كود php -->
     <!-- < ?php [php code] ?> -->
    <?php
    // لازم ننهي الكود بـ ;
    // للطباعة: echo 
    echo "hi <br>";
    // نستخدم علامة الدولار قبل اسم المتغير
    $any_variable = "hi";
    $age = 2;
    // if statements
    // if (الشرط ولازم يكون بين قوسين) 
    // ما يحتاج قوس معاق
    if ($age >= 12)
        echo "ok";
    elseif ($age>5 && $age <7)
        echo "6";
    else
        echo "idk";
    // حق while loop لازم نستخدم القوس المعاق
    $num = 10;
    while ($num>1){
        // $num--; صح
        // $num++; صح
        // $num+=1; صح
        echo "$num <br>";
        $num-=1;
    }
    echo "done";
    do{
        echo "<br> using do while <br>";
        $num++;
    } while($num <= 3);


    for ($i=0; $i<5; $i++){
        echo "using for loop $i <br>";
    }

    $value = 4;
    switch($value){
        case ($value % 2 == 0 ):
            echo "$value عدد زوجي <br/>";
            break;
        default:
            echo "$value عدد فردي";
        }

    $empty_array = array(); // تعريف قائمة فاضية
    $not_empty_array = array("majed", "ahmad"); // تعريف قائمة فيها بيانات
    $test = array("majed");
    $test[] = "talal"; //اضافة للقائمة
    $test[0] = "hi"; //تغيير قيمة اول متغير
    print_r($test); // عشان نطبع القائمة وقيمها
    echo "<br>"; //عشان ننزل سطر
    echo array_search("hi", $test); //تبحث عن القيمة داخل القائمة
    // ---------

    // عشان نسوي قائمة من مفتاح وقيمة
    $list = array("majed"=> 20, "ahmad"=>45, "talal"=>21);
    print_r($list);

    // عشان نحصل على كل مفتاح وقيمته بروح بروح
    foreach ($list as $name => $age){
        echo "<br> $name your age is $age <br>";
    }
    // عشان نعرف عدد القيم
    echo count($list);

    // ترتيب من القيمة الاصغر الى الاكبر
    asort($list);
    // ترتيب المفتاح بالحروف a->z
    ksort($list);
    // تحويل المفاتيح الى ارقام
    shuffle($list);
    // ترتيب المفاتيح
    sort($list);

    // تأكد هل المفتاح موجود؟
    array_key_exists('ali',$list);
    
    // هل المفتاح set
    isset($list['majed']);

    // عشان نتأكد اذا رقم او لا
    is_numeric($num);

    // عشان نحصل على البيانات
    $name = $_GET["data name"];
    $any = $_POST["data name"];

?>
</body>
</html>
