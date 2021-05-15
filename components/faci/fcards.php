<style>
    .faci_cards{grid-template-columns: 1fr 1fr 1fr;grid-gap: 50px;justify-items: center;padding:70px 0;}
    .fcard i{width: 55px;height: 55px;border-radius: 50%;display: flex;justify-content: center;align-items: center;
    font-size: 30px;border: 2px solid #0085ba;color: #0085ba;grid-area: fi;}
    .fcard{display: grid;grid-template-columns: 1fr 3fr;grid-template-areas: "fi fh4" "fi fp";width:300px;}
    .fcard h4{font-size: 20px;grid-area: fh4;}
    .fcard p{grid-area: fp;}
</style>
<section>
    <div class="container dg faci_cards">
    <div class="fcard">
            <i class="fas fa-pills"></i>
            <h4>Mother Teresa Pharmacy</h4>
            <p>Senectus minus aliqua rhoncus saepe cupiditate lorem</p>
        </div>
        <div class="fcard">
            <i class="fas fa-vials"></i>
            <h4>Mother Teresa Clinical Laboratory</h4>
            <p>Senectus minus aliqua rhoncus saepe cupiditate lorem</p>
        </div>
        <div class="fcard">
            <i class="fas fa-hospital-alt"></i>
            <h4>Mother Teresa Scan Centre</h4>
            <p>Senectus minus aliqua rhoncus saepe cupiditate lorem</p>
        </div>
        <div class="fcard">
            <i class="fas fa-clinic-medical"></i>
            <h4>Operation Theatre</h4>
            <p>Senectus minus aliqua rhoncus saepe cupiditate lorem</p>
        </div>
        <div class="fcard">
            <i class="fas fa-bed"></i>
            <h4>Inpatients facility </h4>
            <p>Senectus minus aliqua rhoncus saepe cupiditate lorem</p>
        </div>

    </div>
</section>