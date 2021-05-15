<?php
    include 'header.php';
    $top_i="briefcase-medical";$top_h3="Specialities";
    include 'head.php';
    ?>
<script>(()=>G("nav").querySelector(`[data-act='specialities']`).classList.add('active'))();</script>
<?php
    include 'components/spec/spec.php';
    include 'components/spec/card.php';
    include 'components/spec/tab.php'; ?>

<style>
    .threebox{margin-top: -50px;z-index: 10;position: relative;}
    .threebox > div{display: grid;grid-template-columns: 1fr 1fr 1fr;text-align: center;}
    .threebox .box:nth-child(odd){background-color: #2154ac;}
    .threebox .box:nth-child(even){background-color: #2b65bf;}
    .threebox .box{color: white;padding:50px;}
    .threebox .box i{font-size: 3rem;margin-bottom: 25px;}
    .threebox .box h2{font-size: 20px;position: relative;padding: 10px 0;color:#fff;}
    .threebox .box p{font-size: 16px;padding: 5px 0;color: white;}
    @media screen and (max-width:1024px) {
        .threebox > div {grid-template-columns: 1fr;}
        .threebox .box{width: 100%;margin: 10px 0;}
    }
</style>
<section class="threebox">
    <div class="container">
        <div class="box">
            <i class="fas fa-tv"></i>
            <h2>Best Monitoring System</h2>
            <p>Treatment facilities available for admission and treatment round the clock. The health centre has OT  for basic procedures and emergency ward. </p>
        </div>
        <div class="box">
            <i class="fas fa-hospital"></i>
            <h2>Advance Operation Room</h2>
            <p>We have a long tradition of pioneering treatments, bringing together hospital and community services, and providing our patients with the best possible care.</p>
        </div>
        <div class="box">
            <i class="fas fa-stethoscope"></i>
            <h2>Only Best Doctors</h2>
            <p>We have best doctors who are specialists in the areas of general medicine, paediatrics, gynaecology, cardiology and diabetology</p>
        </div>
    </div>
</section>
                                                

<?php    
    include 'footer.php';
?>