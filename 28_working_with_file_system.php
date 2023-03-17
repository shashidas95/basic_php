<?php 
// $dir = scandir(__DIR__);
//var_dump($dir);
//var_dump(is_file($dir[9]));
//var_dump(is_dir($dir[9]));

/* making directory */
//mkdir("shashi");
/* remove directory */
// rmdir("shashi");
/*  */
// mkdir("shashi/robi", recursive:true);
/*  */
//  rmdir("shashi/robi");

/* file_size */
// if (file_exists("shashi.txt")) {
//     echo filesize("shashi.txt");
//     file_put_contents('shashi.txt', "hello world");
//     echo filesize('shashi.txt');
//     clearstatcache();
// } else {
//     echo "No file is found name shashi.txt";
// }

/*  */

if (!file_exists('shashi.txt')) {
    echo "file does not exists";
    return;
}
$file =fopen('shashi.txt', 'r');
var_dump($file);

?>