<?php

$filenames = $_POST['filenames'];
$suffix = $_POST['suffix'];
// var_dump($filenames, $suffix);

$filename = explode(',', $filenames);

// print_r($filename);

// $filename = ['Adbs', 'Animal face'];
$dir = "./Base";
// function updateSuffix($dir){

    foreach ($filename as $key => $value) {
    // print_r($filename);die;
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

              rename($dir.'/'.$value.'/'.$file, $dir.'/'.$value.'/'.$exp[0].'.'.$suffix);
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
function scanfiles($dir){

    if(is_dir($dir)) {

      $children = scandir($dir);

      // var_dump($children);
      foreach ($children as $child)
      {
        if ($child == '.' || $child == '..' || $child == '.DS_Store')
        {
            // scanfiles($dir.'/'.$child);
            continue;
        }
        echo $child."\n";
        scanfiles($dir.'/'.$child);
      }
    }

}
// scanfiles('./Base');
