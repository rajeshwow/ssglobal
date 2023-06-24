<?php include 'header.php' ?>
<?php include 'nav.php' ?>

<div class="molasses_banner">
    <img src="./img/stone/tiles/tilesbanner.jpg"  alt="">
    <div class="moldiv">
        <h1>World Class <br> Tiles</h1>
    </div>
</div>




<div class="container">
    <br><br>
    <div class="row">
        <div class="col-lg-6">
            <img src="./img/stone/tiles/Matte-or-Unglazed-Porcelain-Tiles.jpg" width="100%" alt="">
        </div>
        <div class="col-lg-6">
            <h3>Tiles</h3>
            <p>Porcelain tiles or ceramic tiles are porcelain or ceramic tiles commonly used to cover floors and walls,
                with a water absorption rate of less than 0.5 percent. The clay used to build porcelain tiles is
                generally denser. They can either be glazed or unglazed. Porcelain tiles are one type of vitrified tiles
                and are sometimes referred to as porcelain vitrified tiles.

                Historically, porcelain was not the usual material for tiles, which were much more often made of
                earthenware (terracotta) or stoneware. The first porcelain tiles were made in China, for example in the
                15th-century Porcelain Tower of Nanjing (now largely destroyed). Here the tiles were used for walls,
                which long remained typical. In Europe, a few rooms were made in palaces of porcelain plaques, often
                with forms in high relief. These were made by Capodimonte porcelain and Real Fábrica del Buen Retiro
                among others.

                Although porcelain has now been widely used for making tiles for many years, modern production methods
                and quantities have made porcelain tiles available for the average householder in recent years.</p>
        </div>
    </div>


</div>

<hr>

<div id="granitepage"></div>

<!-- <img src="./img/stone/tiles/tile1.jpg" alt=""> -->
<script>
var Data = [{
        img: './img/stone/tiles/tile1.jpg',
    },
    {
        img: './img/stone/tiles/tile2.jpg',
    },
    {
        img: './img/stone/tiles/tile3.jpg',
    },
    {
        img: './img/stone/tiles/tile4.jpg',
    },
    {
        img: './img/stone/tiles/tile5.jpg',
    },
    {
        img: './img/stone/tiles/tile6.jpg',
    },
    {
        img: './img/stone/tiles/tile7.jpg',
    },
    {
        img: './img/stone/tiles/tile8.jpg',
    },
    {
        img: './img/stone/tiles/tile9.jpg',
    },
    {
        img: './img/stone/tiles/tile10.jpg',
    },
    {
        img: './img/stone/tiles/tile11.jpg',
    },


]

var html = "<div class='container'><br><br><div class='tile_wrapper'>";
for (let i = 0; i < Data.length; i++) {
    // html += '<div class="row" id="Chilli">';
    html += '<div class="tile_items"> <img src="' + Data[i].img +
        '" width="100%" class="" alt="" /></div>';
    html += '';
}
html += '</div></div>';
document.getElementById("granitepage").innerHTML = html;
</script>


<?php include 'footer.php' ?>