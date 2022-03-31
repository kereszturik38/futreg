<div class="container text-center px-5 mx-auto">
    <h1>Futóverseny jelentkezési lap</h1>
    <div class="bg-light border border-primary">
        <div class="row row-lg px-5 mx-5">
            <div class="col container">
                <h2>Adatok</h2>
                <form action="index.php?page=regisztraciok" method="post">
                    <div class="form-group">
                        <label for="nev">Név:</label>
                        <input type="text" id="nev" name="nev" class="form-control" required maxlength="30" />
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required maxlength="50" />
                    </div>

                    <div class="form-group">
                        <label for="szuletes">Születési Idő:</label>
                        <input type="date" id="szuletes" name="szuletes" class="form-control" required />
                    </div>
                    <label>Nem:</label>
                    <fieldset id="nem" class="form-check">

                        <label class="form-check-label" for="ferfi">
                            Férfi
                        </label>
                        <input class="form-check-input" type="radio" name="nem" value="ferfi" id="ferfi">
                        <br>
                        <label class="form-check-label" for="no">
                            Nő
                        </label>
                        <input class="form-check-input" type="radio" name="nem" value="no" id="no">
                        <br>
                    </fieldset>
                    <input class="btn btn-primary" type="submit" value="Küldés">
                </form>
            </div>
            <div class="col container">
                <div class="d-block">
                    <h2>Fontos</h2>
                    <p>A versenyfelkészülés részeként olvassuk el alaposan a versenykiírást,Legyünk tisztában az alapvető információkkal: melyik nap,pontosan hol van a verseny,mikor van a rajt,milyen lesz az útvonal,mikor lehet átvenni a rajtszámot,mit tartalmaz a rajtcsomag,hol lesznek a frissítőállomások,mi lesz a kirakott frissítés.
                        Tervezzük meg,hogyan jutunk el a versenyre,mikor kell elindulni a biztonságos érkezéshez,hogy ne kelljen a rajt előtt kapkodni,legyen idő minden előkészületre,megfelelő bemelegítésre,ráhangolódásra.
                    </p>
                </div>

            </div>
            <div class="col container">
                <div class="bg-danger h-auto">
                    <h2>Start</h2>
                    <h2>17:00</h2>
                </div>

            </div>
        </div>

    </div>
</div>