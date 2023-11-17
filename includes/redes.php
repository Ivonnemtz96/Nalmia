<style>
    #whatsapp {
    position: fixed;
    z-index: 999;
    width: 4rem;
    bottom: 110px;
    right: 10px;
}

.whats-float {
    position: fixed;
    bottom: 3rem;
    right: 0;
    width: 4rem;
    height: 4rem;
    overflow: hidden;
    background-color: #bbac9b;
    color: #FFF;
    border-radius: 50px;
    z-index: 10;
    vertical-align: middle
}

.whats-float a span {
    color: white;
    font-size: 15px;
    padding-top: 8px;
    padding-bottom: 10px;
    position: absolute;
    line-height: 16px;
    font-weight: bolder;
}

.whats-float i {
    font-size: 40px;
    color: white;
    line-height: 30px;
    padding: 16px;
    transform: rotate(0deg);
    text-align: center;

}
</style>

<div class="whats-float">
    <a href="https://wa.me/+521234567890?text=Hola,%20me%20gustaría%20más%20información." target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>