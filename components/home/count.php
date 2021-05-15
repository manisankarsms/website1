<style>
    .count_cotainer{
        z-index:2;border-radius: 3px;
        background-image: url(https://demo.keonthemes.com/gutener/demo103/wp-content/uploads/sites/4/2020/06/gutener-medical-img8-1200-800.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    box-shadow: 0 20px 24px 0 rgb(0 0 0 / 9%);
    padding: 80px 0 80px 0;height: 300px;
    max-width: 1100px;width: 100%;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    }
    .count_box > *{ display: block;text-align: center;}
    .count_box i{font-size: 40px;}
    .count_box .count{font-size: 30px;}
    .count_box h4{font-size: 18px;color: #a9d0ff;}
    .count_box > div{margin-bottom: 20px;}
    @media screen and (max-width:1100px) {
        .count_cotainer{max-width: 900px;}
    }
    @media screen and (max-width:800px) {
        .count_box{display: flex;width: 100%;padding: 20px;justify-content: space-between;}
        .count_box > *{width:30%;}
        .count_cotainer{flex-wrap:wrap;height:auto;}
    }
</style>
<section id="countSec">
    <div class="container count_cotainer bglay">
        <div class="count_box">
            <div><i class="fas fa-stethoscope"></i></div>
            <span class="count" data-t="10" >0</span>
            <h4>Doctors</h4>
        </div>
        <div class="count_box">
            <div><i class="fas fa-user-friends"></i></div>
            <span class="count" data-t="180" >0</span>
            <h4>Happy Patients</h4>
        </div>
        <div class="count_box">
            <div><i class="fas fa-hospital"></i></div>
            <span class="count" data-t="12" >0</span>
            <h4>Medical Beds</h4>
        </div>
        
        <div class="count_box">
            <div><i class="fas fa-chess-pawn"></i></div>
            <span class="count" data-t="10" >0</span>
            <h4>Winning Awards</h4>
        </div>
        
    </div>
</section>

<script>
// const runCount = false;
window.addEventListener('scroll',runCount);
function runCount (){
        let w =window.scrollY+window.innerHeight;
        let x = G("countSec"),t=x.offsetTop;
        if(w>=t+250){
            x.querySelectorAll('.count').forEach(v => {
                let T = parseInt(v.dataset.t), ar = [], inc, c = 0, f,L=T<100?T:100,interval=T<50?100:25;
                inc = Math.floor(T / L); for (let i = 0; i < L; i++) { ar.push(i * inc); } ar.push(T);
                (f = () => { if (c !== L) { c++; setTimeout(f, interval); } v.textContent = ar[c]; })();
            });
            window.removeEventListener('scroll',runCount);
        }
}
</script>