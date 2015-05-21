<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="js/editor.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				var customColorAttribute = $('#customColorAttribute');

				poll(500, 'customColorAttribute', function(value) {
					if (value != '') {
						customColorAttribute.html(value);
					}
				});

				//-- tool specific js/ui

				$(document.body).on('click', '.selector', function(e) {
					set('customToolAttribute', $(this).attr('data-color'), function() { });
				});

				var colors = ['#FF0000', '#00FF00', '#0000FF'];

				$(colors).each(function(i, v) {
					$('#colorList').append('<div class="selector" data-color="' + v + '" style="background-color: ' + v + '"></div>');
				});
			});
		</script>
	</head>

	<body>
		<h1>Colors</h1>

		<div id="colorList"></div>
		<div class="clearfix"></div>
		<div id="customColorAttribute"></div>
	</body>
</html>