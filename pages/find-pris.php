<style>
    html, body{
        overflow:hidden;
    }
    nav{
        right: calc(24px + 17px);
    }
</style>
<div class="form-wrapper">

    <div class="formNav">
        <hr>
        <a href="#section1" id="navSec1"></a>
        <a href="#section2" id="navSec2"></a>
        <a href="#section3" id="navSec3"></a>
        <a href="#section4" id="navSec4"></a>
    </div>

    <form id="find-pris" enctype="multipart/form-data">
        <!-- SECTION 1 -->
        <section class="fullscreen section"  id="section1">
            <div class="row">
                <div class="code-content-xs">
                    <h1 class="d-inline green">Find en pris</h1> {
                    <div class="indent">
                        Her kan du fortælle os hvad du har i tankerne.
                        <br>
                        Udfyld formularen og så finder vi sammen den helt rette løsning til dig.
                    </div>
                    }
                </div>
            </div>

            <br class="bigBreak"><br class="bigBreak">

            <div class="row form-row">
                <p>Felter med <span style="color:#d26d75;">*</span> skal udfyldes</p>
                <label for="name">Navn <span style="color:#d26d75;">*</span><br>
                    <input type="text" id="name" placeholder="Skriv dit navn">
                </label>

                <label for="cvr">CVR-nr.<br>
                    <input type="text" id="cvr" placeholder="Skriv dit CVR-nr.">
                </label>

                <label for="email">E-mail <span style="color:#d26d75;">*</span><br>
                    <input type="email" id="email" placeholder="Skriv din e-mail">
                </label>

                <label for="tlf">Telefon <span style="color:#d26d75;">*</span><br>
                    <input type="tel" id="tlf" placeholder="Skriv dit tlf.nr.">
                </label>
            </div>

            <a href="#" class="next-section">
                <i class="down"></i>
            </a>
        </section>


        <!-- SECTION 2 -->
        <section class="fullscreen flex-center section" id="section2">
            <a href="#" class="prev-section">
                <i class="up"></i>
            </a>



            <div class="row form-row">
                <div class="rowDesc">
                    Hvilke(n) platform(e) skal vi udvikle din app til?<br>
                    Vælg gerne flere
                </div>
                <br><br>
                <p>Platform</p>

                <label for="platform-1">
                    <div class="switch-row">
                        <div class="switch-border">
                            <div class="switch">
                                <input id="platform-1" type="checkbox" class="switch-input" />
                                <label for="platform-1" class="switch-label">Switch</label>
                            </div>
                        </div>
                        <span class="switch-text">iOS</span>
                    </div>
                </label>

                <label for="platform-2">
                    <div class="switch-row">
                        <div class="switch-border">
                            <div class="switch">
                                <input id="platform-2" type="checkbox" class="switch-input" />
                                <label for="platform-2" class="switch-label">Switch</label>
                            </div>
                        </div>
                        <span class="switch-text">Android</span>
                    </div>
                </label>
            </div>

            <a href="#" class="next-section">
                <i class="down"></i>
            </a>
        </section>


        <!-- SECTION 3 -->
        <section class="fullscreen flex-center section" id="section3">
            <a href="#" class="prev-section">
                <i class="up"></i>
            </a>


            <div class="row form-row">
                <div class="rowDesc">
                    Hvem kommer i sidste ende til at bruge appen?<br>
                    Vælg gerne flere
                </div>
                <br><br>
                <p>Slutbrugere</p>

                <label for="bruger-1">
                    <div class="switch-row">
                        <div class="switch-border">
                            <div class="switch">
                                <input id="bruger-1" type="checkbox" class="switch-input" />
                                <label for="bruger-1" class="switch-label">Switch</label>
                            </div>
                        </div>
                        <span class="switch-text">Kunder</span>
                    </div>
                </label>

                <label for="bruger-2">
                    <div class="switch-row">
                        <div class="switch-border">
                            <div class="switch">
                                <input id="bruger-2" type="checkbox" class="switch-input" />
                                <label for="bruger-2" class="switch-label">Switch</label>
                            </div>
                        </div>
                        <span class="switch-text">Medarbejdere</span>
                    </div>
                </label>

                <label for="bruger-3">
                    <div class="switch-row">
                        <div class="switch-border">
                            <div class="switch">
                                <input id="bruger-3" type="checkbox" class="switch-input" />
                                <label for="bruger-3" class="switch-label">Switch</label>
                            </div>
                        </div>
                        <span class="switch-text">Bestryrelse</span>
                    </div>
                </label>
            </div>


            <a href="#" class="next-section">
                <i class="down"></i>
            </a>
        </section>


        <!-- SECTION 4 -->
        <section class="fullscreen flex-center section" id="section4">
            <a href="#" class="prev-section">
                <i class="up"></i>
            </a>

            <br><br><br><br>
            <div class="row form-row">
                <div class="rowDesc">
                    Her kan du skrive noget om de specifikke features og krav som du har til appen, anden vigtig information eller vedhæfte en designmanual.
                </div>
                <br><br>
                <p>Yderligere info</p>
                <textarea placeholder="Valgfri tekst..."></textarea>


                <label class="fileLabel">
                    <svg style="width:24px;height:24px;margin-bottom: -6px;" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M9,16V10H5L12,3L19,10H15V16H9M5,20V18H19V20H5Z"/>
                    </svg>
                    Upload filer
                    <input type="file" name="files">
                </label>

                <button type="submit" id="submitForm">Send</button>
            </div>
        </section>

    </form>

    <div id="popupModal">
        <div class="row">
            <div class="formPopup" onclick="doNothing(e)">
                <!-- Confirm submission -->
                <div id="confirmSubmission">
                    <p>Er du <span class="purple">duper</span> sikker på <span class="green">indsendelsen</span> af din sjæl, ja?</p><br>
                    <button id="cancelFormSubmit">Tilbage</button> <button id="confirmFormSubmit">Send</button>
                </div>
                
                <!-- Confirmed submission -->
                <div id="confirmedSubmission">
                    <p>Tak for din <span class="green">henvendelse</span>!</p> <p>Vi har <span class="green">modtaget</span> dine oplysninger, og vi vender tilbage til dig inden for <span class="green">2-3 hverdage</span>.</p>
                    <button id="back2home">Tilbage til forsiden</button>
                </div>
            </div>
        </div>
    </div>

</div>