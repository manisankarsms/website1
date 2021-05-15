<?php include "header.php" ?>
<script>(()=>G("nav").querySelector(`[data-act='home']`).classList.add('active'))();</script>
<?php 
    include "components/home/mainSlider.php";
    include 'components/home/threebox.php'; 
    include 'components/home/homeAbout.php';
    include 'components/spec/spec.php';
?>
<?php
    include 'components/home/team.php';
    include 'components/home/count.php';
    include 'components/makeApp.php';
?>  
<style>
    .full > *{width:50%;}
    .ifr{margin: auto;width:100%;max-height:400px;height:80vh;}
    .ifr2{width:500px;}
    .ifr2 + div p{padding: 20px 0;width: 80%;margin: auto;}
    .serv_content{padding-right: 40px;}
    @media screen and (max-width:800px) {
        .full > *{width:100% !important;}
        .serv_content{padding-right: 0px;}
    }
</style> 
<div class="container py-3">
    <h2 class="my-3 tac">Community Health/Outreach :</h2>
    <div class="py-3">
        <p class="taj">The Mother Teresa Medical Foundation is dedicated to the health and well-being of its diverse communities. From free health screenings and counselling to yoga classes and home-based care, we offer a wealth of services and programs for people of all ages.
        </p>
        <div class="df fw py-3 full">
            <iframe class="ifr ifr2" src="https://www.youtube.com/embed/WZ55tAr21jE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div>
                <p class="taj">We work closely with backward rural/urban communities, schools, religious organizations, and social service agencies to meet our community’s needs. Our goal is to help you be healthiest.
                <p class="taj">In order to transform the rural people for better health we organize free medical camps particularly in remote rural areas. </p>
                <p class="taj">These camps are done at regular intervals with the help of specialists in various fields of medicine. </p>
            </div>
        </div>
        <p class="taj mt-2">In addition to this we also organize awareness programs to familiarize the ignorant rural people with the nature of diseases which subject them and also preventive and curative measures are explained to them. Yoga classes are also conducted on regular intervals for healthy living.</p>        
    </div>
</div>

<?php    include 'components/home/blog.php';
    include 'components/home/reg.php';
    include 'components/home/embed.php';
    include "footer.php" 
?>