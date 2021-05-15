<?php include 'header.php';$top_i="address-card";$top_h3="Testimonial"; include "head.php"; ?>
<script>(()=>G("nav").querySelector(`[data-act='testi']`).classList.add('active'))();</script>
<style>
    .main_vid{width: 100%;height: 100vh;}
    .vid_testi .dg{padding: 30px;grid-template-columns:1fr 1fr 1fr;grid-gap: 20px;}
    .vid_testi .dg img{object-fit: cover;height: 270px;}
    #vids a{margin:10px 0;height: 270px;width:100%;display:block;}
    /* .vid_testi .dg a{width: 300px;} */
</style>
<section class="vid_testi" style="margin-top: 30px;">
    <div>
    <iframe id="main_vid" style="height: 80vh; width: 100%;"  src="https://www.youtube.com/embed/WZ55tAr21jE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <h2 style="padding:50px 0 20px 0;font-size:36px;" class="tac">Our Testimonials</h2>
    <div class="dg py-4" id="vids">
        <a href="#main_vid" data-url="https://www.youtube.com/embed/BlbtAWUuQuk"><img src="media/images/3.JPG" alt=""></a>
        <a href="#main_vid" data-url="https://www.youtube.com/embed/BvhpopYmQTY"><img src="media/images/4.jpg" alt=""></a>
        <a href="#main_vid" data-url="https://www.youtube.com/embed/qdeMYd5p7kw"><img src="media/images/5.JPG" alt=""></a>
        <a href="#main_vid" data-url="https://www.youtube.com/embed/fd6BIBUcXG4"><img src="media/images/6.JPG" alt=""></a>
        <a href="#main_vid" data-url="https://www.youtube.com/embed/-hcCPFlCwa4"><img src="media/images/7.JPG" alt=""></a>
        <a href="#main_vid" data-url="https://www.youtube.com/embed/WZ55tAr21jE&t"><img src="media/images/Doctor examining the patient 1.jpg" alt=""></a>
        <!-- <a href="#main_vid" data-url="https://www.youtube.com/embed/"><img src="media/images/Bed.jpg" alt=""></a>
        <a href="#main_vid" data-url="https://www.youtube.com/embed/"><img src="media/images/Doctor examining the patient.jpg" alt=""></a>
        <a href="#main_vid" data-url="https://www.youtube.com/embed/"><img src="media/images/Doctor's Room.JPG" alt=""></a>
    </div> -->
</section>
<script>
    (function (){
        let vs = G('vids'), M = G('main_vid') , lk = vs.querySelectorAll("a");
        lk.forEach(k => k.onclick = () => M.src = k.dataset.url);
    })();
</script>

<style>
    .testi p{
        font-weight: 400;
        font-size: 16px;
        font-family: 'poppins';
        color: #4E4E4E;
        padding-right: 60px;
    }
    .ic{width:45%}.cc{width:55%}
    @media screen and (max-width: 600px) {
        .ic{
            display: none;
        }
        .cc{
            width: 90%;
        }
        .testi p{padding: 0;}
        
    }
</style>
<section style="padding:40px 0;">
    <div style="display: flex;box-shadow:0 5px 60px 0 rgb(0 0 0 / 10%) ;overflow:hidden;" class="container">
        <div class="ic">
            <img src="media/t.jpg" style="width: 100%;height: 100%;object-fit: cover;"/>
        </div>
        <div class="cc">
            <div id="testslide" class="carousel slide" data-bs-ride="carousel">
                <div style="padding: 30px 40px;overflow: hidden;" class="carousel-inner">
                    <div class="carousel-item active testi">
                        <div>
                            <p><i style="font-size: 40px; color: #4f87fb;" class="fas fa-quote-left"></i></p>
                            <p style="text-align: justify; line-height: 1.8;">testimonials Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> Nam quaerat odit repellat illum a, dolorum error sint porro, quos laboriosam magni hic mollitia soluta. Iure, sapiente! Voluptas atque in laboriosam.</p>
                             <div style="padding: 50px; display: flex;">
                                <i style="font-size: 60px;" class="fas fa-user"></i>
                                <h4 style="color: #2154ac;margin-left: 30px;font-weight: 400;font-family: 'poppins;">Tinah Raman<br><spam style="font-size:20px">Allergist</spam></h4>
                             </div> 
                        </div>
                      
                    </div>
                    <div class="carousel-item testi">
                        <div>
                            <p><i style="font-size: 40px; color: #4f87fb;" class="fas fa-quote-left"></i></p>
                            <p style="text-align: justify; line-height: 1.8;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore at maxime cum illum voluptas nemo natus vitae provident et dolores, ut facere, voluptates optio. Quos optio corporis officiis ad. Veniam. </p>
                            <div style="padding: 50px; display: flex;">
                                <i style="font-size: 60px;" class="fas fa-user"></i>
                                <h4 style="color: #2154ac;margin-left: 30px;font-weight: 400;font-family: 'poppins;">Tinah Raman<br><spam style="font-size:20px">Allergist</spam></h4>
                             </div> 
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
    </section>
<?php include 'footer.php'; ?>