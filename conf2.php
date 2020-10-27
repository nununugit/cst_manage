<?php
        include 'database.php';
        $sql = "SELECT * FROM sort where done = 0 AND group_gid = 2";
            $stmt=$dbh->prepare($sql);
            $stmt->execute();
            $count = $stmt->rowCount();
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $data[]=$row;
            }
        if(isset($_POST['cony'])){
            $id = @$_POST['id'];
            
            $stmt = $dbh->prepare("UPDATE sort SET done=1 where id = :id");
            $stmt->execute([':id' => $id]);
            $stmt=$dbh->prepare($sql);
            $stmt->execute();
            header('Location: ./conf2.php');
        
        }

?>

<div class="container">
<h1>チーム2</h1>

<table border="1" width="500" cellspacing="0" cellpadding="5" bordercolor="#333333">

<tr>
<th bgcolor="#EE0000">No.</th>
<th bgcolor="#EE0000" width="150">チームid</th>
<th bgcolor="#EE0000" width="200"> ボタン</th>
</tr>

<?php foreach($data as $row1){ ?>         
<tr>
<td bgcolor="#99CC00" align="right" nowrap><?php echo htmlentities( $row1['id'], ENT_QUOTES, 'UTF-8');?></td>
<td bgcolor="#FFFFFF" valign="top" width="150"><?php echo htmlentities( $row1['group_gid'], ENT_QUOTES, 'UTF-8')?> </td>
<td bgcolor="#FFFFFF" valign="top" width="200">

<form action="conf2.php" method="POST">
            <input type="hidden" name='id' value= "<?=$row1['id']?>">
            <input type="submit" value="submit" name='cony'>
            </form>

    </td>
</tr>
            <?php }?>
            </table>

</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
