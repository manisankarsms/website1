<style>
    .home_cds h2{font-size: 40px;margin-bottom: 20px;}
    .home_cds p{font-size: 18px;padding-bottom: 30px;}
    .home_docs{grid-template-columns: 1fr 1fr 1fr 1fr;grid-template-rows: auto;}
    .home_docs a{background-color: #2b65bf;color: white;padding: 10px 20px;transform: translate(25%, -50%);
       display: inline-block; font-size: 14px;text-transform: uppercase;}
    .dcard{background-color: #f1f6fb;}
    .dcard .name{font-size: 18px;padding: 15px 10px 0;color:#130947;text-align: center;}
    .dcard span{background-color: white;color: #2b65bf;padding:0 4px !important;font-size: 11px;margin-right: 8px;}
    .dcard .occ{font-size: 14px;padding-bottom: 10px;text-align: center;}
</style>
<section>
    <div class="container home_cds" style="padding-bottom: 50px;">
        <span class="tac d-block text-blue" style="color: #2b65bf;">Meet Our Team</span>
        <h2 class="tac">Specialist Doctors</h2>
        <div class="dg home_docs">
            <div class="dcard"><img src="https://demo.keonthemes.com/gutener/demo103/wp-content/uploads/sites/4/2020/06/gutener-medical-img4-480-640.jpg" alt="">
                <a href="#" data-target="form"><span>+</span> Book Appointment</a>
                <h3 class="name">Dr Name</h3><p class="occ">Occupation</p></div>
            <div class="dcard"><img src="https://demo.keonthemes.com/gutener/demo103/wp-content/uploads/sites/4/2020/06/gutener-medical-img5-480-640.jpg" alt="">
                <a href="#" data-target="form"><span>+</span> Book Appointment</a>
                <h3 class="name">Dr Name</h3><p class="occ">Occupation</p></div>
            <div class="dcard"><img src="https://demo.keonthemes.com/gutener/demo103/wp-content/uploads/sites/4/2020/06/gutener-medical-img6-480-640.jpg" alt="">
                <a href="#" data-target="form"><span>+</span> Book Appointment</a>
                <h3 class="name">Dr Name</h3><p class="occ">Occupation</p></div>
            <div class="dcard"><img src="https://demo.keonthemes.com/gutener/demo103/wp-content/uploads/sites/4/2020/06/gutener-medical-img7-480-640.jpg" alt="">
                <a href="#" data-target="form"><span>+</span> Book Appointment</a>
                <h3 class="name">Dr Name</h3><p class="occ">Occupation</p></div>
        </div>
    </div>
</section>
<script>
    document.querySelectorAll('.dcard a').forEach(a => a.onclick = openModal);
</script>