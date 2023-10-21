<?php
//path to run ./vendor/bin.phpunit --bootstrap vendor/autoload.php FIleName.php
//butuh Framework PHPUnit

// Mengimpor TestCase dari PHPUnit untuk digunakan dalam pengujian
use PHPUnit\Framework\TestCase;

// Mengimpor kelas yang akan diuji (Wordcount)
require_once "Wordcount.php";

// Membuat kelas untuk menjalankan pengujian
class SimpleTest extends TestCase
{
    // Metode untuk melakukan pengujian fungsi countWords
    public function testCountWords()
    {
        // Membuat objek dari kelas Wordcount
        $Wc = new Wordcount();

        // Menyiapkan data uji (test data) dalam bentuk kalimat dengan 4 kata
        $TestSentence = "My namee is Joko"; // 4 kata..

        // Memanggil metode countWords untuk menghitung jumlah kata dalam kalimat
        $WordCount = $Wc->countWords($TestSentence);

        // Menggunakan metode assertEqual untuk memeriksa apakah hasil pengujian sama dengan nilai yang diharapkan
        $this->assertEquals(4, $WordCount);
    }
}
