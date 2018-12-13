

<div class= "container">
    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">
<h3>Approvisionner le produit <?php echo $produit_cible->nom_produit ?></h3>
</div>

	<div class="module-body">
    <form action= "<?php echo URL; ?>stock/approvisionnerproduit" method="POST" class="form-horizontal row-fluid">
		<div class="module-head">
        <h3>Repartissez votre approvisinnement sur différents entrepots</h3>
		</div>
			<br>
        
        	<div id='dynamicInput'>
            
            <div class="control-group"><label class="control-label">Choisir L'entrepot </label>
			<div class="controls">
            <select name="entrepot_choisi[]">
            <?php foreach ($entrepots as $entrepot) { ?>
            <?php if (isset($entrepot->nom_entrepot)) echo "<option value=".$entrepot->id_entrepot .">".$entrepot->nom_entrepot."</option>" ; ?>
            <?php } ?>
            </select>
			</div>
			</div>
			
            <div class="control-group"><label class="control-label">Quantité :</label>
			<div class="controls">
            <input type="text" name="quantite_entrepot[]" value="" />
			</div>
			</div>
			
			</div>
            
           
        
        
        
            <div class="control-group">
            <input type="hidden" name="id_produit" value="<?php echo $produit_cible->id_produit ?>" />
			</div>
			<div class="control-group">
            <input type="button" value="Utiliser un autre entrepot..." onclick="addInput('dynamicInput');" />
			</div>
			<div class="control-group">
            <input type="submit" name="valider_approvisionner_produit" value="Envoyer"/>
            <input type="reset" value="Annuler"/>
			</div>
			
            
        
    </form>
</div>
</div>
</div>
</div>
</div>
</div>

<script language="javascript">
    function addInput(divName)
    {
        var newElm=document.createElement('div');
        var str = "<br><div class='control-group'><label class='control-label'>Choisir L'entrepot </label>" ;
        str = str + '<div class="controls"><select name="entrepot_choisi[]">' ;
        str += '<?php foreach ($entrepots as $entrepot) { ?> <?php if (isset($entrepot->nom_entrepot)) echo "<option value=".$entrepot->id_entrepot .">".$entrepot->nom_entrepot."</option>" ; ?> <?php } ?>' ;
        //alert(str) ;
        str = str + "</select></div></div>" ;
        str = str + "" ;
        str = str + '<div class="control-group"><label class="control-label">Quantité :</label><div class="controls"> <input type="text" name="quantite_entrepot[]" value="" /></div></div><br><br>';
        newElm.innerHTML=str;
        document.getElementById(divName).appendChild(newElm);
    }
</script>

