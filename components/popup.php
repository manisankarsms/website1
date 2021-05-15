<style>
    .popup_wrap{background: #0b0b0bbb;z-index: 100;display: none;width: 100vw;height: 100vh;overflow: hidden;
        position: fixed;top: 0;left: 0;justify-content: center;align-items: center;
    }
    .popup{transform:  scale(0);z-index: 101;background-color:white;
    max-width: 900px;width: 100%;height: 80vh;transition: transform 0.3s linear;}
    .popup .close{
        cursor: pointer;
        display: inline-block;position: absolute;top: 0;right: 0;transform: translate(0,-100%);
        color: #fff;padding: 6px 12px;
    }
    .popup_content{overflow:auto;background-color: white;height: 100%;position: relative;}
    .popup_content .make_formc{padding: 30px 60px;}
    .popup_content .make_formc h4{display: none;}
    .popup_content .make_formc input{margin-bottom: 5px;}
    .popup_content  .form-area > div{margin: 10px 0;}
    
</style>

<div class="popup_wrap" data-action="close">
    <div class="popup" id="popup">
        <span class="close" data-action="close">X</span>
        <div class="popup_content" id="popup_inner"></div>
    </div>
</div>

<script>popup(G('popup'));</script>