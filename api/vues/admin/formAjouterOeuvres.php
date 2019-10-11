<div class="contenu-form admin">
    <a href="/art-pub-mtl/api/oeuvreAdmin">Retour à la liste</a>
    <h1>Formulaire ajouter une oeuvre</h1>
<<<<<<< HEAD
    <form action="/art-pub-mtl/api/oeuvreAdmin/ajouter/insert" method="POST" enctype="multipart/form-data">
=======
    <form action="/art-pub-mtl/api/oeuvreAdmin/ajouter/insert" method="POST">
>>>>>>> 147cffc67d49fa43239b1724230226dfcc829926
        <fieldset>
            <legend>Caractéristiques principales :</legend>
            Titre : <input type="text" name="titre" />
            Dimension (m) : <input type="text" name="dimension" />
            Matériel (français) : <input type="text" name="materiaux_francais" />
            Material (english) : <input type="text" name="materiaux_anglais" />
            Technique (français) : <input type="text" name="technique_francais" />
            Technical (english) : <input type="text" name="technique_anglais" />
            Support:
            <select name="id_support">
                <option value="choix">Choisir un type de support</option>
                <?php 
                    if(!empty($liste_support)){
                        foreach($liste_support as $type_support){
<<<<<<< HEAD
                            echo "<option value='" . $type_support['id_support'] . "'> " . $type_support['nom_francais']. "</option>";
=======
                            echo "<option value='" . $type_support['id_support'] . "'> " . $type_support['nom_francais'] . " - " . $type_support['nom_anglais'] . "</option>";
>>>>>>> 147cffc67d49fa43239b1724230226dfcc829926
                        }
                    }
                ?>
            </select>            
            Support (français) : <input type="text" name="support_nom_francais" />
            Support (english) : <input type="text" name="support_nom_anglais" />

            Description (français) :
            <textarea rows="4" cols="50" name="description"></textarea>
            Description (english) :
            <textarea rows="4" cols="50" name="description_anglais"></textarea>
            Catégorie :
            <select name="id_categorie">
                <option value="choix">Choisir une catégorie</option>                
                <?php 
                    if(!empty($liste_categorie)){
                        foreach($liste_categorie as $categorie){
<<<<<<< HEAD
                            echo "<option value='" . $categorie['id_categorie'] . "'> " . $categorie['nom_francais']."</option>";
=======
                            echo "<option value='" . $categorie['id_categorie'] . "'> " . $categorie['nom_francais'] . " - " . $categorie['nom_anglais'] . "</option>";
>>>>>>> 147cffc67d49fa43239b1724230226dfcc829926
                        }
                    }
                ?>
            </select>
        </fieldset>
        <fieldset>
            <legend>Artiste :</legend>
<<<<<<< HEAD
            <!-- <div class="chercherForm">
                <i class="fas fa-search"></i>
                <input type="search" placeholder="Chercher une artiste" name="chercher_artiste">
            </div>
            ou -->
=======
            <div class="chercherForm">
                <i class="fas fa-search"></i>
                <input type="search" placeholder="Chercher une artiste" name="chercher_artiste">
            </div>
            ou
>>>>>>> 147cffc67d49fa43239b1724230226dfcc829926
            <select name="id_artiste">
                <option value="choix">Choisir un artiste</option>
                <?php 
                    if(!empty($liste_artiste)){
                        foreach($liste_artiste as $artiste){
<<<<<<< HEAD
                            echo "<option value='" . $artiste['id_artiste'] . "'> " . ucfirst(mb_strtolower($artiste['nom'], 'UTF-8')) . " " . ucfirst(mb_strtolower($artiste['prenom'], 'UTF-8')) . " " . ucfirst(mb_strtolower($artiste['nom_collectif'], 'UTF-8')) . "</option>";
=======
                            echo "<option value='" . $artiste['id_artiste'] . "'> " . $artiste['nom'] . " " . $artiste['prenom'] . " " . $artiste['nom_collectif'] . "</option>";
>>>>>>> 147cffc67d49fa43239b1724230226dfcc829926
                        }
                    }
                ?>
            </select>
        </fieldset>
        <fieldset>
            <legend>Endroit :</legend>
            Parc : <input type="text" name="parc" />
            Batiment : <input type="text" name="batiment" />
            Adresse : <input type="text" name="adresse" />
            Latitude : <input type="text" name="coordonnee_latitude" />
            Longitude : <input type="text" name="coordonnee_longitude" />
            Arrondissement :
            <select name="arrondissement">
                <option value="choix">Choisir un arrondissement</option>                
                <?php 
                    if(!empty($liste_arrondissement)){
                        foreach($liste_arrondissement as $arrondissement){
<<<<<<< HEAD
                            echo "<option value='" . $arrondissement['id_arrondissement'] . "'> " . $arrondissement['nom_arrondissement'] . "</option>";
=======
                            echo "<option value='" . $arrondissement['id_arrondissement'] . "'> " . $arrondissement['nom'] . "</option>";
>>>>>>> 147cffc67d49fa43239b1724230226dfcc829926
                        }
                    }
                ?>
            </select>
        </fieldset>
            <!--Télécharger une image-->
<<<<<<< HEAD
        <!-- <fieldset>
            <legend>Image :</legend>
            <input type="hidden" name="MAX_FILE_SIZE" value="200000" />
            <input name="uploadedfile" type="file" />
        </fieldset> -->
=======
        <fieldset>
            <legend>Image :</legend>
            <input type="hidden" name="MAX_FILE_SIZE" value="200000" />
            <input name="uploadedfile" type="file" />
        </fieldset>
>>>>>>> 147cffc67d49fa43239b1724230226dfcc829926
            <!--Fin Télécharger une image-->

            <input type="hidden" name="action" value=''/>
            <input type="submit" value="Ajouter"/>
        <div>
        <?php

        if($msgErreur != ""){
            echo $msgErreur;
        }
        ?>
        </div>            
    </form>
    <?php
    include "VuePiedAdmin.php";
    ?>    
</div>

