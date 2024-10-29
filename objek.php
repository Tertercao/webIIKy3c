<?php
class Anggota {
    public $nama;
    public $npm;
    public $kelas;

    public function __construct($nama, $npm, $kelas) {
        $this->nama = $nama;
        $this->npm = $npm;
        $this->kelas = $kelas;
    }
}

$mahasiswa1 = new Anggota("Kyy", "23753116", "MI3C");

echo "Nama: " . $mahasiswa1->nama . "<br>";
echo "NPM: " . $mahasiswa1->npm . "<br>";
echo "Kelas: " . $mahasiswa1->kelas . "<br>";
?>
