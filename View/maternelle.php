<?php
require("../Model/connBDD.php");
global $db;
require("templateHead.html"); 
?>


<body>

	<div class="contenu">
	<?php 
	require("../Model/model.php");
	$req = getEcoles('Maternelle'); 
	require("templateTableau.php"); 
	?>
	
	</div>
	
	
	
	
</body>

<?php require("templateFoot.html"); ?>
</html>