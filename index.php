<!DOCTYPE html>
<html lang= »fr »>
<head>
    <meta charset= »UTF-8 »>
    <meta name= »viewport » content= »width=device-width, initial-scale=1.0 »>
    <title>Formulaire</title>
    <style>
        Table {
            Border-collapse : collapse ;
            Width : 100% ;
        }
        Th, td {
            Border : 1px solid black ;
            Padding : 8px ;
            Text-align : left ;
        }
        Th {
            Background-color : #f2f2f2 ;
        }
        Tr :nth-child(even) {
            Background-color : #f2f2f2 ;
        }
    </style>
</head>
<body>
   
 
    <?php
    Session_start() ;
    $name=$_POST['name'] ;
    $immatriculation=$_POST['immatriculation'] ;
    $maison =$_POST['maison'] ;
    $type =$_POST['type'] ;
    $couleur =$_POST['couleur'] ;
    $domaine=$_POST['domaine'] ;
    $Origine=$_POST['Origine'] ;
    $new_entry = array($name, $immatriculation, $maison, $type, $couleur, $domaine, $Origine) ;
    If(isset($_SESSION['entries'])){
        Array_push($_SESSION['entries'], $new_entry) ;
    }else{
        $_SESSION['entries'] = array($new_entry) ;
    }
    ?>
 
    <h2>Récapitulatif des données saisies :</h2>
    <table>
        <tr>
            <th>Nom</th>
            <th>immatriculation</th>
            <th>Type</th>
            <th>Maison</th>
            <th>couleur</th>
            <th>domaine</th>
            <th>Origine</th>
        </tr>
        <?php foreach($_SESSION['entries'] as $entry) : ?>
        <tr>
            
            <td><?php echo $entry[0] ; ?></td>
        
        
            
            <td><?php echo $entry[1] ; ?></td>
        
        
            
            <td><?php echo $entry[2] ; ?></td>
        
        
            
            <td><?php echo $entry[3] ; ?></td>
        
        
            
            <td><?php echo $entry[4] ; ?></td>
        
        
            
            <td><?php echo $entry[5] ; ?></td>
        
        
            
            <td><?php echo $entry[6] ; ?></td>
        </tr>
        <?php endforeach ; ?>
    </table>
    <form action= "aubi.php" method= "post">

    <br><br>
        <button type= »submit »> Plus de voiture</button>
    
    </form>
 
</body>
</html>
