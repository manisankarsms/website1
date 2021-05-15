const $=document, A = 'active';
function G(i) {return $.getElementById(i)}
function Q(i) {return $.querySelector(i)}function Qa(i) {return $.querySelectorAll(i)}
function q(j,i) {return j.querySelector(i)}function qa(j,i) {return j.querySelectorAll(i)}

function Aj({url,type,data,success}){
    let x = new XMLHttpRequest();
    x.onreadystatechange = function (){if(this.readyState == 4 && this.status == 200){success(this.response)}}
    x.open(type,url,true);
    data?x.send(data):x.send();
}
function form(e){
    e.preventDefault();
    let ds,o={},F=e.target;ds = qa(F,'[data-input]');
    ds.forEach(el=>o[el.dataset.input] = el.value);
    function success(m){alert(m)}
    Aj({url:`mail.php`,type:'POST',data:JSON.stringify(o),success})
}

function popup(p){
    let P = p.parentElement;
    let fn=(e)=>{
        let t=e.target;let d = t.dataset.action;
        let F = () => {p.style.transform = 'scale(0)';
            setTimeout(() => {P.style.display = 'none';}, 300);} 
        if(e.type === 'keydown' && e.keyCode === 27){F()}
        if(d==='close'){F()}
    }
    P.onclick = fn;window.onkeydown = fn;
}
function openModal(e){
    let m = e.target, t=G('popup_inner');
    let o = {
        video : () => {
            t.innerHTML = `<iframe style="width: 100%;height: 100%;position: absolute;" src="${m.dataset.url}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`
        },
        form : ()=>{
            Aj({url:`components/form.php`,type:'POST',data:false,success:(r)=>t.innerHTML = r})
        },
        gallery:()=>{
            window.innerWidth < 800 ? M.style.height = '50vh' : M.style.height = '85vh' ;
            t.innerHTML = `<img style="width: 100%;height: 100%;position: absolute;object-fit:cover;" src="${m.src.replace('small','big')}" />`;
        }
    }
    let M = G('popup'),P=M.parentElement;
    o[m.dataset.target]();
    P.style.display = 'flex';
    M.style.transform = 'scale(1)';
}