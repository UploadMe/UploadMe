<?php include './res/head.php'; ?>
<body>

<?php
include './res/navbar.php';
getNavBar("privacy")
?>
<div class="header">
    <h1>Privacy</h1>
</div>
<div class="content privacy">
    <?php
    include './res/markdown.php';
    echo markdown("./res/", "privacy.txt");
    ?>
</div>
<?php include './res/footer.php'; ?>
</body>