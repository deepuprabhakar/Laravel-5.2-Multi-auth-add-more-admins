<html>
	<head>
		
	</head>
	<body>
		<p>
			Hi,
		</p>
		<p>
			Your account has been created. Please use the following credentials to login.
		</p>
		<p>
			<a href="{{ $data['actionUrl'] }}">Click Here</a>
		</p>
		<p>
			Username: {{ $data['username'] }}
		</p>
		<p>
			Password: {{ $data['password'] }}
		</p>

	</body>
</html>