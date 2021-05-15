<style>
.twitter-sec {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: space-evenly;
  flex-wrap: wrap;
  background:#232628;
  padding: 50px 0 20px 0;
}
.iframe_fb {
  width: 90%;
  max-width:500px;
  padding: 10px;
}
.iframe_tw {
  width: 55% !important;
}
.iframe_fb,
.iframe_tw {
  background-color: #f1f1f1 !important;
  border-radius: 7px;
  z-index: 2;
  height: 475px !important;
  position:relative;
}
.iframe_fb iframe {
  width: 100%;height:100%
}
@media screen and (max-width: 800px) {
    .iframe_fb,
  .iframe_tw {
    width: 80% !important;
    margin: 10px auto;
  }
  
}
</style>

<section class="twitter-sec">               
        <div class="iframe_fb">
        <iframe src="" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
        
        <div class="iframe_tw">
        <a class="twitter-timeline" data-height="475" href="https://twitter.com/motherteresafdn?lang=en">Tweets by HondaUKBikes</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div> 
</section>

<script>
    
    function socialSize(){
            let w = window.innerWidth;
            let fb_url = `https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmotherteresafoundation%2F&tabs=timeline&width=${w<500?w:500}&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId`;
            document.querySelector('.iframe_fb iframe').src = fb_url;
        }
        socialSize();
</script>