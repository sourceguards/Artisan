<table cellpadding=3 border=0 width=100%>
	<tr>
		<td width=20%>
			<img src=imgs/Dilophosaurus.jpg height=190>
		</td>
		<td align="center" >
			<p style="font-size:20px">
			 <span style="color: #8A2BE2"  >
			  <font size=18>Весела скриня</font>
			 </span>
			</p>			
			<font size=5>іграшки з фетру ручна робота</font>
		</td>
	</tr>
</table>
	
	<?php 
		require_once('core.php');		
	?>
	<br>
Пошук <input>
	
<table cellpadding=3 border=0 width=100%>
	<tr>
		<td width=20%>
		<ul>		 	
		 	<?php foreach ($navmenu as $navmenu_element){ ?>
		 		<li><a href=<?php echo($navmenu_element['Link']); ?>><?php echo($navmenu_element['Name']); ?></a></li>
		 	<?php } ?>
		</ul>
		</td>
		<td>
		 	<?php 
		 		$page2show = $_GET['url'];		 		
		 		require_once($page2show);		
	     	?>
		</td>
	</tr>
	<tr>
		<td></td>
		<td></td>		
	</tr>
</table>

<?php 
if($debug==1){
	echo '<pre>';
	var_dump($navmenu);
	//var_dump($spinosaurus);
	//var_dump($dinos);
	var_dump($_GET);
	echo '</pre>';
}
?>