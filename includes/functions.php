<?php 
    function redirect_to($new_location) {
    header("Location: {$new_location}");
    exit;
}
?>

<?php //will this be in functions.php?
    $url_page = "php/created/page/url.php";
    $param1   = "This is a string with < >";
    $param2   = "&#?*$[]+ are bad characters";
    $linktext = "<Click> & learn more";

    $url = "http://localhost/";
    $url .= rawurlencode($url_page);
    $url .= "?" . "param1=" . urlencode($param1);
    $url .= "&" . "param2=" . urlencode($param2);
    ?>

    <a href="<?php echo htmlspecialchars($url); ?>">
    <?php echo htmlspecialchars($linktext); ?>
    </a>


