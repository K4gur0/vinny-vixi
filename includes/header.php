<?php



?>


<header>

        <nav>
        
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
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#tarif">Licences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>


                    
                        <!-- <form action ="Controleurs/VerifForm.php" method="get" class="form-inline methode">

                            <input class="form-control mr-sm-2" type="search" name="terme" placeholder="Entrez un terme" aria-label="Search">

                            <button name="s" value="Rechercher" class="btn btn-outline-success my-2 my-sm-0" type="submit"><img src="assets/icons/search_w.png" alt="search"></button>

                        </form> -->


        </nav>

        

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
        transition:0.2s
    }
    a.nav-link:hover
    {
        color: #78e3fd;
    }

    header nav
    {
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items:center;
    }

    a.logo
    {
        width: 100px;
        height: 100px;
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
    border-radius: 2px;
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

</style>