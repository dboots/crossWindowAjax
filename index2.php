<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="js/editor.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('#btnOpenTools').click(function(e) {
					var tools = window.open('tools.php', 'tools', 'width=500,height=200');
					tools.focus();
				});

				$('#btnOpenColors').click(function(e) {
					var colors = window.open('colors.php', 'colors', 'width=300,height=300');
					colors.focus();
				});
			});
		</script>
	</head>

	<body>
		<h1>Window 2</h1>
		<button id="btnOpenColors">Open Colors</button>
	</body>
</html>