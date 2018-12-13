<div class= "container">
    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">
<h3>Sortir le produit <?php echo $produit_cible->nom_produit ?></h3>
</div>
<br>
	<div class="module-body">
    <form action= "<?php echo URL; ?>stock/sortirproduit" method="POST" class="form-horizontal row-fluid">
	<div class="module-head">
        <h3>Sortir du stock des entrepots correspondants</h3>
        </div>
        <?php foreach ($entrepots as $entrepot) { ?>
            <div class="module-head">
            <h3> L'entrepot : <?php if (isset($entrepot->nom_entrepot)) echo $entrepot->nom_entrepot ; ?>,
            La quantité dans l'entrepot : <?php if (isset($entrepot->quantite_reel)) echo $entrepot->quantite_reel ; ?></h3>
			</div>
            
			<div class="control-group">
            <label class="control-label">Quantité à sortir :</label>
			<div class="controls">
            <input type="text" name="quantite_entrepot[]" value="0"  />
			</div>
			</div>
			
			<div class="control-group">
			<label class="control-label">Type sortie :</label>
			<div class="controls">
            <input type="text" name="type_sortie[]" value=""  />
			</div>
			</div>
			
			<div class="control-group">
            <input type="hidden" name="entrepot_choisi[]" value="<?php echo $entrepot->id_entrepot ; ?>" />
			</div>
            
        <?php } ?>
        
            <div class="control-group">
            <input type="hidden" name="id_produit" value="<?php echo $produit_cible->id_produit ?>" />
			</div>
			
			<div class="control-group">
            <input type="submit" name="valider_sortir_produit" value="Envoyer"/>
            <input type="reset" value="Annuler"/>
			</div>
			</div>
            
        
    </form>
</div>
</div>
</div>
</div>
</div>