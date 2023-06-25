


<?php include 'header.php' ?>
<?php include 'nav.php' ?>
<div class="molasses_banner">
    <img src="./img/plastic/pp.jpg"   alt="">
    <div class="moldiv">
        <h1>World Class <br> Plastic</h1>
    </div>
</div>

<style>
    .texts{
        margin: 5%;
    text-transform: capitalize;
    text-align: center;
    }
</style>




    <div id="marblePage"></div>
<script>
var Data = [{
        name: 'PP',
        img: './img/plastic/pp.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'PE',
        img: './img/plastic/pe.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'HDPE',
        img: './img/plastic/HDPE.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    {
        name: 'LDPE',
        img: './img/plastic/LDPE.jpg',
        desc: 'one slfjl jsdklfkljsf sldklfkjsd fl skdlfjl'
    },
    

]

var descriptions = "<div class='container'><div class='row'><div class='col-lg-12 texts'><p>all kind of pp granules, and chips from saudi arabia and other gcc countries. <br /> product like sabic, natpet, tasnee, advance , borouge , luban</p></div></div></div>"


var html = "<div class='container'><br><br><div class='tile_wrapper'>";
for (let i = 0; i < Data.length; i++) {
    html += '<div class="tile_items"> <h4 class="titleColor center">' + Data[i].name + '</h4> <img src="' + Data[i]
        .img +
        '" width="100%" class="" alt="" /></div>';
    html += '';
}
html += '</div></div>';
descriptions += html;
document.getElementById("marblePage").innerHTML = descriptions;
</script>


<?php include 'footer.php' ?>