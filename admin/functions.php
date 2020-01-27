<?php

    $kon = mysqli_connect("localhost", "root", "", "kasulampua");

    function query($query){
        global $kon;
        $result = mysqli_query($kon, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        global $kon;

        $judul = htmlspecialchars($data["judul"]);
        $waktu = htmlspecialchars($data["waktu"]);
        $penulis = htmlspecialchars($data["penulis"]);
        $headline = htmlspecialchars($data["headline"]);
        $isi = htmlspecialchars($data["isi"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "INSERT INTO olah_data
                    VALUES
                 ('', '$judul', '$waktu', '$penulis', '$headline', '$isi', '$gambar')";
        mysqli_query($kon, $query);

        return mysqli_affected_rows($kon);
    }

    function hapus($id){
        global $kon;
        mysqli_query($kon, "DELETE FROM olah_data WHERE id=$id");

        return mysqli_affected_rows($kon);
    }

    function edit($data){
        global $kon;

        $id = $data["id"];
        $judul = htmlspecialchars($data["judul"]);
        $waktu = htmlspecialchars($data["waktu"]);
        $penulis = htmlspecialchars($data["penulis"]);
        $headline = htmlspecialchars($data["headline"]);
        $isi = htmlspecialchars($data["isi"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "UPDATE olah_data SET 
                    judul = '$judul',
                    waktu = '$waktu',
                    penulis = '$penulis',
                    headline = '$headline',
                    isi = '$isi',
                    gambar = '$gambar'
                    WHERE id=$id
                    ";
        mysqli_query($kon, $query);

        return mysqli_affected_rows($kon);
    }
    


?>