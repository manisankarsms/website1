<?php include "header.php"; $top_i="fas fa-images";$top_h3="Gallery";include "head.php";?>
<script>(()=>G("nav").querySelector(`[data-act='gallery']`).classList.add('active'))();</script>
<style>
    .mcontainer{width: 100%;padding: 30px 0;background-color: rgba(233, 233, 233, 1);}
    .photo_grid{
        max-width: 1200px;margin:0 auto;width: 100%;
        display: grid;grid-gap: 1rem;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: auto;
        grid-template-areas:"a b c" 
                            "d e c"
                            "f f g"
                            "h i j"
                            "k l m"  
                            "n o p"
                            "n q r"  
                            "s t u"                      
                           ;

    }
    
    .photo_grid img{width: 100% !important;height: auto;border: 6px solid white;
        cursor: pointer;box-shadow: 0 0 10px #aaa;border-radius: 10px;object-fit:cover;}
    @media (max-width: 800px) {
        .photo_grid{display: block;}
    }
    
</style>
<div class="mcontainer">
    <section class="photo_grid">
        <img data-target="gallery" style="height: 250px;" src="media/Health center/small/1.jpg" alt="randam">
        <img data-target="gallery" style="height: 250px;"  src="media/Health center/small/2.jpg" alt="randam">
        <img data-target="gallery" src="media/Health center/small/3.jpg" alt="randam">
        <img data-target="gallery" style="height: 250px;"src="media/Health center/small/4.jpg" alt="randam">
        <img data-target="gallery" style="height: 250px;"src="media/Health center/small/5.jpg" alt="randam">
        <img data-target="gallery" style="height: 300px;"  src="media/Health center/small/10.jpg" alt="randam">
        <img data-target="gallery" src="media/Health center/small/6.jpg" alt="randam">
        <img data-target="gallery" src="media/Health center/small/8.jpg" alt="randam">
        <img data-target="gallery" src="media/Health center/small/9.jpg" alt="randam">
        <img data-target="gallery" src="media/Health center/small/11.jpg" alt="randam">
        <img data-target="gallery" src="media/Health center/small/12.jpg" alt="randam">
        <img data-target="gallery" src="media/Health center/small/13.jpg" alt="randam">
        <img data-target="gallery" src="media/Health center/small/15.jpg" alt="randam">
        <img data-target="gallery" src="media/Health center/small/7.jpg" alt="randam">
        <img data-target="gallery" style="height: 250px;"src="media/Health center/small/22.jpg" alt="randam">
        <img data-target="gallery" style="height: 250px;"src="media/Health center/small/15.jpg" alt="randam">
        <img data-target="gallery" style="height: 250px;"src="media/Health center/small/16.jpg" alt="randam">
        <img data-target="gallery" style="height: 250px;"src="media/Health center/small/17.jpg" alt="randam">
        <img data-target="gallery" style="height: 250px;" src="media/Health center/small/14.jpg" alt="randam">
        <img data-target="gallery" style="height: 250px;"src="media/Health center/small/22.jpg" alt="randam">
        <img data-target="gallery" style="height: 250px;"src="media/Health center/small/21.jpg" alt="randam">

    </section>
</div>

<script>
    let is =document.querySelectorAll('.photo_grid img');
    // let height = [250,250,"auto",250,250,300,"auto","auto","auto","auto","auto","auto","auto","auto",250,250,250];
    let area = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u'];
    is.forEach((I,i) => {
        I.style.gridArea = area[i];
        I.onclick = openModal;
        // I.style.minHeight = area[i];
    })
</script>


<?php include "footer.php"; ?>