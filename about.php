<?php include 'header.php'; $top_i="address-card";$top_h3="About us"; include "head.php";?>
<script>(()=>G("nav").querySelector(`[data-act='about']`).classList.add('active'))();</script>
<main style="background-color: #fbfbfb;">
<?php
    include 'components/about/vid.php';
    include 'components/about/fourtab.php';
    include 'components/team.php';
    include 'components/serv/service.php';
    include 'components/serv/servCards.php';
?>
</main>

 <?php   include 'footer.php'; ?>