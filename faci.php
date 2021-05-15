<?php include 'header.php'; ?>
<script>(()=>G("nav").querySelector(`[data-act='faci']`).classList.add('active'))();</script>
<?php
    $top_i="hospital-user";$top_h3="facilities";
    include 'head.php';
    include 'components/faci/fcards.php';
    include 'components/faci/fgallery.php';
    include 'footer.php';
?>