<!--List all the file in a directory-->
<?php
//$path = "TestFileFolder1";
//$result = scandir($path);
//foreach ($result as $item) {
//    if ($item !== "." && $item !== "..") {
////        echo $item . "<br/>";
//    }
//}
//// Remove . and ..
//
//$directory = array_diff($result,[".",".."]);
//foreach ($directory as $file)
//{
//    echo $file."<br/>";
//}

//$path = "TestFileFolder1";
//$result = scandir($path);
//$result = array_diff($result, ['.', '..']);
//foreach ($result as $item) {
//    if (is_dir($path . '/' . $item)) {
//        echo $item."</br>";
//    }
//}




if (file_exists("testFile3")){
    mkdir("testFile3");
    echo "done";
}