<?php include 'header.php' ?>
<?php include 'nav.php' ?>

<div class="molasses_banner">
    <img src="./img/stone/granite/granitebanner.jpeg"   alt="">
    <div class="moldiv">
        <h1>World Class <br> Granite</h1>
    </div>
</div>






<div id="granitepage"></div>




<script>
var Data = [{
        name: 'Ash Black',
        img: './img/stone/granite/ash-black-granite-500x500.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'Cheema Pink',
        img: './img/stone/granite/chima-pink-granite-500x500 (1).jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'Desert Brown ',
        img: './img/stone/granite/Desert-Brown-Granite.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'Gem Red',
        img: './img/stone/granite/gem-red-granite-tiles-1626072668-5893290.jpeg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'Lavender Blue',
        img: './img/stone/granite/lavender-blue-granite-stone-1602671854-5609207.jpeg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'Absolute Black',
        img: './img/stone/granite/Absolute-Black-Granite.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'Black Pearl',
        img: './img/stone/granite/black-pearl-granite-500x500.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'P White',
        img: './img/stone/granite/p white.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'Red Wine',
        img: './img/stone/granite/red-wine-p224409-1b-e1594465929594.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'Rosy Pink',
        img: './img/stone/granite/rory-pink-granite-500x500.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'S White',
        img: './img/stone/granite/S-White-Granite.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'Tiger Skin',
        img: './img/stone/granite/tiger skin.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'Black Galaxy',
        img: './img/stone/granite/black-galaxy-granite-tile-500x500.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'G20 Black',
        img: './img/stone/granite/G20 Black.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'Hassan Green',
        img: './img/stone/granite/hassan-green-granite-slabs-1569393643-1750590.jpeg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'Jhansi Red',
        img: './img/stone/granite/jhansi-red-granite-4.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'Moon White',
        img: './img/stone/granite/moon white g.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'New Imperial Red',
        img: './img/stone/granite/New Imperial Red.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'Tan Brown',
        img: './img/stone/granite/tan_brown.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'Vizag Blue',
        img: './img/stone/granite/Vizag-Blue-1.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'Warangal Black',
        img: './img/stone/granite/Warangal Black.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'Colombo Juprana',
        img: './img/stone/granite/Colombo-Juparana-680x400.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'Crystal Yellow',
        img: './img/stone/granite/Crystal Yellow.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'Giblee',
        img: './img/stone/granite/ghibli-granite-500x500.webp',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'Golden Oak',
        img: './img/stone/granite/golden oak.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'Himalayan Blue',
        img: './img/stone/granite/himalayan-blue-granite-stone-1602671738-5609193.jpeg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'Indian Juprana',
        img: './img/stone/granite/indian-juparana-granite-closeup.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'Merry Gold',
        img: './img/stone/granite/marry gold.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'Alaska Gold',
        img: './img/stone/granite/alaska gold.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }, {
        name: 'Alaska White',
        img: './img/stone/granite/alaska-white-granite-closeup.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }
    , {
        name: 'Black Marquina',
        img: './img/stone/granite/Black-Marquina.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    }

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

// var html = "<div class='container'><br><br>";
// for (let i = 0; i < Data.length; i++) {
//     if (i > 0) {
//         html += '<br><hr><br>';
//     }
//     html += '<div class="row" id="Chilli">';
//     html += '<div class="col-lg-6">';
//     html += '<div class="imgWrapper"><img src="' + Data[i].img + '" width="100%" class="keyPics" alt="" /></div></div>';
//     html += '<div class="col-lg-6">';
//     html += '<h2>' + Data[i].name + '</h2>';
//     html += '<p>' + Data[i].desc + '</p></div></div>';

// }
// html += '</div>';
// document.getElementById("granitepage").innerHTML = html;
</script>


<?php include 'footer.php' ?>