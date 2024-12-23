<?php
// Array asosiatif dengan data tentang penemu penemu terkenal di dunia
$penemu = [
    [
        "Nama" => "Albert Einstein",
        "Temuan" => "Teori Relativitas.",
        "Tahun" => "1905",
        "Asal" => "Jerman",
        "image_url" => "https://kabarbaik.co/wp-content/uploads/2024/09/tari-saman.jpeg" 
    ],
    [
        "Name" => "Alessandro Volta",
        "Temuan" => "Baterai Listrik.",
        "Tahun" => "1800",
        "Asal" => "Italia",
        "image_url" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgBdlRDF-xW320_4foc29ePtw0WVPHquwuEw&s" 
    ],
    [
        "Nama" => "Alexander Graham Bell",
        "Temuan" => "Telepon (versi lama).",
        "Tahun" => "1876",
        "Asal" => "Amerika Serikat",
        "image_url" => "images/batik.jpg"
    ],
    [
        "Nama" => "Alfred Nobel",
        "Temuan" => " Dinamit.",
        "Tahun" => "1867",
        "Asal" => "Swedia",
        "image_url" => "images/tari_kecak.jpg"
    ],
    [
        "Nama" => "Thomas Alva Edison",
        "Temuan" => "Bola Lampu.",
        "Tahun" => "1879",
        "Asal" => "Amerika Serikat",
        "image_url" => "images/wayang_kulit.jpg"
    ],
    [
        "Nama" => "Nikola Tesla",
        "Temuan" => " Motor Listrik.",
        "Tahun" => "1882",
        "Asal" => "Serbia",
        "image_url" => "images/lompat_batu.jpg"
    ],
    [
        "Nama" => "James Watt",
        "Temuan" => " Mesin Uap.",
        "Tahun" => "1765",
        "Asal" => "Inggria",
        "image_url" => "images/tari_piring.jpg"
    ],
    [
        "Nama" => "Johannes Gutenberg",
        "Temuan" => " Mesin Cetak.",
        "Tahun" => "1440",
        "Asal" => "Jerman",
        "image_url" => "images/ngaben.jpg"
    ],
    [
       "Nama" => "Louis Pasteur",
        "Temuan" => "  Vaksinasi (vaksin rabies.",
        "Tahun" => "1885",
        "Asal" => "Prancis",
        "image_url" => "images/reog.jpg"
    ],
    [
       "Nama" => " Wilbur dan Orville Wright",
        "Temuan" => " Pesawat Terbang.",
        "Tahun" => "1903",
        "Asal" => "Amerika Serikat",
        "image_url" => "images/jaipong.jpg"
    ]
];

// Tampilkan array dalam bentuk tabel HTML
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>Nama</th>
        <th>Temuan</th>
        <th>Tahun</th>
        <th>Asal</th>
        <th>Gambar</th>
      </tr>";

foreach ($penemu_dunia as $penemu) {
    echo "<tr>";
    echo "<td>{$penemu['Nama']}</td>";
    echo "<td>{$penemu['Temuan']}</td>";
    echo "<td>{$penemu['Tahun']}</td>";
    echo "<td>{$penemu['Asal']}</td>";
    echo "<td><img src='{$penemua['image_url']}' width='100'></td>";
    echo "</tr>";
}

echo "</table>";
?>