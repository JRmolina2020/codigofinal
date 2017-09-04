<!doctype html>

<html lang="en">
<head>
<link rel="import" href="../../ruteo/link.html">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>WebcamJS Test Page</title>


	<style type="text/css">
		body { font-family: Helvetica, sans-serif; }
		h2, h3 { margin-top:0; }
		form { margin-top: 15px; }
		form > input { margin-right: 15px; }
		#results { float:center;   }
	</style>
</head>
<body>
<center>
	<div class="container">
	<div class="row">
	<div class="col-lg-4">

	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Fotografia</button>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
<!-- Modal -->
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">FOTOGRAFIA</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-3"></div>
						<div class="col-lg-4">
							<div id="my_camera"></div>
						</div>
					</div><br><br>
					<div class="row">
						<div class="col-lg-3"></div>
						<div class="col-lg-4">
							<div id="results"></div>
						</div>
					</div><br><br>
				     </div>
				     <div class="modal-footer">
					<form>
                  <button type="button" class="btn btn-primary" onclick="take_snapshot()">Tomar foto</button>
                   <a href="index.php" type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</a>
	              </form>
	              </div>
				</div>
				  </div>
				   </div>
					</div>
                    </div>
					</div>
	<script type="text/javascript" src="webcam.js"></script>
	<script language="JavaScript">
		Webcam.set({
			width: 320,
			height: 240,
			image_format: 'jpeg',
			jpeg_quality: 90
		});
		Webcam.attach( '#my_camera' );
	</script>
	<script language="JavaScript">
		var shutter = new Audio();
		shutter.autoplay = false;
		shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';
		function take_snapshot() {
			shutter.play();
			Webcam.snap( function(data_uri) {
				document.getElementById('results').innerHTML = 
				'<img src="'+data_uri+'"/>';
			} );
		}
	</script>
</body>
</html>
