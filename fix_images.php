<?php
// 1. Buat direktori jika belum ada
$dirs = [
    public_path('storage/gallery'),
    public_path('storage/menu_items')
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

// 2. Gambar placeholder Base64 (Abu-abu dengan ikon kamera)
$placeholder = base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkqAcAAIUAgUW0RjgAAAAASUVORK5CYII=');

// 3. Buat file dummy untuk Gallery
$galleryFiles = ['kafe-1.jpg', 'kafe-2.jpg', 'restoran-1.jpg', 'restoran-2.jpg'];
foreach ($galleryFiles as $file) {
    $path = public_path('storage/gallery/' . $file);
    if (!file_exists($path)) file_put_contents($path, $placeholder);
}

// 4. Update Database agar Menu Item menggunakan placeholder dari web untuk sementara
try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=" . env('DB_DATABASE', 'microsite_db'), env('DB_USERNAME', 'root'), env('DB_PASSWORD', ''));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Ganti foto galeri dengan link Unsplash langsung agar lebih cantik
    $pdo->exec("UPDATE galleries SET image = 'https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=800&q=80' WHERE id = 1");
    $pdo->exec("UPDATE galleries SET image = 'https://images.unsplash.com/photo-1559339352-11d035aa65de?auto=format&fit=crop&w=800&q=80' WHERE id = 2");
    $pdo->exec("UPDATE galleries SET image = 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=800&q=80' WHERE id = 3");
    $pdo->exec("UPDATE galleries SET image = 'https://images.unsplash.com/photo-1552566626-52f8b828add9?auto=format&fit=crop&w=800&q=80' WHERE id = 4");
    
    // Ganti foto menu makanan
    $pdo->exec("UPDATE menu_items SET image = 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=400&q=80' WHERE name LIKE '%Kopi%'");
    $pdo->exec("UPDATE menu_items SET image = 'https://images.unsplash.com/photo-1576107232684-1279f390859f?auto=format&fit=crop&w=400&q=80' WHERE name LIKE '%Kentang%'");
    $pdo->exec("UPDATE menu_items SET image = 'https://images.unsplash.com/photo-1603048297172-c92544798d5e?auto=format&fit=crop&w=400&q=80' WHERE name LIKE '%Nasi Goreng%'");
    
    echo "? Foto dummy berhasil disuntikkan ke Database dan folder Storage!\n";
} catch (Exception $e) {
    echo "?? Database error: " . $e->getMessage() . "\n";
}

// 5. Perbaiki view home.blade.php agar mendukung URL eksternal
$homeView = resource_path('views/pages/home.blade.php');
if (file_exists($homeView)) {
    $content = file_get_contents($homeView);
    // Ubah asset('storage/...') menjadi fungsi dinamis yang mengecek apakah itu URL http atau bukan
    $content = preg_replace('/asset\([\'"]storage\/\'?"?\s*\.\s*(\$[a-zA-Z0-9_->]+)\)/', '(filter_var($1, FILTER_VALIDATE_URL) ? $1 : asset("storage/" . $1))', $content);
    file_put_contents($homeView, $content);
}

unlink(__FILE__);
// Fungsi bantuan untuk load env
function env($key, $default = null) {
    $env = file_get_contents('.env');
    if (preg_match('/^' . $key . '=(.*)$/m', $env, $matches)) return trim($matches[1]);
    return $default;
}
