<?php
// file : Wordcount.php

// Deklarasi sebuah kelas bernama Wordcount
class Wordcount
{
    // Metode (fungsi) countWords untuk menghitung jumlah kata dalam sebuah kalimat
    public function countWords($sentence)
    {
        // Menghitung jumlah kata dalam kalimat yang diberikan
        // dengan cara memecah kalimat menjadi array berdasarkan spasi
        // menggunakan fungsi explode, lalu menghitung jumlah elemen array
        return count(explode(" ", $sentence));
    }
}
