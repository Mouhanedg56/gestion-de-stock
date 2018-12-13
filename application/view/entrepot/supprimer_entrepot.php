<div class="module-head">
<h3>Liste des Entrepots</h3>
</div>
    <div class="module">
        <div class="module-body table">
			<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
            <thead>
            <tr>
                <th class="text-center">N°</th>
                <th class="text-center">Nom</th>
                <th class="text-center">Adresse</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                $compteur = 0;
                foreach ($entrepots as $entrepot) 
                { 
                    $compteur ++?>
                    <tr>
                        <td class="text-left"><?php echo $compteur; ?></td>
                        <td class="text-left"><?php echo $entrepot->nom_entrepot ; ?></td>
                        <td class="text-left"><?php echo $entrepot->addresse_entrepot ; ?></td>
                        <td class="text-left"><a href="<?php echo URL . 'entrepot/supprimerentrepot/' . $entrepot->id_entrepot; ?>">Supprimer</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        
                      </div>
     </div>