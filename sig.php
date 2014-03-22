<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

	<html xmlns="http://www.w3.org/1999/xhtml">

	<?php

		$slash = false;
		if($_GET['first']){
			$name = strtoupper(htmlspecialchars($_GET['first']." ".$_GET['last']));	
		}

		if($_GET['position']){
			$position = strtoupper(htmlspecialchars($_GET['position']));
		}

		if($_GET['work']){
			$work = htmlspecialchars($_GET['work']);
		}
		if($_GET['cell']){
			$cell = htmlspecialchars($_GET['cell']);
		}

		$social = false;

		if($_GET['twitter']){
			$twitter = htmlspecialchars($_GET['twitter']);
			$social = true;
		}
		if($_GET['github']){
			$github = htmlspecialchars($_GET['github']);
			$social = true;
		}
		if($_GET['facebook']){
			$facebook = htmlspecialchars($_GET['facebook']);
			$social = true;
		}
		if($_GET['flickr']){
			$flickr = htmlspecialchars($_GET['flickr']);
			$social = true;
		}
		if($_GET['instagram']){
			$instagram = htmlspecialchars($_GET['instagram']);
			$social = true;
		}
		if($_GET['foursquare']){
			$foursquare = htmlspecialchars($_GET['foursquare']);
			$social = true;
		}


	?>
	<head>
		        <link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<div>
			<table cellpadding="0" cellspacing="0" border="0" align="left" id="backgroundTable" style="padding:0 margin:0; float:none; background-color:#fff;">
				<tr>
					<td style="padding:0; margin:0;float:left display:block;">
						<h1 style="margin:0; padding:0; line-height:1.3em; font-size:11px; font-family:'arial'; color:#7d7d7d; font-weight:bold;"><b><?php echo $name;?><span style="color:#ff7700;"> // </span><?php echo $position;?></b></h1>
					</td>
				</tr>
				<tr>
					<td style="padding:0; margin:0; float:left display:block;"> 
						<p style="margin:0; padding:0; line-height:1.3em; font-size:8.5px; letter-spacing:0.1em; font-family:'arial'; font-weight:100; color:#a5a5a5;"><?php if($work):echo '<span style="color:#ff7700;">T </span>'.$work;endif;?><?php if($cell):echo '<span style="color:#ff7700;"> C </span>'.$cell; endif;?></p>
					</td>
				</tr>
				<tr>
					<td style="padding:0; margin:0; float:left display:block; height:8.5px;">
					</td>
				</tr>
				<tr>
					<td style="padding:0; margin:0; float:left display:block;"> 
						<?php if($social){
									echo '<p style="margin:0; padding:0; letter-spacing:0.1em; line-height:1.5em; font-size:7.5px; font-family:helvetica, arial, sans serif; font-weight:100; color:#a5a5a5;">FIND ME ON: ';
								}
								if($twitter){
									echo '<a style="text-decoration:none; color:#a5a5a5;" href="'.$twitter.'">TWITTER</a>';
									$slash=true; 
								}
								if($github){
									if($slash){
										echo '<span style="color:#ff7700;"> / </span>';
									}
									echo '<a style="text-decoration:none; color:#a5a5a5;" href="'.$github.'">GITHUB</a>';
									$slash=true; 
								}
								if($facebook){
									if($slash){
										echo '<span style="color:#ff7700;"> / </span>';
									}
									echo '<a style="text-decoration:none; color:#a5a5a5;" href="'.$facebook.'">FACEBOOK</a>';
									$slash=true; 
								}
								if($flickr){
									if($slash){
										echo '<span style="color:#ff7700;"> / </span>';
									}
									echo '<a style="text-decoration:none; color:#a5a5a5;" href="'.$flickr.'">FLICKR</a>';
									$slash=true; 
								}
								if($instagram){
									if($slash){
										echo '<span style="color:#ff7700;"> / </span>';
									}
									echo '<a style="text-decoration:none; color:#a5a5a5;" href="'.$instagram.'">INSTAGRAM</a>';
									$slash=true; 
								}
								if($foursquare){
									if($slash){
										echo '<span style="color:#ff7700;"> / </span>';
									}
									echo '<a style="text-decoration:none; color:#a5a5a5;" href="'.$foursquare.'">4SQUARE</a>';
									$slash=true; 
								}
								if($social){
									echo '</p>';
								}
							?>
					</td>
				</tr>

			</table>
		</div>
			
	</body>
</html>