<?php include 'header.php';$top_i="fas fa-stethoscope";$top_h3="Services"; include "head.php";?>
<script>(()=>G("nav").querySelector(`[data-act='serv']`).classList.add('active'))();</script>
<?php
    include 'components/serv/service.php';
    include 'components/serv/servCards.php';
    include 'footer.php';
?>