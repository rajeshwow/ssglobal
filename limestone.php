<?php include 'header.php' ?>
<?php include 'nav.php' ?>

<div class="molasses_banner">
    <img src="./img/stone/limestone/Black Limestone.jpg"  alt="">
    <div class="moldiv">
        <h1>World Class <br> Limestone</h1>
    </div>
</div>




<div class="container">
    <br><br>
    <div class="row">
        <div class="col-lg-6">
            <img src="./img/stone/limestone.jpg" width="100%" alt="">
        </div>
        <div class="col-lg-6">
            <p>Limestone is a sedimentary rock composed principally of calcium carbonate (calcite) or the double
                carbonate of calcium and magnesium (dolomite). It is commonly composed of tiny fossils, shell fragments
                and other fossilized debris. These fossils are frequently visible to the unaided eye on close
                examination of the stone surface, however this is not always the case. Some varieties of limestone have
                an extremely fine grain.

                Limestone is usually gray, but it may also be white, yellow or brown. It is a soft rock and is easily
                scratched. It will effervesce readily in any common acid.

                Limestones may vary greatly in texture and porosity from coquina, which is a matrix of whole or pieces
                of sea shells loosely cemented by calcite, to oolitic limestones and microcrystalline limestones whose
                structures are so fine that they can be seen only under magnification.

                Limestone deposits can undergo metamorphism during major geological events resulting in a
                recrystallizing as marble.

                Oolitic limestone consists of substantial amounts of "oolites" or "ooliths." Oolites are small spherical
                or sub-spherical grains of concentric calcite.</p>
        </div>
    </div>


</div>
<div id="granitepage"></div>


<script>
var Data = [{
        name: 'Black Limestone',
        img: './img/stone/limestone/Black Limestone.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'Tandoor Grey Limestone',
        img: './img/stone/limestone/Tandoor Grey Limestone.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'Tandoor Yellow Limestone',
        img: './img/stone/limestone/Tandoor Yellow Limestone.jpg',
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
//     html += '<h2>' + Data[i].name + '</h2>';
//     html += '<p>' + Data[i].desc + '</p></div></div>';

// }
// html += '</div>';
// document.getElementById("granitepage").innerHTML = html;
</script>


<?php include 'footer.php' ?>