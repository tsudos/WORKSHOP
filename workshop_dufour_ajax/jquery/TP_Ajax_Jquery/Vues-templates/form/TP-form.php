<!--html du formulaire de verification de l'autocomplétion-->

<!--attention action-->

        <div class="form-group">
            <form name="suggestions" method="post" action="suggestion.php">
                <fieldset>
                    <legend>suggestions</legend>
                        <p id="box">
                            <input type="text" name="recherche" class="form-control" id="auto" autocomplete="on"/>
                        </p>
                        <div id="results">
                        </div>
<!--                         <p>
                            <input type="submit" name="Chercher" value="Chercher" class="btn btn-info "/>
                        </P>      -->   
                </fieldset>
            </form>
        </div>