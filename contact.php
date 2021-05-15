<?php include 'header.php'; 
       $top_i="address-card";$top_h3="Contact Us";include 'head.php';
?>

<script>(()=>G("nav").querySelector(`[data-act='contact']`).classList.add('active'))();</script>
<style>
    .contact_page{overflow-x:hidden;}
    .contact_page > h1, .contact_page > p{text-align: center;}
    .contact_page > h1{padding-top: 30px;}
    label{font-size: 14px;color: #383838;display:block;}
    input,select,textarea{width: 100%;border: 1px solid #d9d9d9;border-radius: 3px;color: #383838;padding: 5px 10px;}
    input,select{ height: 40px;text-transform: capitalize;}
    input::placeholder, textarea::placeholder{color: #383838;}
    form button{width: 120px; background-color: #2B65BF;font-size: 20px;color: white;height: 30px;line-height: 30px;
        border: 1px solid #d9d9d9;font-size: 16px;margin-top: 20px;}
    .contact_div{display: flex;justify-content: center;align-items: center;padding:50px 0;}
    .timing {flex:1 0 30%;}
    .contact_page form{flex: 1 0 70%;}
    .contact_page form{padding: 0 90px;}
    .contact_page form .df{justify-content: space-between;}
    .contact_page form input, select, textarea{margin: 8px 0;color:#212121}
    .contact_page form input, .gender{width: 300px;}
    .contact_page textarea{height:200px;}
    .contact_page form .spec_sel{width: 100%;display: block;}
    .timing{max-width: 350px;width: 95%;margin: auto;}
    .timing{background-color: #2153aa;color: white;padding: 30px 20px;border-radius: 12px;}
    .timing p{
        border-bottom: 2px solid rgba(165, 122, 122, 0.2);color: white;padding: 3px;display: flex;
        justify-content: space-between;
    }
    @media screen and (max-width:800px) {
     .contact_div{flex-wrap: wrap;}
     .contact_page > P{font-size: 14px;}
    }
</style>    
<section class="contact_page">
    <h1>Make an Appointment</h1><p>We will send you a confirmation within 24 hours. Emergency? </p>
    <div class="container contact_div">
        <div class="timing">
            <h3 style="color: white;padding: 10px;">opening hours</h3>    
            <p><span>Monday</span><span>6.30a.m - 10.00p.m</span></p>
            <p><span>Tuesday</span><span>6.30a.m - 10.00p.m</span></p>
            <p><span>Wednesday</span><span>6.30a.m - 10.00p.m</span></p>
            <p><span>Thursday</span><span>6.30a.m - 10.00p.m</span></p>
            <p><span>Friday</span><span>6.30a.m - 10.00p.m</span></p>
            <p><span>Saturday</span><span>6.30a.m - 10.00p.m</span></p>
            <p><span>Sunday</span><span>Closed</span></p>
        </div>
        <form onsubmit="form(event)">
            <div class="df fw">
                <input type="text" data-input="name" required aria-required="true" aria-invalid="false" placeholder="name">
                <select class="gender" data-input="Gender" required>
                    <option value="" label="Gender"></option>
                    <option  value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Others</option>
                </select>
            </div>
            <div class="df fw">
                <input type="text" data-input="phone_number" required aria-invalid="false" placeholder="Phone No" >
                <input type="date" data-input="date"> 
            </div>
            <select class="spec_sel" data-input="specialist">
                <option value="" label="Specialist"></option>
                <option  value="General medicine">General medicine</option>
                <option value="Gynaecology">Gynaecology</option>
                <option value="Paediatrics">Paediatrics</option>
                <option  value="Diabetology">Diabetology</option>
                <option  value="Cardiology">Cardiology</option>
            </select>
            <textarea data-input="message"  placeholder="Enter Message" aria-invalid="false"></textarea>        
            <button type="submit">Submit</button>
        </form>
    </div>
</section>
<style>
    .adr{grid-gap: 20px;grid-template-columns: 1fr 1fr 1fr;padding: 30px 0;}
    .adr > div{background-color: #f8f9fc;text-align: center; padding: 30px;width:90%}
    .adr > div p{font-size: 1em;font-weight: 600;}
    .adr > div i{font-size: 3em;margin-bottom: 1em;color: #2153aa;}
    .adr > div >div p{color: #2153aa;}
    .adr > div span a{color: #676767;font-size: 1em;font-weight: 400;}
    .add-box{box-shadow:0 5px 60px 0 rgb(0 0 0 / 10%);}
    @media screen and (max-width:600px) {
        .adr > div span a{font-size: 0.8em;}
        .adr > div{margin: auto;}
    }
    </style>
<section>
    <div class="adr dg container"> 
        <div class="add-box" >
            <i class="fas fa-envelope"></i>
            <p>Mail id :</p>
            <span>
                <a href="mailto:healthcenter@motherteresafoundation.org">healthcenter@motherteresafoundation.org</a>
            </span>
        </div>
        <div class="add-box">
            <i class="fas fa-phone-square"></i>
            <p>Contact :</p>
            <span>
                <a href="tel:9842403039">9842403039</a><br>
                <a href="tel:8012570002">8012570002</a><br>
                <a href="tel:04362 226700">04362 226700</a>
            </span>
        </div>
        <div class="add-box">
            <i class="fas fa-map-marker-alt"></i>
            <p>Address :</p>
                <span>
                    No. 3, Gandhi Nagar,<br>
                    Near New Bus Stand,<br>
                    R.S.G College (po)<br>
                    Thanjavur – 613 005.<br>
                </span>

        </div>
    </div>
   </section>
   <style>
       .mapouter{position:relative;text-align:right;height:400px;width:100%;}
       .gmap_canvas {overflow:hidden;background:none!important;height:400px;width:100%;}
   </style>
   <div class="mapouter ">
       <div class="gmap_canvas">
           <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=thanjavur&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
            
        </div></div>

<?php include 'footer.php'; ?>