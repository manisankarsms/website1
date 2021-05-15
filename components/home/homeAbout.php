<style>
    .home_about{padding-bottom:90px;}
    .home_about h2{font-size: 34px;color: #2b65bf;}
    .home_about > div{flex: 1;}
    .home_about > div:nth-child(2){min-height: 300px;}
    .home_about > div:nth-child(1){padding-bottom: 60px;}
    .vid-play{width: 40%;}
    .home_about p, blockquote{text-align: justify;max-width: 500px;}
    .home_about p{font-size: 15px;margin-top: 20px;}
    .vid-play{background-image: url("media/images/Front View.jpg");
        background-size: cover;background-position: center;background-repeat: no-repeat;border-radius: 3px;}
    .vid-play span{background: #2b65bf;height: 70px;width: 70px;display: block;cursor: pointer;border-radius: 50%;display: flex;justify-content: center;align-items: center;}
    .vid-play i{font-size: 40px;color: white;pointer-events:none;}
    .home_about a{position: absolute;bottom: 0;}
    @media screen and (max-width:990px){
        .home_about{max-width: 900px;}
    }
    @media screen and (max-width:800px) {
        .home_about a{position: static;}
        .home_about > div{max-width: 600px;flex: 1 0 100%;height:auto;padding: 20px;}
        .home_about p{font-size: 13px;}
        .home_about h2{font-size: 20px;text-align: center;}
    }
</style>

<section class="home_about df container fw pt" >
    <div style="position: relative;">
        <h2>Mother Teresa Health Center</h2>
        <p style="text-align: center;">More than Medicine… It’s Personal!!!</p>
        <blockquote style="font-size:14px;padding:0 16px">
            "Let us touch the dying, the poor, the lonely and the unwanted according to the graces we have received and let us not be ashamed or slow to do the humble work."
        </blockquote>
        <p style="text-align: right;margin-right:16px;">– Mother Teresa</p>
        <p>Mother Teresa Medical Foundation is a non-profit organization committed to clinical practice, education and research, providing expert and whole-person care to everyone who needs healing.</p>
        <a href="#" class="mybtn" >Read More</a>
    </div>
    <div class="vid-play df jcc aic" id="home_vid_play">
        <span id="vid_link" data-target='video' data-url="https://www.youtube.com/embed/WZ55tAr21jE"><i class="fas fa-play"></i></span>
    </div>
    
</section>
<script>
    (function(){G('vid_link').onclick = openModal;})();
</script>