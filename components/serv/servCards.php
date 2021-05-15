<style>
    .serv3{background-color: #f1f1f1;padding: 50px 0;}
    .mccards{display: grid;grid-gap: 2rem;grid-template-columns: 1fr 1fr;}
    .mccards .scard{box-shadow: 0px 5px 60px 0 rgba(0,0,0,0.1);padding: 20px;position: relative;background-color: white;}
    .mccards .scard > i{display: block;width: 80px;height: 80px;background-color: white;
    border-radius: 50%;font-size: 32px;margin: -40px auto 10px auto;display: flex;justify-content: center;align-items: center;}
    .mccards .scard h3{font-size: 22px;margin-bottom: 40px;text-align: center;font-weight: 600;}
    .scard blockquote i{font-size: 10px;}
    .scard blockquote{font-size: 14px;text-align: center;font-style: italic;}
    blockquote i:first-child{transform: translateY(-10px);}
    blockquote i:last-child{transform: translateY(10px);}
    .scard blockquote + p{margin-top: 1.5rem;}
    .scard > *:not(p){padding: 0 1.2rem;}
    .scard p{text-align: justify; text-justify: inter-word;font-size: 15px;}
    @media screen and (max-width:800px) {
        .mccards{grid-template-columns: 1fr;}
    }
</style>
<section class="mccards_section serv3" id="servCards">
    <h2 class="mb-5 tac">Our Services</h2>
    <div class="container py-3 mccards">
        <div class="scard">
            <i class="fas fa-heart"></i>
            <h3>Mother Teresa Anbu Illam</h3>
            <blockquote><i class="fas fa-quote-left"></i> Abode of Love for the unloved <i class="fas fa-quote-right"></i></blockquote>
            <p>Fulfilling the physical, psychological, economical and educational needs of orphans/semi-orphans with parental care irrespective of caste, creed, colour and religion to ensure a bright future.
            </p>
        </div>
        <div class="scard">
            <i class="fas fa-book-open"></i>
            <h3>Mother Teresa Education Program</h3>
            <blockquote><i class="fas fa-quote-left"></i> Building our youth for the future <i class="fas fa-quote-right"></i></blockquote>
            <p>Providing full scholarship for academically proficient but economically backward students to vigorously pursue their academic aspirations. It covers 12 states in India and providing assistance for over 1000 students on an average per year since 2010.</p>
        </div>
        <div class="scard">
            <i class="fab fa-accessible-icon"></i>
            <h3>Mother Teresa Joy Home <br><span style="font-size: small;">(home for the aged)</span></h3>
            <blockquote><i class="fas fa-quote-left"></i> Home of peace, care, and happiness for <br> the abandoned seniors <i class="fas fa-quote-right"></i></blockquote>
            <p>Established in 2019to commemorate the 109th birth anniversary of St. Mother Teresa to perpetuate joy, peace and security for senior citizens.</p>
        </div>
        <div class="scard">
            <i class="fas fa-apple-alt"></i>
            <h3>Mother Teresa AmudhaSurabhi Program <br><span style="font-size: small;">(free meal program)</span></h3>
            <blockquote><i class="fas fa-quote-left"></i> Aim for zero hunger <i class="fas fa-quote-right"></i></blockquote>
            <p>Providing free meal daily to over 500 poor attendees of the inpatients treated in Thanjavur, Medical College Hospital.</p>
        </div>
    </div>
</section>