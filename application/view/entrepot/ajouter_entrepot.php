<div class= "container">
    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">
    <h3>Ajouter un entrepôt</h3>
    </div>
    <div class="module-body">
    <form action= "<?php echo URL; ?>entrepot" method="POST" class="form-horizontal row-fluid">
        <div class="control-group">

            <label class="control-label" for="basicinput">Nom de l'entrepot</label>
            <div class="controls">
            <input type="text" name="nom_entrepot" required />
        </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="basicinput">L'adresse</label>
            <div class="controls">
            <input type="text" name="addresse_entrepot" required />
        </div>
        </div>            

        <div class="control-group"> 
            <input type="submit" name="valider_ajouter_entrepot" value="Envoyer"/>
            <input type="reset" value="Annuler"/>

        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>