<?php
$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES, 'UTF-8'); ?>" />

<?php
$BASE_URL = 'https://sparkleclean.in';
$about = 'about';
$services = 'services';
$gallery = 'gallery';
$blogs = 'blogs';

$deepCleaning = 'services/deep-cleaning';
$houseKeeping = 'services/house-keeping';
$facadeCleaning = 'services/facade-cleaning';
$residentialCleaning = 'services/residential-cleaning';
$sofaCleaning = 'services/sofa-cleaning';

$blogs = 'blogs';
$hiringHousekeeper = 'blogs/hiring-housekeeping-services';
$contact = 'contact';

$index = 'index';
$indexphp = 'index';

// Include the correct file based on the 'page' parameter
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    error_log("Requested page: " . $page);

    switch ($page) {
        case $about:
            include 'header';
            include('about');
            include 'footer';
            break;
        case $services:
            include 'header';
            include('services');
            include 'footer';
            break;
        case $gallery:
            include 'header';
            include('gallery');
            include 'footer';
            break;
        case $blogs:
            include 'header';
            include('blog');
            include 'footer';
            break;
        case $deepCleaning:
            include 'subheader';
            include('deep-cleaning');
            include 'footer';
            break;
        case $houseKeeping:
            include 'subheader';
            include('house-keeping');
            include 'footer';
            break;
        case $facadeCleaning:
            include 'subheader';
            include('facade-cleaning');
            include 'footer';
            break;
        case $residentialCleaning:
            include 'subheader';
            include('residential-cleaning');
            include 'footer';
            break;
        case $sofaCleaning:
            include 'subheader';
            include('sofa-cleaning');
            include 'footer';
            break;
        case $hiringHousekeeper:
            include 'subheader';
            include('hiring-housekeeping-services');
            include 'footer';
            break;
        case $contact:
            include 'header';
            include('contact');
            include 'footer';
            break;
        case $index:
        case $indexphp:
            header("Location: /");
            break;
        default:
            error_log("No matching page found for: " . $page);
            echo "<script>console.log('Page not found: " . htmlspecialchars($page) . "')</script>";
            include('404');
    }
} else {
    error_log("Loading home page");
    include 'header';

    include('home');
    include 'footer';
}
?>