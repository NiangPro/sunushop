<?php

try {
   $db = new PDO("mysql:dbname=sunushop;host=localhost","root","");
} catch (PDOException $e) {
    die("Erreur:".$e->getMessage());
}


function login($email,$mdp){
    global $db;
    try {
       $req = $db->prepare("SELECT * FROM user WHERE email = :email AND mdp = :mdp");
       $req->execute([
        "email"=>$email,
        "mdp"=>$mdp
       ]);
       return $req->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        die("Erreur:".$e->getMessage());
    }
}

function ajoutUser($prenom,$nom,$tel,$adresse,$email,$mdp){
    global $db;
    try {
        $req = $db->prepare("INSERT INTO user(prenom,nom,tel,adresse,email,mdp) 
        VALUES (:prenom,:nom,:tel,:adresse,:email,:mdp)");
        return $req->execute([
        "prenom"=>$prenom,
        "nom"=>$nom,
        "tel"=>$tel,
        "adresse"=>$adresse,
        "email"=>$email,
        "mdp"=>$mdp
        ]);
    } catch (PDOException $e) {
        die("Erreur:".$e->getMessage());
    }
}


//fonction qui permet d'afficher tous les clients
function afficheAllClient(){
    global $db;
    try {
        $req = $db->prepare("SELECT * FROM user WHERE role =:role");
        $req->execute(["role" => "client"]);

        return $req->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        die("Erreur:".$e->getMessage());
    }
}



//fonction qui permet d'afficher tous les categories
function afficheAllCategorie(){
    global $db;
    try {
        $req = $db->prepare("SELECT * FROM categorie");
        $req->execute();

        return $req->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        die("Erreur:".$e->getMessage());
    }
}

// function produitEquivalentCategorie($nom){
//     global $db;
//     try {
//         $req = $db->prepare("SELECT * FROM categorie WHERE nomCategorie:nom");
//         $req->execute([
//         "nom"=>$nom
//         ]);

//         return $req->fetchAll(PDO::FETCH_OBJ);
//     } catch (PDOException $e) {
//         die("Erreur:".$e->getMessage());
//     }
// }


//fonction qui permet de selection un categorie par son id
function getCategorieById($id){
    global $db;
    try {
        $req = $db->prepare("SELECT * FROM categorie WHERE id=:id");
        $req->execute([
            "id"=>$id
        ]);

        return $req->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur ".$th->getMessage());
    }
}


//fonction qui permet d'editer un categorie par son id
function editCategorie($id,$nomCategorie){
    global $db;
    try {
        $req = $db->prepare("UPDATE categorie SET nomCategorie=:nomCategorie WHERE id=:id");
        return $req->execute([
            "id"=>$id,
            "nomCategorie"=>$nomCategorie
        ]);
    } catch (PDOException $e) {
        die("Erreur ".$e->getMessage());
    }
}

//fonction qui permet de supprimer un categorie

function deletecategorie($id){
    global $db;
    try {
       $req = $db->prepare("DELETE FROM categorie WHERE id=:id");
       return $req->execute([
       "id"=>$id
       ]);
    } catch (PDOException $e) {
        die("Erreur ".$e->getMessage());
    }
}

//fonction qui permet de supprimer un produit

function deleteProduit($id){
    global $db;
    try {
       $req = $db->prepare("DELETE FROM produit WHERE id=:id");
       return $req->execute([
       "id"=>$id
       ]);
    } catch (PDOException $e) {
        die("Erreur ".$e->getMessage());
    }
}

//fonction qui permet d'afficher tous les categories
function ajoutCategorie($nomCategorie){
    global $db;
    try {
       $req = $db->prepare("INSERT INTO categorie(nomCategorie) VALUES (:nomCategorie)");
        return $req->execute([
        "nomCategorie"=>$nomCategorie
       ]);
    }  catch (PDOException $e) {
        die("Erreur:".$e->getMessage());
    }
}


//fonction qui permet d'afficher tous les produits
function afficheAllProduit(){
    global $db;
    try {
        $req = $db->prepare("SELECT p.id as id,p.nom as nom, image, c.nomCategorie as nomcategorie,prix,description,qStock
        FROM produit p,categorie c
        WHERE p.idcategorie = c.id
        ");
        $req->execute();

        return $req->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        die("Erreur:".$e->getMessage());
    }
}

//fonction qui permet d'afficher tous les produits equivalents
// function produitEquivalents(){
//     global $db;
//     try {
//         $req = $db->prepare("SELECT p.id as id,p.nom as nom, image, c.nomCategorie as nomcategorie,prix,description,qStock
//         FROM produit p,categorie c
//         WHERE p.idcategorie = c.id AND id=:id
//         ");
//         $req->execute();

//         return $req->fetchAll(PDO::FETCH_OBJ);
//     } catch (PDOException $e) {
//         die("Erreur:".$e->getMessage());
//     }
// }

//fonction qui permet d'afficher tous les produits visites
function afficheAllProduitVisite(){
    global $db;
    try {
        $req = $db->prepare("SELECT * FROM produit WHERE visite = 1");
        $req->execute();

        return $req->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        die("Erreur:".$e->getMessage());
    }
}

//fonction qui permet d'ajouter un plus au niveau du quantite
function updateQuantite($id,$iduser, $type){
    global $db;
    try {
        $req = $db->prepare("UPDATE panier SET quantite = quantite + :quantite WHERE idProduit=:id AND iduser=:id");
        return $req->execute([
            "id"=>$id,
            "id"=>$iduser,
            "quantite"=> $type == "add"? 1 : -1,
            
        ]);
    } catch (PDOException $e) {
        die("Erreur:".$e->getMessage());
    }
}
//fonction qui permet de selection un categorie par son id
function getProduitById($id){
    global $db;
    try {
        $req = $db->prepare("SELECT * FROM produit WHERE id=:id");
        $req->execute([
            "id"=>$id
        ]);

        return $req->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur ".$th->getMessage());
    }
}

function getProduitPanierByIdProduit($id){
    global $db;
    try {
        $req = $db->prepare("SELECT p.id as id,nom, prix,image, description, qStock, quantite
         FROM produit p , panier pan 
         WHERE pan.idProduit=:id AND p.id = :id");
        $req->execute([
            "id"=>$id,
        ]);

        return $req->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur ".$th->getMessage());
    }
}

function getProduitByIdCategorie($id){
    global $db;
    try {
        $req = $db->prepare("SELECT * FROM produit WHERE idcategorie=:id");
        $req->execute([
            "id"=>$id
        ]);

        return $req->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur ".$th->getMessage());
    }
}
//fonction qui permet d'editer un produit par son id
function editProduit($id,$nom,$prix,$description,$qStock,$idcategorie,$image){
    global $db;
    try {
        $req = $db->prepare("UPDATE produit SET nom=:nom,prix=:prix,description=:description,qStock=:qStock,idcategorie=:idcategorie,image=:image WHERE id=:id");
        return $req->execute([
            "id"=>$id,
            "nom"=>$nom,
            "prix"=>$prix,
            "description"=>$description,
            "qStock"=>$qStock,
            "idcategorie"=>$idcategorie,
            "image"=>$image
        ]);
    } catch (PDOException $e) {
        die("Erreur ".$e->getMessage());
    }
}


function ajoutProduit($nom,$prix,$description,$qStock,$idcategorie, $image){
    global $db;
    try {
        $req = $db->prepare("INSERT INTO produit(nom,prix,description,qStock,idcategorie,image) VALUES (:nom,:prix,:description,:qStock,:idcategorie,:image)");
        return $req->execute([
         "nom"=>$nom,
         "prix"=>$prix,
         "description"=>$description,
         "qStock"=>$qStock,
         "idcategorie"=>$idcategorie,
         "image"=>$image
        ]);
    } catch (PDOException $e) {
        die("Erreur:".$e->getMessage());
    }
}


//fonction qui permet d'ajouter un produit  dans le panier
function ajoutPanier($idUser,$idProduit,$quantite){
    global $db;
    try {
       $req = $db->prepare("INSERT INTO panier(idUser,idProduit,quantite) VALUES (:idUser,:idProduit,:quantite)");
        return $req->execute([
        "idUser"=>$idUser,
        "idProduit"=>$idProduit,
        "quantite"=>$quantite
       ]);
    }  catch (PDOException $e) {
        die("Erreur:".$e->getMessage());
    }
}


function getPanierByUser($id){
    global $db;
    try {
        $req = $db->prepare("SELECT pa.id as id,pr.image as image ,pr.prix,qStock
        FROM panier pa,produit pr,user u
        WHERE pa.idUser=:id AND pr.id = pa.idProduit AND u.id = pa.idUser");
        $req->execute([
            "id"=>$id
        ]);

        return $req->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur ".$th->getMessage());
    }
}


function visibilite($id){
  global $db;
  try {
   $req = $db->prepare("UPDATE produit SET visite=:visite WHERE id=:id");
   $req->execute([
    "id"=>$id,
    "visite"=>1,
   ]);
  } catch (PDOException $th) {
    die("Erreur ".$th->getMessage());
}
}

function afficheAllPanier(){
    global $db;
    try {
        $req = $db->prepare("SELECT *
         FROM produit p , panier pa , user u 
        WHERE pa.idproduit = p.id AND pa.iduser = u.id
        ");
        $req->execute();

        return $req->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur ".$th->getMessage());
    }
}

function deletePanier($id){
    global $db;
    try {
       $req = $db->prepare("DELETE FROM panier WHERE id=:id");
       return $req->execute([
       "id"=>$id
       ]);
    } catch (PDOException $e) {
        die("Erreur ".$e->getMessage());
    }
}


//fonction qui permet de rechercher

function search($nom){
    global $db;
    try {
        $req = $db->prepare("SELECT * FROM produit WHERE nom :nom ");
        $req->execute([
          "nom"=>$nom
        ]);
        
        return $req->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        die("Erreur:".$e->getMessage());
    }
}


// function getButtonValue($qStock){
//     global $db;
//     try {
//         $req = $db->prepare("SELECT * FROM produit WHERE qStock =:qStock ");
//         $req->execute([
//           "qStock"=>$qStock
//         ]);
        
//         return $req->fetchAll(PDO::FETCH_OBJ);
//     } catch (PDOException $e) {
//         die("Erreur:".$e->getMessage());
//     }
// }