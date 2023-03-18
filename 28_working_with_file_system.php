<?php 

/* 
For related functions, see also the Directory and Program Execution sections.

For a list and explanation of the various URL wrappers that can be used as remote files, see also Supported Protocols and Wrappers.

Table of Contents ¶

basename — Returns trailing name component of path
chgrp — Changes file group
chmod — Changes file mode
chown — Changes file owner
clearstatcache — Clears file status cache
copy — Copies file
delete — See unlink or unset
dirname — Returns a parent directory's path
disk_free_space — Returns available space on filesystem or disk partition
disk_total_space — Returns the total size of a filesystem or disk partition
diskfreespace — Alias of disk_free_space
fclose — Closes an open file pointer
fdatasync — Synchronizes data (but not meta-data) to the file
feof — Tests for end-of-file on a file pointer
fflush — Flushes the output to a file
fgetc — Gets character from file pointer
fgetcsv — Gets line from file pointer and parse for CSV fields
fgets — Gets line from file pointer
fgetss — Gets line from file pointer and strip HTML tags
file_exists — Checks whether a file or directory exists
file_get_contents — Reads entire file into a string
file_put_contents — Write data to a file
file — Reads entire file into an array
fileatime — Gets last access time of file
filectime — Gets inode change time of file
filegroup — Gets file group
fileinode — Gets file inode
filemtime — Gets file modification time
fileowner — Gets file owner
fileperms — Gets file permissions
filesize — Gets file size
filetype — Gets file type
flock — Portable advisory file locking
fnmatch — Match filename against a pattern
fopen — Opens file or URL
fpassthru — Output all remaining data on a file pointer
fputcsv — Format line as CSV and write to file pointer
fputs — Alias of fwrite
fread — Binary-safe file read
fscanf — Parses input from a file according to a format
fseek — Seeks on a file pointer
fstat — Gets information about a file using an open file pointer
fsync — Synchronizes changes to the file (including meta-data)
ftell — Returns the current position of the file read/write pointer
ftruncate — Truncates a file to a given length
fwrite — Binary-safe file write
glob — Find pathnames matching a pattern
is_dir — Tells whether the filename is a directory
is_executable — Tells whether the filename is executable
is_file — Tells whether the filename is a regular file
is_link — Tells whether the filename is a symbolic link
is_readable — Tells whether a file exists and is readable
is_uploaded_file — Tells whether the file was uploaded via HTTP POST
is_writable — Tells whether the filename is writable
is_writeable — Alias of is_writable
lchgrp — Changes group ownership of symlink
lchown — Changes user ownership of symlink
link — Create a hard link
linkinfo — Gets information about a link
lstat — Gives information about a file or symbolic link
mkdir — Makes directory
move_uploaded_file — Moves an uploaded file to a new location
parse_ini_file — Parse a configuration file
parse_ini_string — Parse a configuration string
pathinfo — Returns information about a file path
pclose — Closes process file pointer
popen — Opens process file pointer
readfile — Outputs a file
readlink — Returns the target of a symbolic link
realpath_cache_get — Get realpath cache entries
realpath_cache_size — Get realpath cache size
realpath — Returns canonicalized absolute pathname
rename — Renames a file or directory
rewind — Rewind the position of a file pointer
rmdir — Removes directory
set_file_buffer — Alias of stream_set_write_buffer
stat — Gives information about a file
symlink — Creates a symbolic link
tempnam — Create file with unique file name
tmpfile — Creates a temporary file
touch — Sets access and modification time of file
umask — Changes the current umask
unlink — Deletes a file


fopen

(PHP 4, PHP 5, PHP 7, PHP 8)
fopen — Opens file or URL

Description ¶

fopen(
    string $filename,
    string $mode,
    bool $use_include_path = false,
    ?resource $context = null
): resource|false
fopen() binds a named resource, specified by filename, to a stream.

Parameters ¶

filename
If filename is of the form "scheme://...", it is assumed to be a URL and PHP will search for a protocol handler (also known as a wrapper) for that scheme. If no wrappers for that protocol are registered, PHP will emit a notice to help you track potential problems in your script and then continue as though filename specifies a regular file.

If PHP has decided that filename specifies a local file, then it will try to open a stream on that file. The file must be accessible to PHP, so you need to ensure that the file access permissions allow this access. If you have enabled open_basedir further restrictions may apply.

If PHP has decided that filename specifies a registered protocol, and that protocol is registered as a network URL, PHP will check to make sure that allow_url_fopen is enabled. If it is switched off, PHP will emit a warning and the fopen call will fail.

Note:
The list of supported protocols can be found in Supported Protocols and Wrappers. Some protocols (also referred to as wrappers) support context and/or php.ini options. Refer to the specific page for the protocol in use for a list of options which can be set. (e.g. php.ini value user_agent used by the http wrapper).
On the Windows platform, be careful to escape any backslashes used in the path to the file, or use forward slashes.

 <?php
$handle = fopen("c:\\folder\\resource.txt", "r");
?>
mode
The mode parameter specifies the type of access you require to the stream. It may be any of the following:

A list of possible modes for fopen() using mode
mode	Description
'r'	Open for reading only; place the file pointer at the beginning of the file.
'r+'	Open for reading and writing; place the file pointer at the beginning of the file.
'w'	Open for writing only; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.
'w+'	Open for reading and writing; otherwise it has the same behavior as 'w'.
'a'	Open for writing only; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() has no effect, writes are always appended.
'a+'	Open for reading and writing; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() only affects the reading position, writes are always appended.
'x'	Create and open for writing only; place the file pointer at the beginning of the file. If the file already exists, the fopen() call will fail by returning false and generating an error of level E_WARNING. If the file does not exist, attempt to create it. This is equivalent to specifying O_EXCL|O_CREAT flags for the underlying open(2) system call.
'x+'	Create and open for reading and writing; otherwise it has the same behavior as 'x'.
'c'	Open the file for writing only. If the file does not exist, it is created. If it exists, it is neither truncated (as opposed to 'w'), nor the call to this function fails (as is the case with 'x'). The file pointer is positioned on the beginning of the file. This may be useful if it's desired to get an advisory lock (see flock()) before attempting to modify the file, as using 'w' could truncate the file before the lock was obtained (if truncation is desired, ftruncate() can be used after the lock is requested).
'c+'	Open the file for reading and writing; otherwise it has the same behavior as 'c'.
'e'	Set close-on-exec flag on the opened file descriptor. Only available in PHP compiled on POSIX.1-2008 conform systems.




*/

/* clearstatcache

(PHP 4, PHP 5, PHP 7, PHP 8)
clearstatcache — Clears file status cache

Description ¶

clearstatcache(bool $clear_realpath_cache = false, string $filename = ""): void
When you use stat(), lstat(), or any of the other functions listed in the affected functions list (below), PHP caches the information those functions return in order to provide faster performance. However, in certain cases, you may want to clear the cached information. For instance, if the same file is being checked multiple times within a single script, and that file is in danger of being removed or changed during that script's operation, you may elect to clear the status cache. In these cases, you can use the clearstatcache() function to clear the information that PHP caches about a file.

You should also note that PHP doesn't cache information about non-existent files. So, if you call file_exists() on a file that doesn't exist, it will return false until you create the file. If you create the file, it will return true even if you then delete the file. However unlink() clears the cache automatically.

Note:
This function caches information about specific filenames, so you only need to call clearstatcache() if you are performing multiple operations on the same filename and require the information about that particular file to not be cached.
Affected functions include stat(), lstat(), file_exists(), is_writable(), is_readable(), is_executable(), is_file(), is_dir(), is_link(), filectime(), fileatime(), filemtime(), fileinode(), filegroup(), fileowner(), filesize(), filetype(), and fileperms().

Parameters ¶

clear_realpath_cache
Whether to also clear the realpath cache.

filename
Clear the realpath cache for a specific filename only; only used if clear_realpath_cache is true.

Return Values ¶

No value is returned.

Examples ¶

Example #1 clearstatcache() example

 <?php
$file = 'output_log.txt';

function get_owner($file)
{
    $stat = stat($file);
    $user = posix_getpwuid($stat['uid']);
    return $user['name'];
}

$format = "UID @ %s: %s\n";

printf($format, date('r'), get_owner($file));

chown($file, 'ross');
printf($format, date('r'), get_owner($file));

clearstatcache();
printf($format, date('r'), get_owner($file));
?>
 */
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

// if (!file_exists('shashi.txt')) {
//     echo "file does not exists";
//     return;
// }
// $file =fopen('shashi.txt', 'r');
// var_dump($file);


/*  */
// $file = fopen('shashi.txt', 'r');

// while (($line = fgets($file)) !== false) {
//     echo $line;
// };
// fclose($file);

/*  */

// $file = fopen('shashi.txt', 'r');

// while (($line = fgetcsv($file)) !== false) {
//     print_r($line) ;
// };
// fclose($file);


/*  */

// $contents = file_get_contents('shashi.txt');
// echo $contents;
/*  */

// file_put_contents('shashi.txt', " i love bangladesh");
// file_put_contents('shashi.txt', " i love china", FILE_APPEND);


/*  */
// unlink('shashi.txt');


/*  */
//copy('shashi.txt', 's.txt');
/*  */
// rename('s.txt', 'sasi.txt');


/* 😀 dirname()  */

/*

dirname() is a built-in function in PHP that returns the directory portion of a given path. 
It takes a single parameter, which is the path that you want to extract the directory name from,
and returns the parent directory's path.

Here's an example of how to use dirname():
 */

// $path = '/var/www/myproject/index.php';
// $directory = dirname($path);
// echo $directory; // Output: /var/www/myproject

/* In this example, the $path variable contains the full path to a file (index.php). 
We pass this variable to dirname(), which extracts the directory portion of the path 
(/var/www/myproject) and assigns it to the $directory variable. Finally, 
we use echo to output the directory path.

dirname() is useful for when you need to extract the directory portion of a path, 
especially when working with file paths. It can be used to navigate to parent directories 
or to construct new file paths based on existing ones.
 */
/* scandir */
/* scandir() is a built-in function in PHP that is used to retrieve a list of all files and directories within a specified directory. 
It takes one required parameter, which is the path of the directory that you want to scan.

Here's an example of how to use scandir() to list all files and directories within a directory:


$dir = '/var/www/myproject/';
$files = scandir($dir);

foreach ($files as $file) {
    echo $file . "\n";
} */

/* another real example */
//  $root = dirname(__DIR__).DIRECTORY_SEPARATOR;
//  echo $root;

//  $path =dirname(__DIR__);
//  echo $path ."\n";
//  //print_r(scandir($path)) ;
//  $files =scandir($path);
//  foreach ($files as $file ) {
//     if (is_dir($file)) {
//         continue;
//     }else{
//         echo $file ."\n";
//         return $file;
//     }
    
 //}

//  $files =[];
//  $files[]='shashi.txt';
//  $files[]='shash.txt';
//  $files[]='shas.txt';
//  $files[]='sha.txt';
//  $files[]='sh.txt';
//  $files[]='s.txt';
// print_r($files);


?>