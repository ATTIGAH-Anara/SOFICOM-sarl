<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche de choix</title>
    <link rel="stylesheet" media="screen and (max-width:800px)" href="style.css">

    <!-- Style -->
    <style>
        body{
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        
            /* background-color:greenyellow; */
        }
        .p_header{
            font-weight:900;
        }
        
        table{
            width: 100%;
            border-collapse: collapse;
        }
        td, th{
            padding: 5px;
            border: 1px solid black;
        }
        th{
            background-color: grey;
        }
        input{
            width: 95%;
            display: inline-block;
           
        }
        .right{
            text-align: right;
        }
        .center{
            text-align: center;
            font-weight:bolder;
        }
        img{
            width: 15px;
            height: 15px;
        } 
    </style>
</head>
<body>
    
             <!------- the header -------->
<header>
    <p class="p_header">
        Société pour l'optimisation Fiscale et Comptable
    </p>
    <p>
        <strong>GIME FISCAL :</strong> REEL AVEC TVA _ <strong>NIF</strong> : 1001426364 _ <strong>N°RCCM</strong>: TG-LOM 2019 B 824
    </p>
    <hr>
</header>

            <!-------- Table of information on the socity -------->

<h1 class="center">
    FICHE DE CHOIX POUR UNE DEMANDE DE SERVICES
</h1>

<form action="POST">

    <table>
        <tr>
            <th rowspan="4"><strong>INFORMATION SUR VOTRE SOCIETE</strong></th>
            <td>a. RAISON SOCIALE</td>
            <td>
                <label for="raison"></label><input type="text" name="raison">
            </td>
        </tr>
        <tr>
            <td>b. SIEGE SOCIAL/BUREAU</td>
            <td>
                <label for="siege"></label><input type="text" name="siege">
            </td>
        </tr>
        <tr>
            <td>c. CONTACTS</td>
            <td>
                <label for="contact"></label><input type="text" name="contact">
            </td>
        </tr>
        <tr>
            <td>d. ACTIVITES</td>
            <td>
                <label for="activite"></label><input type="text" name="activite">
            </td>
        </tr>

    </table>
    <br>

    <!------------ service offer table ------------>

    <table>
        <tr>
            <th> OFFRES_SERVICES</th>
            <th>CHOIX</th>
        </tr>
        <tr>
            <td>1. ASSISTANCE EN CREATION D'ENTITE</td>
            <td>
                <input type="checkbox" name="choix1">
            </td>
        </tr>
        <tr>
            <td>2. ASSISTANCE COMPTABLE & FISCALE</td>
            <td>
                <input type="checkbox" name="choix2">
            </td>
        </tr>
        <tr>
            <td>3. TENUE COMPLETE DE LA COMPTABILITE</td>
            <td>
                <input type="checkbox" name="choix3">
            </td>
        </tr>
        <tr>
            <td>4. AUDIT & REVISIONS COMPTABLES</td>
            <td>
                <input type="checkbox" name="choix4">
            </td>
        </tr>
        <tr>
            <td>5. MISSION DE CONTROLE PERIODIQUE DES FINANCES</td>
            <td>
                <input type="checkbox" name="choix5">
            </td>
        </tr>
        <tr>
            <td>6. MISSION D'INVENTAIRE DES STOCKS</td>
            <td>
                <input type="checkbox" name="choix6">
            </td>
        </tr>
        <tr>
            <td>7. ELABORATION DE PLAN D'AFFAIRES</td>
            <td>
                <input type="checkbox" name="choix7">
            </td>
        </tr>
        <tr>
            <td>8. ELABORATION DE MANUEL DE PROCEDURES</td>
            <td>
                <input type="checkbox" name="choix8">
            </td>
        </tr>
        <tr>
            <td>9. ELABORATION & CERTIFICATION DES ETATS FINANCIERS</td>
            <td>
                <input type="checkbox" name="choix9">
            </td>
        </tr>
        <tr>
            <td>10. EXTERNALISATION DE LA PAIE & GRH</td>
            <td>
                <input type="checkbox" name="choix10">
            </td>
        </tr>
        <tr>
            <td>11. SERVICE DE RECRUTEMENT DE PERSONNEL</td>
            <td>
                <input type="checkbox" name="choix11">
            </td>
        </tr>
        <tr>
            <td>
                12. RENFORCEMENT DE CAPACITE DU PERSONNEL EN : <input type="text" name="renforcement">
            </td>
            <td>
                <input type="checkbox" name="choix12">
            </td>
        </tr>
        <tr>
            <td>
                AUTRES <input type="text" name="autre">
            </td>
            <td>
                <input type="checkbox" name="choix13">
            </td>
        </tr>
    </table>

</form>

<h5 class="right">FAITES-NOUS CONFIANCE ! POUR UNE GESTION PERFORMANTE DE VOTRE SOCIETE</h5>

<!----------- The footer ------------->

<footer>
    <hr>
    <p>
        AUDIT-EXPERTISE COMPTABLE-FISCALITE-ELABORATION ET CERTIFICATION DES ETATS FINANCIERS-CONSEILS EN GESTION-
        ASSISTANCE COMPTABLE ET FISCALE CONTROLE-FOURNITURE DE LOGICIELS-INVENTAIRE-RECRUTEMENT-FORMATION  
        <strong> Siège :</strong> sanguéra <strong>E-MAIL :</strong> soficomcabinet17sarl@gmail.com 
        <img src="./images/contacts.png" alt="télephone-fixe"> 92 37 55 13/ 99 19 88 20
    </p>
</footer>
    
</body>
</html>