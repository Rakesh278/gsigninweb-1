<html>
	<body>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<script>
		
		function signOut() {
			var auth2 = gapi.auth2.getAuthInstance();
			auth2.signOut().then(function () {
			  console.log('User signed out.');
			});
			}
		</script>
	</body>
	<h1>In Auth.html page.....</h1>
	<a href="#" onclick="signOut();">Sign out</a>
</html>