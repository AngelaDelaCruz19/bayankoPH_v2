<style type="text/css">
.splash_animation{
animation-name: splashy;
animation-duration: 1.2s;
}
@keyframes ftoblack{
	0%{
opacity: 0;

	}
}
@keyframes splashy{
	0%{
opacity: 0;
		transform: scale(1.1);
	}
}
.erp_icons{
	width: 120px;
}
.card-dynamic{

	background-color: #27242C;
}
.list-group-dynamic a{
	background-color: #27242C;
	color: #a4b0be;
}



body{
	background-color: #181719;
}

.bg-dynamic{
background-color: transparent;
/*box-shadow: 0px 10px 10px rgba(0,0,0,0.1);*/
}
.navbar-dynamic{
	color: #2f3542;
}
.text-dynamic{
	color: white;
}
.bg-dark{
	background-color: #242526 !important;
}

.carousel-caption{
	background-color: rgba(0,0,0,0.6);
	border-radius: 10px;
	padding: 30px;
	text-shadow: 0px 5px 20px black !important;
	color: white;
}

.carousel{
	border-radius: 20px !important;

	box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}
.rounded{
	border-radius: 20px !important;
}
.header_gradient{
	/*background: rgb(52,58,64);*/
	/*background: linear-gradient(0deg, #57606f 8%, rgba(0,0,0,0) 100%);*/
	top: 0;
	bottom: 0;
	overflow: hidden;
}
.bg_worthy{
	
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
}
.app_icon{
	height: 100px;
	width: 100px;
	background-color: #3D3A41;
	padding: 15px;
	border-radius: 30px;
	box-shadow: 0px 5px 10px rgba(0,0,0,0.1);

	margin-bottom: 20px;
}
.app_icon img{
	width: 100%;
	max-height: 100%;
}
.bluelink{
	text-decoration: none;
	color: #007DFF;
}

 a{
	text-decoration: none;
	color: white;
}
</style>
<script src="https://kit.fontawesome.com/a936531bd4.js" crossorigin="anonymous"></script>
<style>
	.headerpage{

	}
	.panel1{
		width:50%;
		top: 0;
		left:0;
		bottom: 0;
		height: 100%;
		background-image: url("images/login_bg.jpg");
		position: fixed;
		background-position: center;
		background-size: cover;
	}
	.panel2{
		width:50%;
		top: 0;
		right:0;
		bottom: 0;
		height: 100%;
		background-color: #01232F;
		color: #A4E933;
		position: fixed;
	}
	.footer{
		display: block;
		bottom: 0;
		left: 0;
		right: 0;
		position: absolute;
	}
	.btn-green{
		background-color: #A4E933;
		color: black !important;
	}
	.navbar-green a{
		color: #A4E933 !important;
		opacity: 0.5;
	}
	.navbar-green a:hover{
		opacity: 1;
	}
	.btn-rounded{
		border-radius: 50px;
	}
	.shadowed{
		box-shadow: 0px 10px 20px rgba(0,0,0,0.5);
	}
	.loginboxes{
			margin-top: 25vh; margin-left: 5vh; margin-right: 5vh;
		}
	@media only screen and (max-width: 800px) {
		.panel1{
			display: none;
		}
		.panel2{
			width: 100%;
			right: 0;
		}
		.loginboxes{
			margin-top: 10vh;
		}
	}
	#page-content {
  flex: 1 0 auto;
}

#sticky-footer {
  flex-shrink: none;
  border-top: 1px solid rgba(0,0,0,0.08);
  background-color: #27242C !important;
}
.footer #sticky-footer{

	background-color: transparent !important;

	color: white !important;
}

.promo_images{
	width: 20vh;
	box-shadow: 0px 5px 10px rgba(0,0,0,0.1);
	border-radius: 20px;
}
.mod-body{
	background-color: #27242C;
	border-color: rgba(255,255,255,0.1);
}
.mod-head{
	background-color: #181719;
	border-color: rgba(255,255,255,0.1);
}
.mod-foot{
	background-color: #181719;
	border-color: rgba(255,255,255,0.1);
}
.btn-ol-dynamic{
	border-color: white;
}
.btn-ol-dynamic:hover{
	background-color: white;
	color: black;
}

.input[type="submit"] {
  height: 30px;
  width: 30px;
  display: inline-block;
  color:red;
  float: right;
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABzUlEQVRIieXWv29NcRjH8efQNrp00lQuiUEHA02IhUtLhDAQifoLhIVN0sRgacpmEovBJiJWJotEIvEjFoNJmhA/E41o5aLhZbjfxnETvefce1yDZzrD83nen+/3nPPkE/GPKivaiCwiRiJiOCLmIuJ9lmWLf8UVMhzBTcz7vb7hDk5goEroGB7gIy5hP9ZiAGuwHTN4gec4WAX0cDrhFaxu07sKZ/EVU91Ad+ILTpXU7cUCTnYCHcJbTJcWN/VHk+nNZYXn8RQrOwGnGddwu4ygH3OY7BSa5mzAD4wWFSy9o8FuwGnWI5xZrmdF7nlLRDzOsqzRLTgi7kXE1qLgWkS8qgAaaU6tKFiUWKFtqu2cPPhNtHFZomoR8a4o+ElEbKvi44qI8Yh4WKgTffiAY90QMYrv2FhGNI1n6OsCfB23yoqG8BozHUIn0Si9MpN4RxKfLqnblxbQxdLQ3JBD+ISrGG7TO4hzWEwBYQET3cA34X4ycBkHsC4XBOq4gJeYxVSCVgLPUii4kQzkq4G7OL70C2KiBT7eMbzFyIhmJFrvDzmrBT5fGbygwXruhj5jz38L391L+C6/Mvks+nsJr2tm77GeQXPw3p10ufoJkVRD9xnchqcAAAAASUVORK5CYII=) center center no-repeat;
  text-indent: -10000px;
  border: none;
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  cursor: pointer;
  opacity: 0.4;
  cursor: pointer;
  transition: opacity .4s ease;
  object-fit: cover;
}
.form-control{
	background-color: rgba(255,255,255,0.1) !important;
	color:  #a4b0be !important;
	border-color: rgba(255,255,255,0.2);
}
option { 
    /* Whatever color  you want */
    background-color: #181719;

}
</style>