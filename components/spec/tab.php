<style>
    .tab_c{background-color: #f8f9fc;padding: 60px 0 30px 0;}
    .t-c > div:last-child{width: 35%;}
    .tabing{display: flex;min-height: 300px;overflow: hidden;width:65%;border:1px solid rgba(80,137,251,0.08);
        background: rgba(239,245,251,0.28);color: #676767;padding: 30px 0;margin: 40px 30px;}
    .tab_links{height: 400px;position: relative;width: 20%;}
    .tab_links > *{display: flex;position: absolute;cursor: pointer;background-color: white;border:1px solid rgba(80,137,251,0.08);
    width: 160px;height: 50px;align-items: center;padding-left: 15px;font-size: 15px;color:#2154ac;}
    .tab_contents{position: relative;height: 400px;color: #676767;
        width: Calc(100% - 185px);left: 25px;}
    .tab_contents > *{position: absolute;top: 0;left: 20px;right: 0;
        bottom: 0;display: none;padding: 40px 40px 40px 60px;}
    .tab_contents h4{font-size: 15px;margin-bottom: 10px;font-weight: 900;color: #676767;}
    .tab_contents p, ol{font-size: 13px;margin: 20px 0;line-height:25px;}
    .tab_links .active{color: #4f87fb;background-color: transparent;}
    .tab_contents .active{display: block;}
    .normal-image{height: 570px;display: block;margin-left: auto;}
    @media screen and (max-width:800px){
        .tab_c{padding: 40px 10px 10px 10px;}
        .tabing + div{display: none;}
        .tabing{margin: 0;padding: 0;width: 100%;flex-wrap: wrap;}
        .tab_links{display: flex;flex-wrap: wrap; height: 100px;width: 100%;}
        .tab_links > *{width: auto;position: initial;}
        .tab_contents{width: 100%;left: 0;}
        .tab_contents > *{padding: 10px 0;}
        .tab_contents ol{padding: 0;}
    }
</style>
<section class="tab_c">
    <h2 class="tac">Specializations of our Health Center</h2>
</section>
<section style="background-color: #f8f9fc;">
    <div class="container d-flex t-c">
        <div class="tabing">
            <nav class="tab_links">
                <span class="active">General medicine</span>
                <span>Gynaecology</span>
                <span>Paediatrics</span>
                <span>Diabetology</span>
                <span>Cardiology</span>
            </nav>
            <div class="tab_contents">
                <div class="active">
                    <h4>General medicine</h4>
                    <p>Our General medicine covers the treatment and management of a range of long-term illnesses such as diabetes and respiratory problems, but also shorter-term health problems such as:</p>
                    <ol>
                        <li> Complete health check-up.</li>
                        <li> Treatment for various types of fevers.</li>
                        <li> Treatment on different kinds of Common infections.</li>
                        <li> Treatment on Burns, Injuries, Poison treatment and Immediate Emergencies .</li>
                    </ol>
                </div>
    
                <div>
                    <h4>Gynaecologists</h4>
                    <p>Our centres have Gynaecologists who are specializing in women's health, with a focus on the female reproductive system. They deal with a wide range of issues such as:</p>
                    <ol>
                        <li> Obstetrics, or pregnancy and childbirth,</li>
                        <li> Menstruation and fertility issues, </li>
                        <li> Sexually transmitted infections (STIs), hormone disorders and others.</li>
                        <li> Uterus related issues Fibroids (Muscular Tumours) PCODs.</li>
                    </ol>
                </div>
    
                <div>
                    <h4>Paediatrics</h4>
                    <p>We have Paediatricians’ who manage the health of your child, including all kinds of medical management, right from newborn complications to ailments pertaining to the paediatric age group. They're trained to diagnose and treat childhood illnesses, from minor health problems to serious diseases.</p>
                </div>
    
                <div>
                    <h4>Diabetology</h4>
                    <p>Our team of physicians treat only diabetic patients, whereas, endocrinologists specialize in endocrinology and treat all diseases that impact on the endocrine organs.</p>
                </div>
    
                <div>
                    <h4>Cardiology</h4>
                    <p>We treat cardiac cases as OP and our team is fully equipped to diagnose and treat the full spectrum of heart diseases. Basics tests like ECG, Trop T, Trop I, Echo test are done at our centre.</p>
                </div>
            </div>
        </div>
        <div><img class="normal-image" src="https://demo.keonthemes.com/gutener/demo103/wp-content/uploads/sites/4/2020/08/gutener-medical-img26-1-372-573.png"></div>
    </div>
</section>

<script>
    (function (){
        let $=(i)=>document.querySelectorAll(i);
        let ts = $('.tab_links > *'),tt = $('.tab_contents > *'),a='active';
        ts.forEach((t,i) => {
            t.style.top = i*(400/5)+'px';
            t.onclick = () => {
                tt.forEach(k => k.classList.remove(a));
                ts.forEach(k => k.classList.remove(a));
                t.classList.add(a);
                tt[i].classList.add(a);
            }
        })
    })();
</script>