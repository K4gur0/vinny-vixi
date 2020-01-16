<style>

    /* section#about
    {
        height:100vh;
    } */
    .carousel
    {
    z-index: 0;
    display:flex;
    align-items:center
    }
    .w-100
    {
    width: 100vw !important;
    /* height: 450px; */
    opacity:0.9
    }
    .bd-example
    {
        height:90%;
        display:flex;
        align-items:center
    }
    .carousel-control-next, .carousel-control-prev
    {
    height:100px;
    margin:auto;
    }

    .d-md-block
    {
    display: flex !important;
    height: 92%;
    align-items: center;
    flex-direction: column;
    justify-content: space-evenly;
    background: rgba(0,0,20,0.6);
    box-shadow: 1px 1px 20px 10px rgba(0,0,20,0.6);
    border-radius: 2px;
    }
    .carousel-indicators
    {
    bottom: 20%;
    }
    .carousel-item
    {
        background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(2,0,36,0.767927239255077) 50%, rgba(2,0,36,1) 100%); 
    }
    div.bd-example h2
    {
        color: white;
        /* text-shadow: 1px 1px 5px rgba(255,255,255,1); */
        font-size: 1.7rem;
        font-family: 700;
    }

    span.carousel-control-next-icon, span.carousel-control-prev-icon
    {
        height: 40px;
        width:40px;
    }


</style>



<section id="about">

    <div class="titre">
        <h2>A propos</h2>
    </div>
    


    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/sound_2-2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h2>Vinny Vixi .Prods</h2>
                <p>Producteur de Beats type Drills, Hip-Hop, Rap FR, Rap US</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/CDC2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h2>Evry-Courcouronnes</h2>
                <p>Originaire d'Evry en Essonne, région de rappeurs actuels comme Niska, Koba laD, PnL, ou encore...<br/>Vous reconnaitrez la signature des vrais son Drills Français sortie tout droit des quartiers</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/BM.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h2>Collabs</h2>
                <p>Plusieur projets déjà réalisé pour des rappeurs comme Alkapote ou Falcone<br/>Certains projets déjà réalisés en studio pour une qualité profesionnel</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/BMSTARS.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h2>Inspirations & Influences</h2>
                <p>Vous retrouverez des sons inspiré par les plus grands beatmakers comme<br>Lex luger, Young Chop, Metro Bomin ou encore Deedotwill</p>
                </div>
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>



    <div>

    </div>

</section>