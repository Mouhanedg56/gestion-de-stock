<div class= "container">
    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">

        <h3>Repartition du produit <?php echo $produit_cible->nom_produit ?> sur les entrepots correspondants</h3>
		<div>
        
        <?php foreach ($entrepots as $entrepot) { ?>
            <hr>
            <p>L'entrepot : <?php if (isset($entrepot->nom_entrepot)) echo $entrepot->nom_entrepot ; ?> </p>
            <p>La quantité dans l'entrepot : <?php if (isset($entrepot->quantite_reel)) echo $entrepot->quantite_reel ; ?></p>
			<hr>
            
        <?php } ?>
        
</div>
</div>
</div>
</div>
</div>
</div>
</div>