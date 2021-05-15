<style>
    #load{
        background-color: white;
        width: 100%;
        height: 100vh;
        position: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 200;
       
        perspective: 1000px;

    }
    .lodr{
        color: rgba(33, 84, 171, 1);
        font-size: 100px;
        animation: rotate 1s linear infinite ;
        display: block;
        transform-style: preserve-3d;
    }
    @keyframes rotate{
        from{
            transform: rotateY(0);
        }
        to{
            transform: rotateY(360deg);
        }
    }
</style>

<div id="load">
    <i class="fas fa-clinic-medical lodr"></i>
</div>
<script>
    document.body.onload=()=>G("load").style.display="none";
</script>