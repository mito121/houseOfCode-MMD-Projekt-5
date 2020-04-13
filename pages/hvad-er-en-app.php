<section class="bg-dark">
    
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
        <h2 class="red">Hvordan fungerer en app?</h2>
        <p>Placeholder-tekst: Apps er programmer til telefonen hvorpå information kan være tilgængelig. <span id="dots">...</span><span id="more"> Det smarte ved en app, kontra en hjemmeside, er at programfilerne allerede ligger på telefonen, dette gør det meget hurtigere at få data frem til modtageren. Derudover har apps også bedre mulighed for at bruge de mange features i smartphones</span></p>
     <button onclick="myFunction()" id="myBtn">Read more</button>
    </div>
   
    &nbsp;
    
    <div class="row">
        <h2 class="blue">Hvad kan i opnå med en app?</h2>
        <p>Placeholder-tekst: Apps er programmer til telefonen hvorpå information kan være tilgængelig. Det smarte ved en app, kontra en hjemmeside, er at programfilerne allerede ligger på telefonen, dette gør det meget hurtigere at få data frem til modtageren. Derudover har apps også bedre mulighed for at bruge de mange features i smartphones</p>
    </div>
    
    &nbsp;
    
    <div class="row">
        <h2 class="green">Tilkobling til eksisterende systemer</h2>
        <p>Placeholder-tekst: Apps er programmer til telefonen hvorpå information kan være tilgængelig. Det smarte ved en app, kontra en hjemmeside, er at programfilerne allerede ligger på telefonen, dette gør det meget hurtigere at få data frem til modtageren. Derudover har apps også bedre mulighed for at bruge de mange features i smartphones</p>
    </div>
    
    <script>
        function myFunction() {
          var dots = document.getElementById("dots");
          var moreText = document.getElementById("more");
          var btnText = document.getElementById("myBtn");

          if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more"; 
            moreText.style.display = "none";
          } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less"; 
            moreText.style.display = "inline";
          }
        }
    </script>
    
</section>