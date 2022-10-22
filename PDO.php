<?php
$koneksi = new PDO("mysql:host=localhost;dbname=11pplg", "root", "");

$koneksi->query("insert into siswa values (1001, 'kayla', 11, 'pplg')");

$koneksi->query("delete from siswa where id=2");

$koneksi->query("update siswa set id='1001' where nama='kayla'");

$koneksi->query("select 'nama' from 'siswa' where id=1001");
