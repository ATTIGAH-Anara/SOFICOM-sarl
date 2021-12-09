<?php
    try{
        $bdd= new PDO('mysql:host=localhost;dbname=soficom','root','');
    }
    catch(Exception $e){
        die('Erreur :'.$e->getMessage());
    }

    if(isset($_POST['denomination_social'])){

        $req1=$bdd->prepare("INSERT INTO inscription_pm(denomination_social,addresse,BP,ville,quartier,NIF,email,tel1,RCCM,
                responsable_entite,tel2,email_perso1,responsable_frais,fonction,tel3,
                email_perso2)  
                VALUES(:denomination_social,:addresse,:BP,:ville,:quartier,:NIF,:email,:tel1,:RCCM,
                :responsable_entite,:tel2,:email_perso1,:responsable_frais,:fonction,:tel3,
                :email_perso2)");


        $req1->execute(array(
            'denomination_social'=>$_POST['denomination_social'],
            'addresse'           =>$_POST['addresse'],
            'BP'                 => $_POST['BP'],
            'ville'              =>$_POST['ville'],
            'quartier'           =>$_POST['quartier'],
            'NIF'                =>$_POST['NIF'],
            'email'              =>$_POST['email'],
            'tel1'               =>$_POST['tel1'],
            'RCCM'               =>$_POST['RCCM'],
            'responsable_entite' =>$_POST['responsable_entite'],
            'tel2'               =>$_POST['tel2'],
            'email_perso1'       =>$_POST['email_perso1'],
            'responsable_frais'  =>$_POST['responsable_frais'],
            'fonction'           =>$_POST['fonction'],
            'tel3'               =>$_POST['tel3'],
            'email_perso2'       =>$_POST['email_perso2']
        ));

        $req2=$bdd->prepare("INSERT INTO info_participants(nom,fonction,contact) VALUES(:nomp,:fonction,:contactp)");

        $req2->execute(array(
            'nomp'=>$_POST['nomprenom'],
            'fonction'=>$_POST['fonction'],
            'contactp'=>$_POST['contact']
        ));

        header('Location:index.php');

    }else{
        echo 'nooooooo';
    }

