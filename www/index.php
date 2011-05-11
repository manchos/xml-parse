<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
          echo "я все еще живу";
          $d='FIELD.10';
            $xml = simplexml_load_file('readers.xml');
            foreach ($xml->record as $reader) {
                $reader=get_object_vars($reader);
                echo $reader['FIELD.10'];  // извлекаем название книги
              //  echo $reader->{FIELD.11}; // извлекаем имя и фамилию автора
            }
        ?>
    </body>
</html>
