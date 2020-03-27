<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta charset="UTF-8"/>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=1000"/>
	        <title>iOS</title>
	        <script>
	        	var clickMe = function() {
	        		window.webkit.messageHandlers.loginNative.postMessage("login");
	        	}
	        </script>
	</head>
	<body>

        <button style="height: 300px; width: 100%;" onclick=" clickMe(); ">Click Me!</button>
    </body>
</html>
