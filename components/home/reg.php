<style>
        .reg_contain{
            z-index:2;border-radius: 3px;
        background-image: url(https://demo.keonthemes.com/gutener/demo103/wp-content/uploads/sites/4/2020/06/gutener-medical-img8-1200-800.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        box-shadow: 0 20px 24px 0 rgb(0 0 0 / 9%);
        padding: 20px;height: 300px;
        width: 100%;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        }
        .reg_contain *, .reg_contain h4, .reg{color: white !important;}
        .reg{
            padding: 12px 40px;font-size: 14px;border: 1px solid white; border-radius: 4px;
            background-color: rgba(33,84,171,0.8);
        }
        .reg_contain i{font-size: 5rem;}
        .reg_contain h4 span:first-child{font-size: 1rem;}
        .reg_contain h4 span:last-child{font-size: 2.4rem;}
        @media screen and (max-width:800px) {
            .reg_contain{flex-wrap: wrap;}
           .reg_contain h4 span:last-child{font-size: 1.5rem;}
           .reg_contain h4{width: 100%;text-align: center;}
           .reg_contain i{font-size: 2rem;}
        }
    </style>
    <section class="reg_contain bglay">
        <i class="fas fa-ambulance"></i>
        <h4><span>SPECIAL OFFER</span> <br> <span>Master Health Checkup</span></h4>
        <button class="reg" id="reg" data-target="form">Register</button> 
    </section>

    <script>
        G('reg').onclick = openModal;
    </script>