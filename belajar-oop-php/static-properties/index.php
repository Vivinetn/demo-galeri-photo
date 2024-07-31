<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Static properties</title>
    <!-- Static= Nilai yang tidak berubah/bergerak (tetap) -->
</head>
<body>
    <?php
        class ParentClass{
            //Deklarasi Properti Global
            public static $judul= "hy, saya properti static dari " . __CLASS__; //KeyWord=Static
            public static function display(){
                echo self::$judul; //This-> Non Static, jadi pakai self::$ untuk mengakses properti/function sendiri
            }
        }

        class ChildClass extends ParentClass{
            public static $judul= "hy, saya properti static dari " . __CLASS__;
            public static function display(){
                echo parent::$judul; //kalau mau mengakses parent, tidak pakai self lagi 
            }
            public static function displayFromChild(){
                echo self::display(); 
            }
        }

        $obj = new ParentClass;
        $obj2 = new ChildClass;
    ?>
    <h1><?php echo ParentClass:: $judul  //Untuk Mengakses Properti Static Menggunakan :: ?> Testing</h1> 
    <h1><?php echo $obj->display()  //Untuk Mengakses Properti Static Menggunakan :: ?> Testing</h1> 
    <h1><?php echo $obj2->display()  //Untuk Mengakses Properti Static Menggunakan :: ?> Testing</h1> 
    <h1><?php echo ChildClass:: displayFromChild(); ?> Testing</h1> 
</body>
</html>