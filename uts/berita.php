<?php
// API Key yang Anda miliki
$apiKey = '41b6a639234d4125b5c58063eedf446e';
// URL endpoint dari NewsAPI
$endpoint = 'https://newsapi.org/v2/top-headlines';
// Parameter untuk query, Anda bisa menyesuaikan kategori atau negara
$country = 'us'; // Menggunakan Amerika Serikat (us) untuk berita
$category = isset($_GET['category']) ? $_GET['category'] : 'general'; // Default ke kategori umum
$page = isset($_GET['page']) ? $_GET['page'] : 1; // Untuk pagination

// Fungsi untuk mengambil data berita dari API
function fetchArticles($apiKey, $endpoint, $country, $category, $page) {
    $url = $endpoint . '?country=' . $country . '&category=' . $category . '&page=' . $page . '&apiKey=' . $apiKey;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-Agent: MyNewsApp/1.0'));
    
    $response = curl_exec($ch);
    if(curl_errno($ch)) {
        return ['status' => 'error', 'message' => curl_error($ch)];
    }
    
    curl_close($ch);
    return json_decode($response, true);
}

// Ambil berita dari API
$apiResponse = fetchArticles($apiKey, $endpoint, $country, $category, $page);
if ($apiResponse['status'] == 'ok') {
    $articles = $apiResponse['articles'];
    $totalResults = $apiResponse['totalResults']; // Total berita yang tersedia
} else {
    // Log kesalahan dan tampilkan pesan error
    error_log("API Response Error: " . json_encode($apiResponse));  // Log API response for debugging
    echo "Gagal mengambil berita. Error: " . $apiResponse['message'];
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <br><br><br>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Terkini</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <style>
        .news-card {
            border: 1px solid #e5e7eb;
            border-radius: 0.375rem;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .news-card:hover {
            transform: scale(1.05); /* Zoom effect on hover */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .news-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .zoom-in {
            transition: transform 0.3s ease;
        }
        .zoom-in:hover {
            transform: scale(1.05);
        }

        .category-button {
            padding: 10px 20px;
            margin: 0 5px;
            font-size: 1rem;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }
        .category-button:hover {
            background-color: #4c51bf;
            color: white;
        }
        .category-button.active {
            background-color: #4c51bf;
            color: white;
        }
    </style>
</head>
<?php include('header.php'); ?>


    <div class="relative px-6 pt-14 lg:px-8">
        <div class="mx-auto max-w-2xl py-15 sm:py-20 lg:py-30">
            <div class="text-center">
                <h1 class="text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">Berita Terkini dari Amerika Serikat</h1>
            </div>
        </div>
    </div>

<!-- Category Filter Buttons -->
<div class="bg-white py-5 text-center">
    <div class="flex flex-wrap justify-center space-x-4 space-y-2 sm:space-y-0">
        <a href="berita.php?category=general&page=1" class="category-button <?php echo $category == 'general' ? 'active' : ''; ?> w-full sm:w-auto">
            General
        </a>
        <a href="berita.php?category=business&page=1" class="category-button <?php echo $category == 'business' ? 'active' : ''; ?> w-full sm:w-auto">
            Business
        </a>
        <a href="berita.php?category=technology&page=1" class="category-button <?php echo $category == 'technology' ? 'active' : ''; ?> w-full sm:w-auto">
            Technology
        </a>
        <a href="berita.php?category=sports&page=1" class="category-button <?php echo $category == 'sports' ? 'active' : ''; ?> w-full sm:w-auto">
            Sports
        </a>
        <a href="berita.php?category=entertainment&page=1" class="category-button <?php echo $category == 'entertainment' ? 'active' : ''; ?> w-full sm:w-auto">
            Entertainment
        </a>
        <a href="berita.php?category=health&page=1" class="category-button <?php echo $category == 'health' ? 'active' : ''; ?> w-full sm:w-auto">
            Health
        </a>
    </div>
</div>

    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php if (isset($articles) && count($articles) > 0): ?>
        <?php foreach ($articles as $article): ?>
            <div class="news-card zoom-in" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="bg-white p-4">
                    <!-- Menampilkan gambar jika ada -->
                    <img class="w-full h-64 object-cover" src="<?php echo !empty($article['urlToImage']) ? $article['urlToImage'] : 'https://via.placeholder.com/600x400'; ?>" alt="Image">
                    
                    <div class="mt-4">
                        <h3 class="text-xl font-semibold text-gray-900"><?php echo $article['title']; ?></h3>
                        <p class="mt-2 text-gray-600 text-sm">
                            <?php
                                // Check if description exists and is not empty
                                if (!empty($article['description'])) {
                                    echo substr($article['description'], 0, 120) . '...';
                                } else {
                                    echo 'No description available...';
                                }
                            ?>
                        </p>
                        <a href="<?php echo $article['url']; ?>" target="_blank" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">Baca Selengkapnya →</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Tidak ada berita yang tersedia saat ini.</p>
    <?php endif; ?>
</div>


            <!-- Load More Button -->
            <?php if ($totalResults > $page * 20): ?>
                <div class="text-center mt-8">
                    <a href="berita.php?page=<?php echo $page + 1; ?>&category=<?php echo $category; ?>" class="px-6 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Load More</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>


<footer>
<hr class="my-3 md:my-6 border-gray-400" />
		<div class="flex flex-wrap items-center md:justify-between justify-center">
			<div class="w-full md:w-4/12 px-4 mx-auto text-center">
				<div class="text-sm text-gray-600 dark:text-gray-400 py-1">
					&copy;
					<span id="year">Copyright by</span>
					<a href="https://github.com/ahampriyanshu" class="hover:underline hover:text-gray-900">22552011081_Mukhlis Nurdin Khoerudin</a>.
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    // Inisialisasi AOS
    AOS.init({
        duration: 1000,  // Durasi animasi dalam milidetik
        easing: 'ease-in-out',  // Tipe easing untuk animasi
        once: true,  // Agar animasi hanya terjadi sekali ketika elemen muncul
    });
</script>
