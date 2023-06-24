<?php include 'header.php' ?>
<?php include 'nav.php' ?>

<div class="molasses_banner">
    <img src="./img/stone/sandstonebanner.jpg"  alt="">
    <div class="moldiv">
        <h1>World Class <br> Sand Stone</h1>
    </div>
</div>




<div id="granitepage"></div>









<script>
var Data = [{
        name: 'Agra Red',
        img: './img/stone/sandstone/Agra Red Sandstone.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'Autumn Brown',
        img: './img/stone/sandstone/autumn-brown-sandstone-1364736.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'Rippon Rose',
        img: './img/stone/sandstone/Rippon Rose Sandstone.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'Teakwood Sandstone',
        img: './img/stone/sandstone/Teakwood Sandstone.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },

    {
        name: 'Two Tone Sandstone',
        img: './img/stone/sandstone/Two Tone Sandstone.jpeg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'Rippon Buff Sandstone',
        img: './img/stone/sandstone/Rippon Buff Sandstone.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'Rainbow Sandstone',
        img: './img/stone/sandstone/Rainbow Sandstone.jpeg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'Mint Sandstone',
        img: './img/stone/sandstone/Mint Sandstone.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'Mandana Sandstone',
        img: './img/stone/sandstone/Mandana Sandstone.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'Lp Yellow Sandstone',
        img: './img/stone/sandstone/Lp Yellow Sandstone.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'LP Gray',
        img: './img/stone/sandstone/lp-grey-sandstone-465.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },

    {
        name: 'Kandla Grey Sandstone',
        img: './img/stone/sandstone/Kandla Grey Sandstone.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },

]

var html = "<div class='container'><br><br><div class='tile_wrapper'>";
for (let i = 0; i < Data.length; i++) {
    // html += '<div class="row" id="Chilli">';
    html += '<div class="tile_items"> <h4 class="titleColor center">'+ Data[i].name +'</h4> <img src="' + Data[i].img +
        '" width="100%" class="" alt="" /></div>';
    html += '';
}
html += '</div></div>';
document.getElementById("granitepage").innerHTML = html;


// var html = "<div class='container'><br><br>";
// for (let i = 0; i < Data.length; i++) {
//     if (i > 0) {
//         html += '<br><hr><br>';
//     }
//     html += '<div class="row" id="Chilli">';
//     html += '<div class="col-lg-6">';
//     html += '<div class="imgWrapper"><img src="' + Data[i].img + '" width="100%" class="keyPics" alt="" /></div></div>';
//     html += '<div class="col-lg-6">';
//     html += '<h2 class="titleColor">' + Data[i].name + '</h2>';
//     html += '<p>' + Data[i].desc + '</p></div></div>';

// }
// html += '</div>';
// document.getElementById("granitepage").innerHTML = html;
</script>


<?php include 'footer.php' ?>