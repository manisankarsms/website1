<style>
    .threebox{margin-top: -100px;z-index: 10;position: relative;}
    .threebox .box:nth-child(odd){background-color: #2154ac;}
    .threebox .box:nth-child(even){background-color: #2b65bf;}
    .threebox .box{color: white;padding: 30px 36px 20px 36px;width: 32%;}
    .threebox .box:nth-child(3){width: 36%;}
    .threebox .box i{font-size: 3rem;margin-bottom: 15px;}
    .threebox .box h2{font-size: 20px;margin-bottom: 15px;position: relative;padding: 10px 0;color:#fff;}
    .threebox .box h2::after{content: "";position: absolute;background-color: rgba(255, 255, 255, .4);
    bottom: 0;left: 0;width: 60px;height: 1px;}
    .threebox .box > p{margin: 20px 0;font-size: 16px;padding: 5px 0;line-height: 24px;color:white;}
    .threebox .box a{padding: 12px 30px;border:1px solid rgba(255, 255, 255, .4);color: #fff;font-size: 13px;text-transform: uppercase;}
    .threebox .box .box-inner p{display: flex;font-size: 16px;justify-content: space-between;margin: 0;
        padding: 5px 0;color:white;}
    .threebox .box .box-inner ul li{padding: 2px 0;}
    .threebox .box .box-inner h2{font-size: 16px;}
    @media screen and (max-width:924px) {
        .threebox > div{flex-wrap: wrap;}
        .threebox .box{width: 100%;margin: 10px 0;}
        .threebox .box:nth-child(3){width: 100%;}
    }
</style>
<section id="threebox" class="threebox">
<div class="container df">
        <div class="box">
        <i class="fas fa-briefcase-medical"></i>
            <h2>Specialities</h2>
            <div class="box-inner">
                <ul>
                    <li>General Medicine</li>
                    <li>General Surgery</li>
                    <li>Pediatrics</li>
                    <li>Obstetrics and Gynecology</li>
                    <li>Diabetology</li>
                    <li>Cardiology</li>
                </ul>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-stethoscope"></i>
            <h2>Primary  Care</h2>
            <p>Our General medicine covers the treatment and management of a range of long-term illness such as diabetes and respiratory problems</p>
            <a href="./specialities.php" target="_blank">see services</a>
        </div>
        <div class="box">
            <i class="fas fa-calendar-plus"></i>
            <h2>Opening  Hours</h2>
            <div class="box-inner">
                <h2>Lab Time : </h2>
                <p><span>Monday – Saturday</span><span>6:30 <small>am</small> – 10:00 <small>pm</small> </span></p> 
                <p><span>Sunday</span><span>6.30 <small>am</small> - 1.00 <small>pm</small></span></p> 
                <h2>Consultation : </h2> 
                <p><span>Monday – Saturday</span><span>10.00 <small>am</small> – 10:00 <small>pm</small></span></p>
            </div>
        </div>
    </div>
</section>
                                                