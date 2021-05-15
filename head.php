<style>
    .top{
        height:250px;
        width: 100%;
        background: linear-gradient(to left,#2154abdd,#2154abdd),url("https://demo.keonthemes.com/gutener/demo103/wp-content/uploads/sites/4/2020/06/gutener-medical-img8-1200-800.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        justify-content: center;align-items: center;
        
    }
    .top i, .top h3{
        font-size: 50px;color: white;margin: 0 20px;text-transform: uppercase;
    }
    @media screen and (max-width:800px){
        .top i, .top h3{font-size: 30px;}
    }
</style>
<section class="top">
        <i class="fas fa-<?php echo $top_i ?>"></i>
        <h3><?php echo $top_h3?></h3>
</section>