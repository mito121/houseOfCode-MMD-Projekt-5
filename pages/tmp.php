<section class="bg-dark hvad-er-en-app">

    <div class="row">
        <div class="code-content">
            <h1 class="d-inline orange">Hvad er en app?</h1> {
            <div class="indent">
                <span class="yellow">R&aring;dgivning</span>, <span class="purple">design</span>, <span class="blue">udvikling</span>&nbsp;&amp;&nbsp;<span class="red">vedligeholdelse </span>af apps
            </div>
            }
        </div>
    </div>

    &nbsp;

    <div class="row">
        <div class="b-red flex-heading" id="show1"><h2 class="red">Hvordan fungerer en app?</h2> <img src="assets/img/red-arrow.svg" alt="Pil" class="arrow" id="arrow1"/></div>
        <p id="text1">Typisk kendes apps som små tilføjelsesprogrammer til eksempelvis smartphones. Mange kender apps som facebook til mobilen, spillet angry birds og funktionen lommelygte, der gør brug af mobilens flash. Det er altså små programmer eller software, som fungerer via en computer eller et API. Der findes et hav af apps inden for mange forskellige områder. Man kan få apps til at hjælpe med regnskab, bogføring, billedredigering, projektstyring, vejvisning og meget andet.</p>
    </div>

    &nbsp;

    <div class="row">
        <div class="b-blue flex-heading" id="show2"><h2 class="blue">Hvad kan i opnå med en app?</h2> <img src="assets/img/blue-arrow.svg" alt="Pil" class="arrow" id="arrow2"/></div>
        <p id="text2">Mobilteknologien er i en rivende udvikling. Smartphone produkter som iPhone og Android har stor succes, og forbrugermarkedet driver derfor app-revolutionen. For virksomheder ligger der mange gemte muligheder i denne udvikling, men det kræver både vilje, mod og evner at ride med på bølgen. Over de sidste mange år har flere og flere mennesker dropper deres stationære og bærbare computere til fordel for tablets og smartphones. I begyndelsen af 2018 kom 51,2% af den globale internettrafik fra mobile enheder.</p>
    </div>

    &nbsp;

    <div class="row">
        <div class="b-green flex-heading" id="show3"><h2 class="green">Tilkobling til eksisterende systemer</h2> <img src="assets/img/green-arrow.svg" alt="Pil" class="arrow" id="arrow3"/></div>
        <p id="text3">API'er gør det muligt for forskellige programmer at ”tale” sammen, og det kan blandt andet betyde, at du med API kan udveksle data på tværs af programmer. <br> Fordelen ved et API er først og fremmest, at det letter arbejdet, fordi du slipper for manuelt at overføre oplysninger, som eksempelvis fra din webshop til dit regnskabsprogram.
            Et godt API gør det ydermere lettere at udvikle et nyt program, fordi det kan forbinde og give adgang til alle oplysninger og ”byggeklodser”, der skal bruges. Når alle oplysninger er tilgængelige og samlet, kan programmøren lettere udvikle og få tingene til at arbejde sammen.</p>
    </div>


</section>

<script>
var btn1 = document.getElementById("show1");
var btn2 = document.getElementById("show2");
var btn3 = document.getElementById("show3");

var text1 = document.getElementById("text1");
var text2 = document.getElementById("text2");
var text3 = document.getElementById("text3");

var arrow1 = document.getElementById("arrow1");
var arrow2 = document.getElementById("arrow2");
var arrow3 = document.getElementById("arrow3");

// Show or hide text 1
btn1.addEventListener("click", function(){
    if(text1.style.display == "block"){
        text1.style.display = "none";
        arrow1.style.transform = "rotate(0deg)";
    }else{
        text1.style.display = "block";
        arrow1.style.transform = "rotate(180deg)";
    }
});

// Show or hide text 2
btn2.addEventListener("click", function(){
    if(text2.style.display == "block"){
        text2.style.display = "none";
        arrow2.style.transform = "rotate(0deg)";
    }else{
        text2.style.display = "block";
        arrow2.style.transform = "rotate(180deg)";
    }
});

// Show or hide text 3
btn3.addEventListener("click", function(){
    if(text3.style.display == "block"){
        text3.style.display = "none";
        arrow3.style.transform = "rotate(0deg)";
    }else{
        text3.style.display = "block";
        arrow3.style.transform = "rotate(180deg)";
    }
});
</script>