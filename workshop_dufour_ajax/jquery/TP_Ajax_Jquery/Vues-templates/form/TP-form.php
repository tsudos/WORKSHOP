<!--html du formulaire de verification de l'autocomplétion-->

<!--attention action-->

        <div class="form-group">
            <form name="suggestions" method="POST" action="suggestion.php">
                <fieldset>
                    <legend>suggestions</legend>
                        <p id="box">
                            <input type="text" name="recherche" class="form-control" id="chercher" placeholder="tapez une lettre !"/>
                        </p>
                        <p>
                            <button type="submit" name="chercher" class="btn btn-info ">Chercher</button>
                        </P>        
                </fieldset>
            </form>
        </div>