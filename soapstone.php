<?php include 'header.php' ?>
<?php include 'nav.php' ?>
<div class="molasses_banner">
    <img src="./img/stone/soapstone/soapbanner.jpg"  alt="">
    <div class="moldiv">
        <h1>World Class <br> Soap Stone</h1>
    </div>
</div>

<div class="container">
    <br><br>
    <div class="row">
        <div class="col-lg-6">
            <img src="./img/stone/soapstone/soapstone.jpg" width="100%" alt="">
        </div>
        <div class="col-lg-6">
            <h2>Soapstone</h2>
            <p>Soapstone (also known as steatite or soaprock) is a talc-schist, which is a type of metamorphic rock. It
                is composed
                largely of the magnesium rich mineral talc. It is produced by dynamothermal metamorphism and
                metasomatism, which
                occur in the zones where tectonic plates are subducted, changing rocks by heat and pressure, with influx
                of fluids,
                but without melting. It has been a medium for carving for thousands of years.[c</p>
            <h4>Use</h4>
            <p>Soapstone is a terrific material for many applications, and especially makes a good alternative to
                granite, quartz, or marble countertops. Other popular uses for soapstone include sinks, tiles, masonry
                heaters, and wood stoves.</p>
        </div>
    </div>


</div>

<!-- <div id="granitepage"></div> -->





<script>
var Data = [{
        name: 'Green Marble',
        img: './img/stone/marble/rainforest green.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'Fantasy Brown',
        img: './img/stone/marble/fantasy-brown-marble-1537435464-4321232.jpeg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'Rainforest Brown ',
        img: './img/stone/marble/rainforest-brown-marble-500x500-1.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'White Marble',
        img: './img/stone/marble/white marble.jpeg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },

    {
        name: 'Pink Marble',
        img: './img/stone/marble/pink marble.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },


]

var html = "<div class='container'><br><br><div class='tile_wrapper'>";
for (let i = 0; i < Data.length; i++) {
    // html += '<div class="row" id="Chilli">';
    html += '<div class="tile_items"> <h4 class="titleColor center">' + Data[i].name + '</h4> <img src="' + Data[i]
        .img +
        '" width="100%" class="" alt="" /></div>';
    html += '';
}
html += '</div></div>';
document.getElementById("granitepage").innerHTML = html;
</script>


<?php include 'footer.php' ?>