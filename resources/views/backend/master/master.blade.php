<!DOCTYPE html>
<html>

<head>
    @include("backend/master/layouts/head")  
</head>
<body>
	<!-- header -->
	 @include("backend/master/layouts/header")
	<!-- header -->
    
	<!-- sidebar left-->
	 @include("backend/master/layouts/sidebar") 
	<!--/. end sidebar left--

	<!-main-->
     @yield("main")

</body>

</html>