<?php



?>


<header>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-end">
  <a class="navbar-brand" id="logo" href="index.php"><img src="assets/images/logo_vinny_letra_2.png" alt="logo vinny prods" title="logo vinny vixi"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav d-flex align-items-end">
      <li class="nav-item ">
        <a class="nav-link" href="../vinny/#about">A propos</a>
        <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../vinny/#beats">Beats</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../vinny/#videos">Videos</a>
        </li>
        
        <!-- <li class="nav-item">
            <a class="nav-link" href="#freestyle">FreeStyle record</a>
        </li> -->
    
        <li class="nav-item">
            <a class="nav-link" href="../vinny/#tarif">Licences</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../vinny/#contact">Contact</a>
        </li>

    </ul>
  </div>
</nav>




        <!-- <nav>
        
            <a href="index.php" class="logo">
                    <img src="assets/images/logo_vinny_letra_2.png" alt="logo vinny prods" title="logo vinny vixi">
            </a>

            <ul class="nav">
                
                <li class="nav-item">
                    <a class="nav-link" href="#about">A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#beats">Beats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#videos">Videos</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#freestyle">FreeStyle record</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tarif">Licences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>


        </nav> -->

        

</header>


<style>

    header
    {
        height: 100px;
        width: 100%;
        background: #1d1f21;
        background: -moz-linear-gradient(top,  #1d1f21 0%, #000000 100%);
        background: -webkit-linear-gradient(top,  #1d1f21 0%,#000000 100%);
        background: linear-gradient(to bottom,  #1d1f21 0%,#000000 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1d1f21', endColorstr='#000000',GradientType=0 );
        position:fixed;
        box-shadow: 0 0 10px 3px rgba(0, 0, 0, 0.9);
        display: flex;
        z-index:1
    }

    a.nav-link
    {
        color: #9b9ece;
        font-family: 'Permanent Marker', cursive;
        transition:0.2s;
    }
    a.nav-link:hover
    {
        color: #78e3fd;
        text-shadow: 1px 1px 5px rgba(255,255,255,1);
    }

    header nav
    {
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items:center;
    }

    a#logo
    {
        width: 90px;
        height: 90px;
        position: absolute;
        left: 0;
        top: 0;
    }

    header nav img
    {
        width: 100%;
    }
    header nav ul.nav
    {
        align-items: center;
        height: 100%;
    }

    .form-inline 
    {
    right: 20px;
    position: absolute;
    }

    .form-control, .btn-outline-success
    {
    height: 30px;
    display: flex;
    align-items: center;
    border-radius: 1px;
    font-family: sans-serif;
    font-size: 0.7rem;
    }

    .btn-outline-success
    {
        color: #00b3ff;
        border: 1px #00b3ff solid;
        padding: 3px;
    }
    .btn-outline-success:hover
    {
        color: white;
        background: #00b3ff;
        border-color: #00b3ff;
    }
    .btn-outline-success img
    {
        width:25px;
        height: 25px;
    }

    .navbar-expand-lg .navbar-collapse
    {
        justify-content: center;
    }
    li.nav-item
    {
        background: rgba(0, 0, 0, 0.8);
        width: 200px;
        display : flex;
        justify-content: center;
        align-items: center;
    }
    /* li.nav-item a
    {
        color: #9b9ece;
        font-family: 'Permanent Marker', cursive;
        transition:0.2s;
    } */

    .navbar-dark .navbar-nav .nav-link
    {
        color: #9b9ece;
        font-family: 'Permanent Marker', cursive;
        transition:0.2s;
    }
    .bg-dark 
    {
    background-color: black !important;
    }
    


</style>