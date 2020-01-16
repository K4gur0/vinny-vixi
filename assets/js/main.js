"use strict";

let playerJs = document.querySelector("section#playerJs"); // Récupération de la section du player
let heightPlayer = getComputedStyle(playerJs); // Récupération des valeur CSS de la section player
const heightInit = heightPlayer.height; // Récupération de la valeur CSS height dans la constante heightInit

let arrowImg = document.querySelector("#arrow"); // Récupération de l'objet arrow (point d'ancrage avec l'id = "arrow")

let arrow = document.querySelector(".arrow");
const arrowCss = getComputedStyle(arrow);

let btnPPS = document.querySelector("div.btnPPS"); // Récupération du conteneur des bouttons play pause et stop (PPS)

let divBtn = document.querySelector("div.btn");
let divBtnHeight = getComputedStyle(divBtn); // Récupération des valeur CSS du div.btn
const divBtnHeightInit = divBtnHeight.height; // Récupération de la valeur CSS height dans la constante divBtnHeightInit

let btnImg = document.querySelectorAll("div.btn img.sizeUp");
let btnImgSize = getComputedStyle(btnImg[0]);

let trackMin = document.querySelector("div#trackMin");

let trackMax = document.querySelector("div#trackMax");

let imgTrack = document.querySelector("section#playerJs figure#illusBeats")
let imgTrackMin = document.querySelector("section#playerJs figure#illusBeatsMin")

let deploi = false


let arrowu = arrowImg.src
let arrowd = "http://localhost/vinny/assets/icons/player/arrowd.svg"

let play = document.querySelector("img#play")
let stop = document.querySelector("img#stop")
let next = document.querySelector("img#next")
let previous = document.querySelector("img#previous")

let music = document.querySelector("audio");
let playList = document.querySelectorAll("audio source");

let previous2 = document.querySelector("#previousExtend")
let next2 = document.querySelector("#nextExtend")

let titre = document.querySelector("div#trackMin p.currentTitre");

let currentTimeBeatText = document.querySelector('div#currentTime p');
let durationBeatText = document.querySelector('div#duration p');


////////////////////////////////////  AFFICHAGE DE LA MUSIQUE EN COURS  //////////////////////////

function recupTitre()
{
    let titreBeat = playList[currentSong];
    titreBeat = titreBeat.attributes[0].textContent.split('/');
    titre.textContent = titreBeat[2];
    
}



//////////////////////////////////// FIN //////////////////////////

function sizeUp()
    {
        for(let i = 0; i < btnImg.length; i++)
                {
                    btnImg[i].style.width = "55px";
                };
    }
function sizeDown()
    {
        for(let i = 0; i < btnImg.length; i++)
                {
                    btnImg[i].style.width = "40px";
                }
    }

    arrow.onclick = function()
    {

        if (deploi == false)
        {
            

            setTimeout(function()
            {
                trackMax.style.display="contents";
                btnPPS.style.width="200px";
                btnPPS.style.justifyContent="space-evenly";
                arrowImg.src = arrowd;
                divBtn.style.height="200px";
                divBtn.style.justifyContent="center";
                divBtn.style.position="relative";
                next.style.display="none";
                previous.style.display="none";
                imgTrackMin.style.opacity="0";
                imgTrack.style.height="450px";
                imgTrack.style.opacity="1";
                trackMax.style.height="auto";
                },300);

            setTimeout(function()
            {
                playerJs.style.height="78vh";       

                },0);

            sizeUp();
            return deploi = true;
        }else if(deploi == true)
        {
            playerJs.style.height= "120px";
            btnPPS.style.width="auto";
            btnPPS.style.justifyContent="space-evenly";
            arrowImg.src = arrowu;
            arrow.style.position = arrowCss.position;
            divBtn.style.alignItems="center";
            divBtn.style.paddingBottom="0";
            trackMax.style.display="none";
            imgTrack.style.height="0px";
            imgTrack.style.opacity="0";
            next.style.display="block";
            previous.style.display="block";
            imgTrackMin.style.opacity="1";
            divBtn.style.height = divBtnHeightInit;
            // setTimeout(function()
            //     {
            //     },1000);    
            sizeDown();
            return deploi = false;
        }
    }






let currentSong = 0;


next.onclick = function()
{
    
    console.log(playList[currentSong]);


    if (currentSong < playList.length-1)
    {
        currentSong++
        music.src = playList[currentSong].src
        music.play();
        play.src="assets/icons/player/pause_c_w.png";  
    }else
    {
        currentSong = 0;
        music.src = playList[currentSong].src;
        music.play();
        play.src="assets/icons/player/pause_c_w.png";
    }
    recupTitre();
    status = true;       
}

previous.onclick = function()
{

    if (currentSong > 0)
    {
        currentSong--
        music.src = playList[currentSong].src
        music.play();
        play.src="assets/icons/player/pause_c_w.png";
    }else
    {
        currentSong = playList.length-1
        music.src = playList[currentSong].src
        music.play();
        play.src="assets/icons/player/pause_c_w.png";
    }  
    recupTitre();
    status = true; 
}

previous2.onclick = function()
{
    previous.onclick();
    status = true;
    recupTitre();
}
next2.onclick = function()
{
    next.onclick();
    status = true;
    recupTitre();
}


let status = false
play.onclick = function()
{
    recupTitre();
    
    if( status == false )
    {
        music.play();
        play.src="assets/icons/player/pause_c_w.png";
        return status = true
    }else if(status == true)
    {
        music.pause();
        play.src="assets/icons/player/play.svg";
        return status = false
    }
    
}

stop.onclick = function()
{
    music.pause();
    music.currentTime = 0;
    play.src="assets/icons/player/play.svg";
    durationBeatText.textContent = "0 : 00";
    return status = false
}




let barTime = document.querySelector("#timeLine")
let barTime2 = getComputedStyle(barTime);
let barCurrentTime = document.querySelector("#currentTimeBar")
let cursor = document.querySelector("#cursor")

/////////////////// RECUPERATION DES COORDONNEES DU CURSEUR ///////////////////
function getMousePosition(event) {
    return {
        x: event.pageX,
        y: event.pageY
    };
}
////////////////////////////////////////////////////////////////////////////

function getPosition(element)
{
    let top = 0, left = 0;
    
    do {
        top  += element.offsetTop;
        left += element.offsetLeft;
    } while (element = element.offsetParent);
    
    return { x: left, y: top };
}


function clickProgress(idPlayer, control, event)
{
    let parent = getPosition(control);    // La position absolue de la progressBar
    let target = getMousePosition(event); // L'endroit de la progressBar où on a cliqué
    // let player = document.querySelector('#' + idPlayer);
  
    let x = target.x - parent.x; 
    let wrapperWidth = document.querySelector('#timeLine').offsetWidth;
    
    let percent = Math.ceil((x / wrapperWidth) * 100);    
    let duration = music.duration;

    music.currentTime = (duration * percent) / 100;

}

////////////////////////////////////  CONTROL DU VOLUME  ////////////////////////////////////

// function volume(idPlayer, vol) {
//     let player = document.querySelector('#' + idPlayer);
	
//     player.volume = vol;	
// }


////////////////////   MUTE / UNMUTE    ////////////////////
let vol = 1;
let imgMute = document.querySelector("div.volume img");

imgMute.onclick = function() 
{
    if(vol==0)
    {
        vol=1;
        imgMute.src = "assets/icons/player/nomuted.svg";
        imgMute.title = "mute";
    }else if(vol==1)
    {
        vol=0;
        imgMute.src = "assets/icons/player/muted.svg";
        imgMute.title = "unmute";
    }
    music.volume = vol;
}


////////////////////////////////////  BAR DE TEMPS MUSIQUE  ////////////////////////////////////


// function barProgessTime()
// {
    
//     music.addEventListener('timeupdate', (event) =>
//     { 
//         barCurrentTime.style.width = music.currentTime / (music.duration / 100) + "%";
//         cursor.style.left = music.currentTime / (music.duration / 100) + "%";
//     });


// }

let nextAuto = function()
    {
        if(music.currentTime == music.duration)
        {
            next.onclick();
        }
    }

function update(playerJs) {

    let time = playerJs.currentTime;
    
    barCurrentTime.style.width = music.currentTime / (music.duration / 100) + "%";
    cursor.style.left = music.currentTime / (music.duration / 100) + "%";
    
    currentTimeBeatText.textContent = formatTime(time);
    durationBeatText.textContent = formatTime(music.duration);
    nextAuto();
}


function formatTime(time) {
    let hours = Math.floor(time / 3600);
    let mins  = Math.floor((time % 3600) / 60);
    let secs  = Math.floor(time % 60);
	
    if (secs < 10) {
        secs = "0" + secs;
    }
	
    if (hours) {
        if (mins < 10) {
            mins = "0" + mins;
        }
		
        return hours + " : " + mins + " : " + secs; // hh:mm:ss
    } else {
        return mins + " : " + secs; // mm:ss
    }
}





let cursor2 = getComputedStyle(cursor)
let cursor3 = cursor2.width.split('px');
let cursorCenter = (cursor3[0]) / 2;


const cursorLeft = cursor.offsetLeft;
const barTimeWidth = barTime.offsetWidth - cursor.offsetWidth;


function moveBarTime()
{
    if(cursor.offsetLeft >= 0 && cursor.offsetLeft <= (barTimeWidth - cursor.offsetWidth))
    {
        // console.log(cursor.offsetLeft);
    }
    barCurrentTime.style.width = event.clientX + "px";
    cursor.style.left = (event.clientX - cursorCenter) + "px";
}


barTime.addEventListener('mousedown', moveBarTime, true);
function dragOn()
{
    document.addEventListener('mousemove', moveBarTime, true);
    cursor.style.background = "rgba(25,25,255,1)";
    
}

function dragOff()
{
    document.removeEventListener('mousemove', moveBarTime, true);
    cursor.style.background = "rgba(100,100,255,1)";
}

barTime.addEventListener('mousedown', dragOn, true)
cursor.addEventListener('mousedown', dragOn, true)

document.addEventListener('mouseup', dragOff, true);

//////////////////////////////////// FIN ////////////////////////////////////


document.addEventListener('play', function(e){
    // get all <audio> tag elements in the page.
    var allAudios = document.getElementsByTagName('audio');
    // Iterate through all players and pause them, except for
    // the one who fired the "play" event ("target")
    for(var i = 0; i<allAudios.length; i++){
        if(allAudios[i] != e.target){
            allAudios[i].pause();
        }
    }
}, true);




    
    
    






