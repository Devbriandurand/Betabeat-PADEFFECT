<?php ob_start(); ?>
<h1>MON PROFIL</h1>

<?php //IMAGE AVATAR
	if (isset($_FILES['image']) && $_FILES['image']['error'] == 0)  
	{
	$error = 1;
	if ($_FILES['image']['size'] <= 2000000) 
	{
		$informationsImage = pathinfo($_FILES['image']['name']); //récupère les information sous form de tableau grace a pathinfo()
		$extensionImage = $informationsImage['extension'];
		$extensionArray = array('png', 'jpg', 'jpeg', 'gif');//Format image accepter

	if (in_array($extensionImage, $extensionArray)) 
		{
		$urlImg = 'public/uploads/' . time() .rand(). rand() . '.'.$extensionImage;
		 	move_uploaded_file($_FILES['image']['tmp_name'], $urlImg);
		 		$error = 0;
		}
	}
}
?>
    	<div class="blocAvatar">
        <h2 id="é">Avatar</h2>
<?php	
			if(isset($error) && $error == 0)
				{
					echo'<div class=containerImgAvatar><img id=imgSelect src="'.$urlImg.'" /></div>';
				} 
?>
			<form class="formAvatar" action="index.php?action=profil" method="POST" enctype="multipart/form-data">
				<table id="tableProfil">
					<tr>
						<td>
							<input id="buttonFile" type="file" name="image">
						</td>
					</tr>
					<tr>
						<td>
							<input id="buttonSend" type="submit">
						</td>
					</tr>
				</table>
			</form>
		</div>

    <div class="editor">
    <div id="editorKey"></div>
        <form id="editor">
            <label for="audio">Audio :</label>
                <input type="text" name="audio source" id="audio" value="">
            <label for="text">Text :</label>
                <input type="text" name="pad text" id="text" value="">
            <label for="color">Color :</label>
                <input type="text" name="pad color" id="color" value="">
                <input id="editorButt" type="submit" value="Validé">
    </div>

  	<div class="blocPad">
    <div class="row azerty">
      <div class="box A" data-code="82">A</div>
      <div class="box Z" data-code="84">Z</div>
      <div class="box E" data-code="89">E</div>
      <div class="box R" data-code="85">R</div>
      <div class="box T" data-code="85">T</div>
      <div class="box Y" data-code="85">Y</div>
      <div class="box U" data-code="85">U</div>
      <div class="box I" data-code="85">I</div>
      <div class="box O" data-code="85">O</div>
      <div class="box P" data-code="85">P</div>
    </div>
    <div class="row qsdfg">
      <div class="box Q" data-code="82">Q</div>
      <div class="box S" data-code="84">S</div>
      <div class="box D" data-code="89">D</div>
      <div class="box F" data-code="85">F</div>
      <div class="box G" data-code="85">G</div>
      <div class="box H" data-code="85">H</div>
      <div class="box J" data-code="85">J</div>
      <div class="box K" data-code="85">K</div>
      <div class="box L" data-code="85">L</div>
    </div>
    <div class="row wxcvb">
      <div class="box M" data-code="82">M</div>
      <div class="box W" data-code="84">W</div>
      <div class="box X" data-code="89">X</div>
      <div class="box C" data-code="85">C</div>
      <div class="box V" data-code="85">V</div>
      <div class="box B" data-code="85">B</div>
      <div class="box N" data-code="85">N</div>
    </div>
  </div>

<hr id="hrProfil">

<h2 class="h2Profil">Les dernières actus</h2>
    <div class="recapNews">
    <table id="tableProfil">
        <caption>News du jour</caption>
            <tr id="trProfil">
                <th id="thProfil">
                    Chapitre
                </th>
                <th id="thProfil">
                    Extrait
                </th>
                <th id="thProfil">
                    Date
                </th>
                <th id="thProfil">
                    Info
                </th>
            </tr>
        <?php foreach ($chapters as $chapter) : ?>
            <tr>
                <td class="tdAdminTitle" id="tdAdmin"><?= $chapter['title'] ?></td>
                <td id="tdAdmin"><?= $chapter['content'] ?></td>
                <td id="tdAdmin"><?= $chapter['creation_date_fr'] ?></td>
                <td id="tdAdmin">
                    <a id="lireLaSuiteChap" href="index.php">Lire la suite</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
	</div>
	

	<script src="./js/beat.js"></script> 
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
