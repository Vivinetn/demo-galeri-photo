<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar constructor</title>
    <!--<link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>-->
</head>
<body>
    <center><h1> Belajar constructor</h1></center>
    <center><h1>====================================================================</h1></center>

    <?php
    class user {
        
        public $id, $name, $age, $addres;
        
        
        public function __construct( $id = null, $name = null, $age = null, $addres = null)
        {
            $this->id=$id;
            $this->name=$name;
            $this->age=$age;
            $this->addres=$addres;
        }
    }

    class students{
        public $id, $nama, $nilai_pbo, $nilai_web, $nilai_pkk, $class;

        public function __construct($datastudents = []) { 
            $this->id            = $datastudents['id']?? null;
            $this->nama          = $datastudents['nama']?? null;
            $this->nilai_pbo     = $datastudents['nilai_pbo']?? null;
            $this->nilai_web     = $datastudents['nilai_web']?? null;
            $this->nilai_pkk     = $datastudents['nilai_pkk']?? null;
            $this->class         = $datastudents['class']?? null;
        }
    
    }

    $datastudents = [
        [
            'id' =>1,
            'nama' => 'aku',
            'nilai_pbo' =>69, 
            'nilai_web' =>80, 
            'nilai_pkk' =>85,
            'class' => 'XI-RPL'
        ],
        [
            'id' =>2,
            'nama' => 'kamu',
            'nilai_pbo' =>69, 
            'nilai_web' =>69, 
            'nilai_pkk' =>96,
            'class' => 'XI-RPL'
        ],
        [
            'id' =>3,
            'nama' => 'dia',
            'nilai_pbo' =>86, 
            'nilai_web' =>50, 
            'nilai_pkk' =>65,
            'class' => 'XI-RPL'
        ],
        [
            'id' =>4,
            'nama' => 'saya',
            'nilai_pbo' =>55, 
            'nilai_web' =>35, 
            'nilai_pkk' =>75,
            'class' => 'XI-RPL'
        ],
        [
            'id' =>5,
            'nama' => 'beliau',
            'nilai_pbo' =>25, 
            'nilai_web' =>70, 
            'nilai_pkk' =>70,
             'class' => 'XI-RPL'
        ],
        [
            'id' => 6,
            'nama' => 'kalian',
            'nilai_pbo' =>90, 
            'nilai_web' =>80, 
            'nilai_pkk' =>85,
            'class' => 'XII-RPL'
        ],
        [
           'id' => 7,
            'nama' => 'kelen',
            'nilai_pbo' =>35, 
            'nilai_web' =>75, 
            'nilai_pkk' =>100,
            'class' => 'XII-RPL'
        ],
        [
            'id' => 8,
            'nama' => 'kamu semua',
            'nilai_pbo' =>90, 
            'nilai_web' =>65, 
            'nilai_pkk' =>70,
            'class' => 'XII-RPL'
        ],
        [
            'id' => 9,
            'nama' => 'gatau',
            'nilai_pbo' =>100, 
            'nilai_web' =>95, 
            'nilai_pkk' =>90,
            'class' => 'XII-RPL'
        ],
        [
            'id' => 10,
            'nama' => 'lagi',
            'nilai_pbo' =>95, 
            'nilai_web' =>86, 
            'nilai_pkk' =>80,
            'class' => 'XII-RPL'
        ],
    ];

    $liststudents = [];
    
    foreach ($datastudents as $datastudent){
       $liststudents[] = new students($datastudent);
    }

    $dataSiswaKelasXIIRpl = [];
    $dataSiswaKelasXIRpl = [];

    foreach ($liststudents as $student) {

        if ($student->class == 'XII-RPL') {
            $dataSiswaKelasXIIRpl[] = $student;
        } else {
            $dataSiswaKelasXIRpl[] = $student;
        }

        $idstudents = $student->id;
        $rata = ($student->nilai_web + $student->nilai_pbo + $student->nilai_pkk) / 3;

        if ($rata > 90) {
            $grade = 'A';
        } elseif ($rata > 85) {
            $grade = 'B+';
        } elseif ($rata > 80) {
            $grade = 'B';
        } elseif ($rata > 74) {
            $grade = 'C';
        } elseif ($rata > 69) {
            $grade = 'D';
        } else {
            $grade = 'Remedial';
        }
       ?> 

        <!-- echo "-->
        <br>
        <p> Id : <?php echo "$student->id" ?></p>
        <p> Nama : <?php echo "$student->nama" ?> </p>
        <p> Nilai PBO : <?php echo "$student->nilai_pbo" ?> </p>
        <p> Nilai WEB : <?php echo "$student->nilai_web" ?> </p>
        <p> Nilai PKK : <?php echo "$student->nilai_pkk" ?> </p>
        <p> Rata      : <?php echo "$rata" ?> </p>
        <p> Grade     : <?php echo "$grade" ?> </p>
        <p> Class     : <?php echo "$student->class" ?> </p>
        <br>
        <hr>
        <!--";-->
        <?php
    }

    echo "<H3>Jumlah kelas 12 RPL</H3>"; 
    echo  count($dataSiswaKelasXIIRpl);

    echo "<H3>Jumlah kelas 11 RPL</H3> "; 
    echo  count($dataSiswaKelasXIRpl);
?>
    
</body>
</html>
