
<?php
session_start();
include "../includes/header.php";
?>

<div class="container mb-5 mt-5">
    <?php
    
    echo "Welcome user , " . $_SESSION['username'];
    ?>
</div>

<?php
include "../includes/footer.php";

?>