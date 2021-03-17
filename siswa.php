<?php

class Siswa{

public $nama;
public $NISN;
public $gender;

function set_nama($nama){
    $this->nama = $nama;
}
function get_nama(){
    return $this->nama;
}
function set_nisn($nisn){
    $this->nisn = $nisn;
}
function get_nisn(){
    return $this->nisn;
}
function hadir(){
    return "siswa ini hadir di kelas";
}
function nilaisiswa($nilai_uts,$nilai_uas,$nilai_tugas){
    return ($nilai_uts + $nilai_uas + $nilai_tugas)/3;
}

}

$siswa1 = new Siswa();
$siswa1->set_nama("iqbal");
$siswa1->set_nisn("31341");
echo "Nama Siswa :". $siswa1->get_nama();
echo "<br>";
echo "NISN :". $siswa1->get_nisn();
echo "<br>";
echo "Nilai Total :".$siswa1->nilaisiswa(80,90,88);
echo "<br>";

$siswa1 = new Siswa();
$siswa1->set_nama("ucok");
$siswa1->set_nisn("909090");
echo "<br>";
echo "Nama Siswa :". $siswa1->get_nama();
echo "<br>";
echo "NISN :". $siswa1->get_nisn();
echo "<br>";
echo "Nilai Total :".$siswa1->nilaisiswa(80,90,88);
echo "<br>";
?>