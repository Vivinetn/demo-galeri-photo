<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Constructor</title>
</head>
<body>
    <?php
        class Student
        {
            public $id, $nama, $nilai_pbo, $nilai_web, $nilai_pkk;

            public function __construct($dataStudents = [])
            {
                $this->id        = $dataStudents['id'] ?? null;
                $this->nama      = $dataStudents['nama'] ?? null;
                $this->nilai_pbo = $dataStudents['nilai_pbo'] ?? null;
                $this->nilai_web = $dataStudents['nilai_web'] ?? null;
                $this->nilai_pkk = $dataStudents['nilai_pkk'] ?? null;
            }

        }

            $dataStudents = [
                [
                    'id'        => 1,
                    'nama'      => 'Rezak',
                    'nilai_pbo' => 69,
                    'nilai_web' => 80,
                    'nilai_pkk' => 85
                ],
                [
                    'id'        => 2,
                    'nama'      => 'Owen',
                    'nilai_pbo' => 69,
                    'nilai_web' => 69,
                    'nilai_pkk' => 96
                ],
                [
                    'id'        => 3,
                    'nama'      => 'William',
                    'nilai_pbo' => 86,
                    'nilai_web' => 50,
                    'nilai_pkk' => 69
                ],
                [
                    'id'        => 4,
                    'nama'      => 'Steven',
                    'nilai_pbo' => 0,
                    'nilai_web' => 35,
                    'nilai_pkk' => 0.69
                ],
                [
                    'id'        => 5,
                    'nama'      => 'Vivien',
                    'nilai_pbo' => 25,
                    'nilai_web' => 75,
                    'nilai_pkk' => 69
                ]
            ];

        $listStudents = [];

        foreach($dataStudents as $student){
            $dataStudent = new Student($student);
            $listStudents[] = $dataStudent;
        }

        // NOTE--------------------------
        // Parameter = Acuan/Nilai Tolak Ukur
        // Argumen = Isi/Nilai yang diisi sebagai acuan
    ?>

    <h1> Jumlah Data Siswa <?php echo count($listStudents)?></h1>

    <?php
        foreach($listStudents as $student){
            $idStudent = $student->id;
            echo "
            <p> ID        : $student->id</p>
            <p> Nama      : $student->nama</p>
            <p> Nilai PBO : $student->nilai_pbo</p>
            <p> Nilai WEB : $student->nilai_web</p>
            <p> Nilai PKK : $student->nilai_pkk</p>
            <br>
            ";
        } 
    ?>

</body>
</html>