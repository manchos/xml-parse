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
            
            // include class file
            include("XML/Serializer.php");
            $serializer = new XML_Serializer();
            
           // print_r($serializer);
            /** @TODO 
             * http://www.melonfire.com/community/columns/trog/article.php?id=244&page=2
             */
            // create array to be serialized
           
            // object definition
            class User
            {

               // object properties
               private $color;
               private $year;
               private $model;

               public function setAttributes($c, $y, $m)
               {
                  $this->color = $c;
                  $this->year = $y;
                  $this->model = $m;
               }
            }


            
            $xml = array ( "fullName" => array (
                                "surname" => $reader['FIELD.10'],
                                "name" => $reader['FIELD.11'],
                                "patronymic" => $reader['FIELD.12']
                            ),
                            "birthDate"=>''
                            
                );

            // perform serialization
            $result = $serializer->serialize($xml);

            // check result code and display XML if success
            if($result === true)
            {
               echo $serializer->getSerializedData();
            }
            
            /**
             * @todo проверка xml-схемы
             * http://www.xml-training-guide.com/validate-xml-against-schema-using-php.html
             * git push -u origin master
             */
        ?>
    </body>
</html>
