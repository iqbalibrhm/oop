<?php

class Mahasiswa{
    public $nama;
    public $nim;
    public $gender;

    public function __construct($nama, $nim, $gender){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->gender = $gender;

    }

    public function nama_mahasiswa(){
        return "Nama Mahasiswa :".$this->nama;
    }
}

$mahasiswa1 = new Mahasiswa("iqbal","90900","Pria");

echo $mahasiswa1->nama;
echo "<br>";
echo $mahasiswa1->nim;
echo "<br>";
echo $mahasiswa1->gender;
echo "<br>";
echo $mahasiswa1->nama_mahasiswa();

$mahasiswa2 = new Mahasiswa("ucok","778787","Pria");

echo "<br>";
echo $mahasiswa2->nama;
echo "<br>";
echo $mahasiswa2->nim;
echo "<br>";
echo $mahasiswa2->gender;
echo "<br>";
echo $mahasiswa1->nama_mahasiswa();

?>