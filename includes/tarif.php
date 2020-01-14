<section id="tarif">

    <div class="titre">
        <h2>Licences</h2>
    </div>

    <article>
        <div id="tarif1" class="tarif">1er tarif 30€  (.mp3)</div>
        <div id="tarif2" class="tarif">2eme tarif 50€ (.mp3 & .wav)</div>
        <div id="tarif3" class="tarif">Tarif négocié (Exclu)</div>
    </article>

    <div></div>

</section>


<style>

    /* section#tarif
    {
        height:100vh;
    } */
    section#tarif article
    {
        height:70%;
        width:100%;
        background:rgba(31,32,65,0.7);
        display:flex;
        flex-direction:row;
        justify-content:center;
    }
    .tarif
    {
        flex:1;
        margin:50px;
        padding:20px;
        height:50%;
        display:flex;
        justify-content:center;
        background:rgba(120,227,253,1);
        color:black;
    }

    @media (max-width:1080px)
    {
        section#tarif article
        {
            flex-direction: column;
        }
    }

</style>



