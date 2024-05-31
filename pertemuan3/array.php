<?php

// //Tipe Data
// $x = "Harry"; 
// echo $x; 
// echo "\n";
// $x = 1234;
// var_dump($x);

// //Variabel
// $nama = "noven";
// $jumlahUang = 0;
// echo "$nama punya uang $jumlahUang rupiah" . PHP_EOL;

$biodata = [
  "nama" => "Krisna",
  "pekerjaan" => "ML Engineer",
  "pendidikan" => "S2",
  "nilai" => "A",
  "umur" => 19,
  "hobi" => [
    "tidur", "mabar"
  ],

  // "pendidikan_terakhir" => [
  //   "instansi" => "INSTIKI",
  //   "SMA" => "Smanda",
  //   "jurusan" => "mti",
  //   "tahun_lulus" => 2000,
  // ]

];


// KUIS //
// echo "Saya {$biodata['nama']}, dulu kuliah di {$biodata['pendidikan_terakhir']['instansi']} jurusan {$biodata['pendidikan_terakhir']['jurusan']}, lulusnya tahun {$biodata['pendidikan_terakhir']['tahun_lulus']}an " . PHP_EOL;

// Cara nambah data
// $biodata["hobi"][] = "tidur";
// $biodata["alamat"] = "jalan";

// // Cara menghapus data
// // unset($biodata["umur"]);
// // unset($biodata["hobi"][1]);

// // 'count' untuk menghitung jumlah array
// $biodata["jumlah_hobi"] = count($biodata["hobi"]);

// var_dump($biodata);

// // menghitung jumlah array
// echo count($biodata);
