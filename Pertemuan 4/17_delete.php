<?php
    $host = "localhost";
    $port = 3308;
    $db = "pemprov_dki";
    $user = "root";
    // open connection
    try {
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // handle exc error
        echo "Sukses terhubung ke database UPI YAI<br>";
    } catch(PDOException $e) {
        echo "Gagal terhubung: " . $e->getMessage() . "<br>";
    }

    // prepare statement for update data using named placeholder
    $stmt = $pdo->prepare("delete from pegawai where nip = :nip");
    $stmt->execute(['nip' => 4]);

    // prepare statement for update data using position placeholder
    $stmt = $pdo->prepare("delete from pegawai where nip = ?");
    $stmt->execute([8]);
?>