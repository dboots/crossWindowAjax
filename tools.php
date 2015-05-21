<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="js/editor.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				var customToolAttribute = $('#customToolAttribute');

				poll(500, 'customToolAttribute', function(value) {
					if (value != '') {
						customToolAttribute.css('color', value);
						customToolAttribute.html(value);
					}
				});

				//-- tool specific js/ui

				$(document.body).on('click', '.selector', function(e) {
					set('customColorAttribute', $(this).attr('data-tool'), function() { });
				});

				var tools = ['Chop', 'Cut', 'Lasso'];

				$(tools).each(function(i, v) {
					$('#toolList').append('<div class="selector" data-tool="' + v + '">' + v + '</div>');
				});
			});
		</script>
	</head>

	<body>
		<h1>Tools</h1>

		<div id="toolList"></div>
		<div class="clearfix"></div>
		<div id="customToolAttribute"></div>
	</body>
</html>