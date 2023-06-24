<?php include 'header.php' ?>
<?php include 'nav.php' ?>
<div class="molasses_banner">
    <img src="./img/banners/marblebanners.jpg"   alt="">
    <div class="moldiv">
        <h1>World Class <br> Marble</h1>
    </div>
</div>


    <div id="marblePage"></div>





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
document.getElementById("marblePage").innerHTML = html;
</script>


<?php include 'footer.php' ?>