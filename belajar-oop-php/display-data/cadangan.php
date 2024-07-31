<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar menggunakan komponen</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</head>
<body>
    <center><h1> Belajar menggunakan komponen</h1></center>
    <center><h1>====================================================================</h1></center>

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
    
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">Nama</th>
                <th scope="col" class="px-6 py-3">Kelas</th>
                <th scope="col" class="px-6 py-3">Nilai PBO</th>
                <th scope="col" class="px-6 py-3">Nilai WEB</th>
                <th scope="col" class="px-6 py-3">Nilai PKK</th>
                <th scope="col" class="px-6 py-3">Nilai Rata-rata</th>
                <th scope="col" class="px-6 py-3">Predikat</th>
            </tr>
        </thead>

        <!-- <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    1</th>
                <td class="px-6 py-4">Vivien</td>
                <td class="px-6 py-4">XII RPL</td>
                <td class="px-6 py-4">100</td>
                <td class="px-6 py-4">90</td>
                <td class="px-6 py-4">95</td>
                <td class="px-6 py-4">95</td>
                <td class="px-6 py-4">S</td>
            </tr>
        </tbody> -->

        <tbody>
            <!-- Melakukan pengecekan dan menampilkan data -->

            <?php

            if(count($listStudents)>0){
                //Melakukan Looping / Membongkar Data
                foreach($listStudents as $key => $value){
                    ?>

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?php echo $key + 1; ?> </th>
                        <td class="px-6 py-4"><?php echo $listStudents->nama ?></td>
                        <td class="px-6 py-4">XII RPL</td>
                        <td class="px-6 py-4">100</td>
                        <td class="px-6 py-4">90</td>
                        <td class="px-6 py-4">95</td>
                        <td class="px-6 py-4">95</td>
                        <td class="px-6 py-4">S</td>
                    </tr>

                    <?php
                }
            } else {
                //kode
            }

            ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            </tr>
        </tbody>

    </table>

</div>


</body>
</html>
