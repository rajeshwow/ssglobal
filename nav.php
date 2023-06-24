<style>
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
</style>
<nav class="navbar  " style="margin-bottom: 0px">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <a class="logo " href="./index.php">
<img src="./img/logo.png" class="navbrandimg" style="">
SS Globals
</a> -->
            <a  class="navbar-brand" href="./index.php">
            <!-- SS Globals -->
            <img src="./img/mainLogo.png"  alt="">
        </a>
        </div>
        <div class="collapse navbar-collapse navbar_wide" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">

                <li><a class="fromLeft" href="./index.php">Home</a></li>
                <li class="dropdown">
                    <a class="fromLeft" href="#" class="dropdown-toggle" data-toggle="dropdown">Stones</a>
                    <ul class="dropdown-menu">
                        <li><a href="./marble.php">Marble</a></li>
                        <li><a href="./granite.php">Granite</a></li>
                        <li><a href="./sandstone.php">Sand Stone</a></li>
                        <li><a href="./quartz.php">Quartz</a></li>
                        <li><a href="./soapstone.php">Soap Stone</a></li>
                        <li><a href="./limestone.php">Lime Stone</a></li>
                        <li><a href="./pabbles.php">Pabbles</a></li>
                        <li><a href="./slate.php">Slate</a></li>
                        <li><a href="./tiles.php">Tiles</a></li>
                        
                    </ul>
                    </a>
                </li>

                <li class="dropdown">
                    <a class="fromLeft" href="#" class="dropdown-toggle" data-toggle="dropdown">Agro</a>
                    <ul class="dropdown-menu">
                        <!-- <li ><a class="navhead" href="" >Stones</a></li> -->
                        <!-- <li><a href="./stones.php" >Stone Products</a></li>  -->
                        <li class="dropdown-submenu">
                            <a href="./grains.php">Grains</a>
                            <ul class="dropdown-menu">
                                <li><a href="./grains.php#bajra"> Millet (Bajra)</a></li>
                                <li><a href="./grains.php#jowar">Sorghum (Jowar)</a></li>
                                <li><a href="./grains.php#wflour">Wheat Flour</a></li>
                                <li><a href="./grains.php#maida">White Flour (Maida)</a></li>
                                <li><a href="./grains.php#makka">Maize (Makka)</a></li>
                                <li><a href="./grains.php#suji">semolina (Suji)</a></li>
                                <li class="dropdown-submenu">
                                    <a href="./Rice.php">Rice</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="./Rice.php">Basmati</a></li>
                                        <li><a href="./Rice.php">Non Basmati</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="./peenuts.php">Peenut</a></li>
                        <li class="dropdown-submenu">
                            <a href="./spices.php">Spices</a>
                            <ul class="dropdown-menu">
                                <li><a href="./spices.php#jeera">Cumin (Jeera)</a></li>
                                <li><a href="./spices.php#Saunf">Saunaph (Saunf)</a></li>
                                <li><a href="./spices.php#Ajwain">Carom Seed (Ajwain)</a></li>
                                <li><a href="./spices.php#Isabgol">Psyllium Husk (Isabgol)</a></li>
                                <li><a href="./spices.php#Methi">Fenugreek seeds (Methi)</a></li>
                                <li><a href="./spices.php#Turmeric">Turmeric (Haldi)</a></li>
                                <li><a href="./spices.php#Chilli">Chilli</a></li>
                                <li><a href="./spices.php#Coriander">Coriander (Dhaniya)</a></li>
                                <li><a href="./spices.php#Cardamom">Cardamom(Ilaychi)</a></li>
                                <li><a href="./spices.php#Clove">Clove (Launga)</a></li>
                                <li><a href="./spices.php#Black Pepper">Black Pepper (Kali Mirch)</a></li>


                            </ul>
                        </li>
                    </ul>
                    </a>
                </li>
                <!-- <li><a class="fromLeft" href="#">EXIBITIONS</a></li> -->
                <li><a class="fromLeft" href="./index.php#contact">Contact us</a></li>
                <li><a class="fromLeft" href="./index.php#ourteam">Our Team</a></li>
                <li><a class="fromLeft" href="./aboutus.php">About us</a></li>
            </ul>
        </div>
    </div>
</nav>

<script type="text/javascript">
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en'
    }, 'google_translate_element');
};
</script>
<script>
$(window).load(function() {
    $(".goog-logo-link").empty();
    $('.goog-te-gadget').html($('.goog-te-gadget').children());
})
</script>