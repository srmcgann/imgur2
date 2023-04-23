<!DOCTYPE html>
<html>
	<head>
		<style>
			body{
				overflow:hidden;
				margin:0px;
				padding:0px;
				font-family:arial,tahoma;
			}
		</style>
	</head>
	<body>
		<?
			do{
				do{
					$x="";
					for($i=0;$i<5;++$i){
						switch(rand(0,2)){
							case 0:
								$x.=chr(rand(65,90));
								break;
							case 1:
								$x.=chr(rand(97,122));
								break;
							case 2:
								$x.=chr(rand(48,57));
								break;
						}
					}
					$x_thumb="http://i.imgur.com/".$x."b.jpg";
					$size=getimagesize($x_thumb);
				}while($size[0]=="" || ($size[0]==161 && $size[1]==81));
				$x="http://i.imgur.com/".$x.".jpg";
				$size=getimagesize($x);
			}while($size[0]<200 || $size[1]<200);
		?>
		<a target="_blank" href="<? echo $x;?>">
			<img src="<? echo $x_thumb;?>">
		</a>
	</body>
</html>