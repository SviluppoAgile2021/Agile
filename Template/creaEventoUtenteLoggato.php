<section id="booking-section" class="booking-section bg-gray-light sec-ptb-100 clearfix">
    <div class="container">
        <div class="row">

            <!-- booking-content-wrapper - start -->
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="booking-content-wrapper">

                    <!-- billing-info - start -->
                    <div class="billing-info mb-50">

                        <!-- section-title - start -->
                        <div class="section-title mb-30">
                            <h2 class="big-title">Evento :</h2>
                        </div>
                        <!-- section-title - end -->

                        <!-- billing-form - start -->
                        <div class="billing-form form-wrapper">
                            <form action="../Php/creaEventoController.php" method="post">
                                <label for="fname"><strong>Nome dell'evento</strong> :</label>
                                <div class="form-item">
                                    <input type="text" id="fname" name="nomeEvento" placeholder="Nome dell'evento" required>
                                </div>
                                <br>
                                <label> <strong>Luogo dell'evento :</strong></label>
                                <div class="form-item">
                                    <select class="country-select" name="luogo" id="luogo" required>
                                        <?php include("../Php/stampaLuoghi.php"); ?>
                                    </select>
                                </div>
                                <label><strong> Data :</strong></label>
                                <div class="form-item">
                                    <input type="date" id="lname" name="data" required>
                                </div>
                                <label><strong> Capienza :</strong></label>
                                <div class="form-item">
                                    <input type="number" id="capienza" name="capienza" required>
                                </div>
                                <label><strong> Genere di evento :</strong></label>
                                <div class="form-item">
                                    <select class="country-select" name="genere" id="genere" required>
                                        <?php include("../Php/stampaGeneri.php"); ?>
                                    </select>
                                </div>
                                <label><strong> Prezzo di entrata :</strong></label>
                                <div class="form-item">
                                    <input type="number" id="prezzo" name="prezzo" required>
                                </div>
                                <label><strong> Se l'evento è un evento formale indicare si :</strong></label>
                                <div class="form-item">
                                    <select class="country-select"  name="formale" id="formale" required>
                                        <option value="si">Si</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <label><strong> Se l'evento è in offerta indicare si :</strong></label>
                                <div class="form-item">
                                    <select class="country-select"  name="offerta" id="offerta" required>
                                        <option value="si">Si</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <label><strong> 1 Admin supplementare (opzionale) :</strong></label>
                                <div class="form-item">
                                    <select class="country-select"  name="admin1" id="admin1" required>
                                        <option value="-1" selected> (nessuno) </option>
                                        <?php include("../Php/stampaUtentiG.php"); ?>
                                    </select>
                                </div>
                                <label><strong> 2 Admin supplementare (opzionale) :</strong></label>
                                <div class="form-item">
                                    <select class="country-select"  name="admin2" id="admin2" required>
                                        <option value="-1" selected> (nessuno) </option>
                                        <?php include("../Php/stampaUtentiG.php"); ?>
                                    </select>
                                </div>
                                <label><strong> 3 Admin supplementare (opzionale) :</strong></label>
                                <div class="form-item">
                                    <select class="country-select"  name="admin3" id="admin3" required>
                                        <option value="-1" selected> (nessuno) </option>
                                        <?php include("../Php/stampaUtentiG.php"); ?>
                                    </select>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="custom-btn">
                                        Conferma
                                    </button>
                                </div>

                            </form>
                        </div>
                        <!-- billing-form - end -->

                    </div>
                    <!-- billing-info - end -->

                </div>
            </div>
            <!-- booking-content-wrapper - end -->
        </div>
    </div>
</section>