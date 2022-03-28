<html>
    <head></head>
    <body>
        <center>
            <button onclick="document.body.style.backgroundColor = 'black'; document.body.style.color = 'white';">Black</button>
            <button onclick="document.body.style.backgroundColor = 'white'; document.body.style.color = 'black';">White</button>
            <br/><br/>
            <?php

            $files = scandir('./');
            $f = array();
            $count = 1;
            foreach($files as $file)
            {
                if($file != 'index.php' && $file != '..' && $file != '.') {
                    echo 'Ad: '.$count.'<br/><br/><img src="'.$file.'"><br/><br/><hr/><br/><br/>';
                    $count++;
                }
            }
            // print_r($f);
            ?>
        </center>
    </body>
</html>