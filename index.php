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
            include 'header.php';
            include('about.php');
            include 'footer.php';
            break;
        case $services:
            include 'header.php';
            include('services.php');
            include 'footer.php';
            break;
        case $gallery:
            include 'header.php';
            include('gallery.php');
            include 'footer.php';
            break;
        case $blogs:
            include 'header.php';
            include('blog.php');
            include 'footer.php';
            break;
        case $deepCleaning:
            include 'subheader.php';
            include('deep-cleaning.php');
            include 'footer.php';
            break;
        case $houseKeeping:
            include 'subheader.php';
            include('house-keeping.php');
            include 'footer.php';
            break;
        case $facadeCleaning:
            include 'subheader.php';
            include('facade-cleaning.php');
            include 'footer.php';
            break;
        case $residentialCleaning:
            include 'subheader.php';
            include('residential-cleaning.php');
            include 'footer.php';
            break;
        case $sofaCleaning:
            include 'subheader.php';
            include('sofa-cleaning.php');
            include 'footer.php';
            break;
        case $hiringHousekeeper:
            include 'subheader.php';
            include('hiring-housekeeping-services.php');
            include 'footer.php';
            break;
        case $contact:
            include 'header.php';
            include('contact.php');
            include 'footer.php';
            break;
        case $index:
        case $indexphp:
            header("Location: /");
            break;
        default:
            error_log("No matching page found for: " . $page);
            echo "<script>console.log('Page not found: " . htmlspecialchars($page) . "')</script>";
            include('404.php');
    }
} else {
    error_log("Loading home page");
    include 'header.php';
    include('home.php');
    include 'footer.php';
}
?>