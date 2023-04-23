
<!DOCTYPE html>
<html>
	<head>
		<style>
			body{
				font-family:arial, tahoma;
				background:black;
				color:white;
			}
			div{
				float:left;
			}
			iframe{
				border-radius:10px;
				border:2px solid #808080;
				margin:10px;
				width:160px;
				height:160px;
			}
			.loading{
				position:absolute;
				z-index:-1;
				width:160px;
				height:160px;
				text-align:center;
				line-height:160px;
			}

		</style>
	</head>
	<body>
		<div style="position:absolute;">
			1000 random images from the web...
		</div>
		<center>
			<button onclick="location.reload();">Reload</button>
		</center>
		<?
			for($i=0;$i<100;++$i){
				for($j=0;$j<10;++$j){
				?>
					<div>
						<div class="loading">
							loading...
						</div>
						<iframe src="load<?echo $j;?>.php"></iframe>
					</div>
				<?
				}
			}
		?>
	</body>
</html>