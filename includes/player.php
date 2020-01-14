<?php

require_once "autoload.php";

?>

<section id="playerJs">

    <div id="trackMax">
            
        <img id="previousExtend" src="assets/icons/player/previous.svg" alt="previous">
        
        <figure id="illusBeats">
            <img src="#" alt="illustration beats">
        </figure>

        <img id="nextExtend" src="assets/icons/player/next.svg" alt="next">

    </div>


    <div id="timeLine" onclick="clickProgress('audioPlayer', this, event)">
        
        <div id="cursor"></div>
        <div id="currentTimeBar"></div>

    </div>

    <div class="btn">

        

        


        <div id="trackMin">

        
        <figure id="illusBeatsMin">
            <img src="#" alt="illustrations beats miniature">
        </figure>
            
        <div id="time">
            <div id="currentTime"><p>0 : 00</p></div>               
            <div id="duration"><p>0 : 00</p></div>
        </div>

            
            <div id="currentSong">

                <div id="titre">
                    <p>Titre en cours : </p>
                    <p class="currentTitre">. . .</p>
                </div>

                <div class="btnCtrl">

                
                    <img id="previous" class="sizeUp" src="assets/icons/player/previous.svg" alt="previous" title="beat précédent">

                        <div class="btnPPS">
                            <img id="play" class="sizeUp" src="assets/icons/player/play.svg" alt="play" title="play">
                            <img id="stop" class="sizeUp" src="assets/icons/player/stop.svg" alt="stop" title="stop">
                        </div>

                    <img id="next" class="sizeUp" src="assets/icons/player/next.svg" alt="next" title="beat suivant">

            </div>
            

        </div>

            <div class="volume">
                <img src="assets/icons/player/nomuted.svg" alt="volume" title="mute">
                <div class="volumeBar">
                    <div class="cursorVolumeBar"></div>
                    <div class="currentVolumeBar"></div>
                </div>
            </div>

            <img class="shop sizeUp" src="assets/icons/shop.png" alt="shop" title="Achat">

            <div class="arrow">
            <img id="arrow" src="assets/icons/player/arrowu.svg" alt="arrow" title="etendre">
        </div>

            <!-- <audio preload="metadata" ontimeupdate="update(this)" id="audio">

                <?php  

                // $pdo  = new PDO("mysql:host=localhost;dbname=vinny", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);

                // $tableSons = $pdo->query("SELECT * FROM sons");

                // $sons = $tableSons->fetchAll(PDO::FETCH_ASSOC);
                
                // foreach($sons as $selectSon)
                // {
                // echo "<br><source src='" .  $selectSon['url'] . "' type='audio/mpeg'>";
                // }
                
                ?>

            </audio>    -->

        </div>

    </div>

</section>








<style>

    section#playerJs
    {
        background:rgba(255,255,255,0.9);
        display: flex;
        justify-content:end;
        flex-direction:column;
        width: 100%;
        height:120px;
        position: fixed;
        bottom:0;
        z-index: 1;
        margin-bottom: 50px;
        transition : 0.75s;
    }
    section#playerJs *
    {
        font-family: sans-serif;
        font-size: 1rem;
    }


    section#playerJs figure#illusBeats
    {
        display: flex;
        width: 350px;
        height: 450px;
        box-shadow: 0 0 4px 2px rgba(0,0,0,1);
        align-self: center;
        margin: 2%;
        transition:0.5s;
        justify-content: center;
        align-items:center;
        background:black;
    }
    section#playerJs figure#illusBeatsMin
    {
        display: flex;
        width: 75px;
        height: 75px;
        box-shadow: 0 0 4px 2px rgba(0,0,0,1);
        align-self: center;
        margin: auto 10px;
        transition:0.5s;
        justify-content: center;
        align-items:center;
        background:black;
        left:45px;
        transition:0.5s;
    }
    section#playerJs figure#illusBeatsMin img
    {
        font-size:0.7rem;
        width:100%;
    }

    section#playerJs img
    {
        border-radius:2px;
        transition:0.05s;
    }


    section#playerJs img:hover
    {
        cursor:pointer;
        box-shadow: 0 0 12px 1px rgba(0,0,0,0.7);
    }
    section#playerJs div#trackMax img:active, section#player div.btnPPS img:active, section#player div.btnCtrl img:active, section#playerJs div#trackMin img:active
    {
        box-shadow: 0 0 12px 1px rgba(0,0,0,0.2);
    }

    div.btn
    {
        width:100%;
        height:90px;
        background: rgba(255,255,255,1);
        border-radius:0;
        /* box-shadow: 0 0 10px 3px rgba(0,0,0,0.7); */
        z-index:0;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:row;
        margin:0;
        padding:0;
        transition: 0.5s;
    }
    div.btn img
    {
        width:40px;
        margin: 2px;
    }
    div.btn div.btnPPS
    {
        display:flex;
        width:auto;
        justify-content:space-evenly;
        align-items: center;
        transition:0.75s;
    }
    div.btnCtrl
    {
        width: 100%;
        justify-content: center;
        align-self:end;
        display: flex;
        flex:1;
    }

    div#currentSong
    {
        display: flex;
        flex-direction: column;
        margin: 0 auto;
        align-self: stretch;
    }

    div#trackMin
    {
        height:100%;
        width:100%;
        /* align-self:center; */
        display:flex;
        justify-content:space-between;
        align-items:center;
        flex-direction:row;
    }
    div#trackMin a
    {
        width:80%;
        height:80%;
        color:rgba(255,255,255,0.5);
        display:flex;
        justify-content:center;
        align-items:center;
        text-decoration:none;
        box-shadow:inset 0 0 4px 2px rgba(0,0,0,0.6);
        transition:0.2s;
    }
    div#trackMin h6, div#trackMin p
    {
        color:black;
        margin:0;
        /* font-family: sans-serif; */
    }
    /* div#trackMin p
    {
        font-size:large;
    } */

    div#trackMin a:hover
    {
        color:white;
    }
    
    div#trackMax
    {
        height:50%;
        display:none;
        justify-content: center;
        align-items: flex-start;
        width:40%;
        align-self:center;
        position:absolute;
        top:0;
    }
    div#trackMax a:hover
    {
        color:white;
    }


    .arrow
    {
        align-self:start;
        width:30px;
        margin:0px 5px;
    }
    #arrow
    {
        padding: 3px;
        width:30px;
        transition: 0.5s;
    }


    div.bar
    {
        position:absolute;
        bottom:-5px;
        display:flex;
        align-self:center;
        height:5px;
        width:100%;
        background:rgb( 0, 0, 255 );
        margin:auto;
        border-left:5px solid white;
        z-index:1;
    }
    div.cursor
    {
        width:20px;
        height:20px;
        border-radius:50%;
        background:rgb( 0, 0, 255 );
        top:-7px;
        position:absolute;
        border:5px solid white;
    }
    div.cursor:hover
    {
        cursor:pointer;
    }

    #timeLine
    {
        height:30px;
        box-shadow:inset 0 0 2px 2px rgba(0,0,0,0.3);
        position:relative;
    }
    #currentTimeBar
    {
        display:flex;
        justify-content:end;
        height:100%;
        width:0%;

        background: rgb(59,103,158); 
        background: -moz-linear-gradient(top,  rgba(59,103,158,1) 0%, rgba(43,136,217,1) 50%, rgba(32,124,202,1) 51%, rgba(125,185,232,1) 100%); 
        background: -webkit-linear-gradient(top,  rgba(59,103,158,1) 0%,rgba(43,136,217,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%);
        background: linear-gradient(to bottom,  rgba(59,103,158,1) 0%,rgba(43,136,217,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%);  
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3b679e', endColorstr='#7db9e8',GradientType=0 );

        position:absolute;
        top:0;
    }
    #cursor
    {
        height:100%;
        width:8px;
        background: rgba(100,100,255,1);
        position:absolute;
        z-index:1;
        border-radius:2px;
        box-shadow: 0 0 2px 1px rgba(0,0,150,0.5), inset 0 0 2px 2px rgba(0,0,150,1);
    }
    #cursor:hover
    {
        cursor:pointer;
    }

    .btnPrevNextExtend
    {
        display:none
    }
    #nextExtend
    {
        width: 55px;
        position: absolute;
        top: 32%;
        right: 20%;
    }
    #previousExtend
    {
        width: 55px;
        position: absolute;
        top: 32%;
        left: 20%;
    }

    div#time
    {
        left : 250px;
    }
    div#time div
    {
        color: black;
        display:flex;
        justify-content:space-between;
        align-items:center;
        width:max-content;
    }
    div#time div p
    {
        margin:0 5px;
    }

    div.currentTitre
    {
        overflow:hidden;
    }

    div.volume
    {
        height: 30px;
        width: 200px;
        display:flex;
        align-items:center;
        justify-content:space-between;
        padding:5px;
    }
    div.volumeBar
    {
        box-shadow:inset 0 0 1px 1px rgba(0,0,0,0.5);
        min-width:150px;
        height:5px;
        margin: 0 0 0 20px;
        display:flex;
        align-items:center;
    }
    div.volume img
    {
        padding: 2px;
        width: 100px;
        height: 20px;
    }
    div.cursorVolumeBar
    {
        height: 15px;
        width: 15px;
        background:rgba(100,100,255,1);
        position: absolute;
        z-index: 1;
        border-radius: 50%;
        box-shadow: 0 0 2px 1px
        rgba(0,0,150,0.5), inset 0 0 2px 2px rgba(0,0,150,0.7);
    }
    div.cursorVolumeBar:hover
    {
        cursor: pointer;
    }

    div.currentVolumeBar
    {
        background:blue;
        width:50%;
        height:100%;
    }

    div#trackMin img.shop
    {
        min-width:40px;
        margin: auto 20px;
    }

    div#titre
    {
        display:flex;
        flex:1;
        justify-content: center;
        align-items: center;
    }
    div#titre p
    {
        margin: 0 2px;
    }

</style>