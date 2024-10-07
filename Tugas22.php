<?php  

// Membuat variabel JSON  
$jsonData = '{
    "nama": "Reva",  
    "Usia": "20",  
    "Status": "Mahasiswa",  
    "Hobi": ["Bermain game", "Badminton"]
}';    

// Decode JSON ke dalam bentuk array PHP  
$arrayData = json_decode($jsonData, true);  // Menambahkan true untuk decode sebagai array

// Menampilkan data dalam format array PHP  
echo "Data dalam format array PHP: ";

foreach ($arrayData as $key => $value) {
    if (is_array($value)) {
        echo $key . ": " . implode(", ", $value) . " ";  // implode array jadi string
    } else {
        echo $key . ": " . $value . " ";
    }
}
?>
