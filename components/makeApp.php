<style>
    .home_appointment{
        background-color: #f5f5f5;
    }
    .home_appointment >div{width: 50%;position: relative;}
    .home_appointment > div:first-child{background: url(media/f.jpg) no-repeat;background-size: cover;}
    .home_appointment > div:last-child{padding: 90px 30px 50px 50px;}
    .lft-container::after{
        background-color: rgba(33,84,171,0.5);position: absolute;
        content: '';left: 0;top: 0;width: 100%;height: 100%;z-index: 1;}
    .rit-container .form-area > div{margin: 15px 0;}
    @media screen and (max-width:800px) {
        .lft-container{display: none;}
        .home_appointment >div{width:100%;}
    }
</style>

<div style="display: flex; width: 100%; margin-top: -50px;" class="home_appointment">
    <div class="lft-container">
    </div>
    <div class="rit-container">
        <?php include "components/form.php"; ?>
    </div>
              
</div>