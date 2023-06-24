<?php include 'header.php' ?>
<?php include 'nav.php' ?>

<div class="molasses_banner">
    <img src="./img/stone/pabbles/bannerpabbles.jpg" alt="">
    <div class="moldiv">
        <h1>World Class <br> Pabbles</h1>
    </div>
</div>




<div class="container">
    <br><br>
    <div class="row">
        <div class="col-lg-6">
            <img src="./img/stone/pabbles/sdk (16).jpg" width="100%" alt="">
        </div>
        <div class="col-lg-6">
            <h3>Pabbles</h3>
            <p>A pebble is a clast of rock with a particle size of 4–64 mm (0.16–2.52 in) based on the Udden-Wentworth
                scale of sedimentology. Pebbles are generally considered larger than granules (2–4 mm (0.079–0.157 in)
                in diameter) and smaller than cobbles (64–256 mm (2.5–10.1 in) in diameter). A rock made predominantly
                of pebbles is termed a conglomerate. Pebble tools are among the earliest known man-made artifacts,
                dating from the Palaeolithic period of human history.

                A beach composed chiefly of surface pebbles is commonly termed a shingle beach. This type of beach has
                armoring characteristics with respect to wave erosion, as well as ecological niches that provide habitat
                for animals and plants.

                Inshore banks of shingle (large quantities of pebbles) exist in some locations,</p>
        </div>
    </div>


</div>

<hr>

<div id="granitepage"></div>

<!-- <img src="./img/stone/tiles/tile1.jpg" alt=""> -->
<script>
var Data = [{
        img: './img/stone/pabbles/sdk (1).jpg',
    },
    {
        img: './img/stone/pabbles/sdk (2).jpg',
    }, {
        img: './img/stone/pabbles/sdk (3).jpg',
    }, {
        img: './img/stone/pabbles/sdk (4).jpg',
    }, {
        img: './img/stone/pabbles/sdk (5).jpg',
    }, {
        img: './img/stone/pabbles/sdk (6).jpg',
    }, {
        img: './img/stone/pabbles/sdk (7).jpg',
    }, {
        img: './img/stone/pabbles/sdk (8).jpg',
    }, {
        img: './img/stone/pabbles/sdk (9).jpg',
    }, {
        img: './img/stone/pabbles/sdk (10).jpg',
    }, {
        img: './img/stone/pabbles/sdk (11).jpg',
    }, {
        img: './img/stone/pabbles/sdk (12).jpg',
    }, {
        img: './img/stone/pabbles/sdk (13).jpg',
    }, {
        img: './img/stone/pabbles/sdk (14).jpg',
    }, {
        img: './img/stone/pabbles/sdk (15).jpg',
    }, {
        img: './img/stone/pabbles/sdk (16).jpg',
    }, {
        img: './img/stone/pabbles/sdk (17).jpg',
    }, {
        img: './img/stone/pabbles/sdk (18).jpg',
    }, {
        img: './img/stone/pabbles/sdk (19).jpg',
    },
    {
        img: './img/stone/pabbles/sdk (20).jpg',
    }, {
        img: './img/stone/pabbles/sdk (21).jpg',
    }, {
        img: './img/stone/pabbles/sdk (22).jpg',
    }, {
        img: './img/stone/pabbles/sdk (23).jpg',
    }, {
        img: './img/stone/pabbles/sdk (24).jpg',
    }, {
        img: './img/stone/pabbles/sdk (25).jpg',
    }, {
        img: './img/stone/pabbles/sdk (26).jpg',
    }, {
        img: './img/stone/pabbles/sdk (27).jpg',
    }, {
        img: './img/stone/pabbles/sdk (28).jpg',
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