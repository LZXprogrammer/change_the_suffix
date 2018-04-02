<?php

$filenames = $_GET['filenames'];
$suffixname = $_GET['suffixname'];
// var_dump($filenames, $suffixname);


$filename_arr = explode(',', trim($filenames, ",\t\n\r\0\x0B"));

// echo json_encode($filename_arr);die;

// $filename = ['Adbs', 'Animal face'];
$dir = "./Base";
// function updateSuffix($dir){

    foreach ($filename_arr as $key => $value) {
    // print_r($filename_arr);die;
        // 打开目录，然后读取其内容
        if (is_dir($dir.'/'.$value)){
          if ($dh = opendir($dir.'/'.$value)){
            while (($file = readdir($dh)) !== false){
              if($file == '.' || $file == '..' || $file == '.DS_Store'){
                  continue;
              }
              // echo $file . "\n";
              $exp = explode('.', $file);
              // print_r($exp[1]);echo "\n";

              rename($dir.'/'.$value.'/'.$file, $dir.'/'.$value.'/'.$exp[0].'.'.$suffixname);
            }
            closedir($dh);
          }
        }

    }
// }
// $dir = "./Base";
// call_user_func('updateSuffix', $dir);



/**
 * 递归遍历一个目录文件下的所有文件
 * @return filenames
 */
// function scanfiles($dir){

//     if(is_dir($dir)) {

//       $children = scandir($dir);

//       // var_dump($children);
//       foreach ($children as $child)
//       {
//         if ($child == '.' || $child == '..' || $child == '.DS_Store')
//         {
//             // scanfiles($dir.'/'.$child);
//             continue;
//         }
//         echo $child."\n";
//         scanfiles($dir.'/'.$child);
//       }
//     }

// }
// scanfiles('./Base');
