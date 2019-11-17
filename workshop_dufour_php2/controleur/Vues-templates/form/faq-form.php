<!--html du formulaire d’ajout de questions faq-->

<!--attention action-->
<form name="question" method="POST" action="add_question.php">
    <div class="form-group">
        <label for="question">Question</label>
        <input type="text" name="question" class="form-control" id="question" placeholder="votre question" required/>   
    </div>
    <div class="form-group">
        <label for="answer">Réponse</label>
        <input type="text" name="answer" class="form-control" id="answer" placeholder="votre réponse" required/>   
    </div>            
    <button type="submit" name="envoyer"  class="btn btn-info ">Envoyer</button>
</form>