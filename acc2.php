<! DOCTYPE html> <html>
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 <link rel="stylesheet" href="htmlmenu.css">

 <body>
   <form action="acc2.php" method="post">
    
 <input type="date" id="start" name="t"
       value=''
       min="2022-01-01" max="2022-12-31"  style="margin-left: 170px;">
<select name="cren" id="id-creneau" >
    <option value="">--Choisissez le cr&eacute;neau--</option>
    <option value="8h10h">8h - 10h</option>
    <option value="10h12h">10h - 12h</option>
    <option value="14h16h">14h - 16h</option>
    <option value="16h18h">16h - 18h</option>
   
</select>
<input type="submit" value="enter" name="Sub" style="background: #135896;color: white;margin-left: 5px;" />
<?php
$date="";
$cren="";

if(isset($_POST["Sub"])){
  $cren = $_POST['cren'];
$date = $_POST['t'];
if(empty($cren)){
        echo '<body onLoad="alert(\'Veuillez saisir un cr&eacute;neau!\')">';

    echo '<meta http-equiv="refresh" content="0;URL=acc2.php">';
  }
if(empty($date)){
        echo '<body onLoad="alert(\'Veuillez saisir une date!\')">';
  
    echo '<meta http-equiv="refresh" content="0;URL=acc2.php">';
  }


}
?></form>
  <h2 style="color: black;text-align:center">Liste &eacute;tudiants ING2 Info</h2>
  <h4 style="color: black;margin-left: 100px"></h4>
  <br>
  <h3 style="color: black;text-align:center">Date :  <?php echo $date ; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Créneau : <?php echo $cren ; ?></h3>
<div class="container">
<div class="row">
<nav class="navbar navbar-vertical-left">
 <ul class="nav navbar-nav">
 <li>
 <a href="acc.php" class="one">
 <i class="fa fa-fw fa-lg fa-users" style="font-size:24px"></i> 
 <span>ING 1</span>
 </a>
 </li>
 <li>
 <a href="acc2.php" class="two">
 <i class="fa fa-fw fa-lg fa-users" style="font-size:24px"></i> 
 <span>ING 2</span>
 </a>
 </li>
 <li>
 <a href="acc3.php" class="tree">
 <i class="fa fa-fw fa-lg fa-users" style="font-size:24px"></i> 
 <span>ING 3</span>
 </a>
 </li>
 <li>
 <a href="#" class="for">
 <i class="fa fa-bar-chart" style="font-size:24px"></i> 
 <span>Statistiques</span>
 </a>
 </li>
 <li>
 <a href="acc4.php" class="five">
 <i class="fa fa-fw fa-lg fa-cog" style="font-size:24px"></i> 
 <span>Parametres</span>
 </a>
 </li>
 <li>
 <a href="#" class="six">
 <i class="fa fa-fw fa-lg fa-sign-out" style="font-size:25px"></i> <span>Logout</span>
 
 </a>
 </li>
 </ul>
 </nav>

</div>
</div>
<section style="margin-left: 160px;margin-top: 130px;width: 85%"><link rel="stylesheet" href="htmlgroup.css">
  <!--for demo wrap-->
  <h1></h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0" >
      <thead >
        <tr >
          <th><strong>Nom</strong></th>
          <th><strong>Pr&eacute;nom</strong></th>
          <th><strong>Pr&eacute;sence</strong></th>
          
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content" style="height: 410px;">
    <table cellpadding="0" cellspacing="0" border="0" style=" background: -webkit-linear-gradient(left, darkblue, blue);
  background: linear-gradient(to right, white, white);">
      <tbody >



        
          <tr>

 <td><form action="acc.php" method="post"><?php
$link = mysqli_connect("localhost","root","","absence");

 $select1 = mysqli_query($link, "SELECT nom,prenom FROM etudiant where niveau='ing2'");
$data1 = mysqli_fetch_array($select1);
$nom=$data1['nom'];
echo $nom;
   ?></td>
 <td><?php  echo $data1['prenom'];
 $prenom=$data1['prenom']; ?></td>
<td>
  <?php
$select2 = mysqli_query($link, "SELECT * FROM abs where prenom='$prenom' && nom='$nom' && heure='$cren' && date='$date'");
if ($data2 = mysqli_fetch_array($select2)){ echo 'oui'; }?>
</td>



 </tr>
<?php
while($data1 = mysqli_fetch_assoc($select1)){ ?>  
 <tr>
 <td><?php echo $data1['nom']; 
 $nom=$data1['nom'];?></td>
<td><?php  echo $data1['prenom'];
$prenom=$data1['prenom']; ?></td>

<td>
<?php
$select2 = mysqli_query($link, "SELECT * FROM abs where prenom='$prenom' && nom='$nom' && heure='$cren' && date='$date'");
if ($data2 = mysqli_fetch_array($select2)){ echo 'oui'; }?>  </td>   

</tr>

 <?php } ?>
        

  </tbody>
    </table>
  </div>
</section></form>
</body>
</html>
