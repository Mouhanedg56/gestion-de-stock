

<div class= "container">
    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">
    <h3>Modifier Un Entrepot</h3>
    </div>
    <div class="module-body">
    <form action= "<?php echo URL; ?>entrepot/modifierentrepot" method="POST" class="form-horizontal row-fluid">
        
            
            <div class="control-group">
            <label class="control-label">Nom du entrepot</label>
            <div class="controls">
            <input type="text" name="nom_entrepot" value="<?php echo $entrepot_cible->nom_entrepot;?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <label class="control-label">Adresse</label>
            <div class="controls">
            <input type="text" name="addresse_entrepot" value="<?php echo $entrepot_cible->addresse_entrepot;?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <input type="hidden" name="id" value="<?php echo $entrepot_cible->id_entrepot; ?>" />
            </div>
            
            <div class="control-group">
            <input type="submit" name="valider_modifier" value="Modifier" />
            <input type="submit" name="annuler" value="Annuler" />
            </div>
            

        
    </form>
</div>
</div>
</div>
</div>
</div>
</div>