<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
     initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    //$files = scandir('./');
    // foreach ($files as $file) {
    //   echo $file;
    // echo ' ';
    //}


    function readFolderFiles($dir)
    {
        $file = scandir('./');
        print('<ul>');
        foreach ($file as $file) {
            if (substr($file, 0, 1) != '.') {
                print('<li>');
                if (is_dir($dir . '/' . $file)) {
                    print($file);
                    readFolderFiles($dir . '/' . $file);
                } else {
                    print($file);
                }
            }
            print('</li>');
        }
        print('</ul>');
    }
    readFolderFiles('data');


    ?>




</body>

</html>