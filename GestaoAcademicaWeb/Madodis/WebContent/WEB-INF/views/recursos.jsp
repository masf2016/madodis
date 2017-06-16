<%@ taglib prefix="spring" uri="http://www.springframework.org/tags"%>
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Madodis - Recursos</title>
<link rel="favicon" href="/madodis/resources/images/favicon.png">
<link rel="stylesheet" media="screen"
	href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<link rel="stylesheet" href="/madodis/resources/css/bootstrap.css">
<link rel="stylesheet"
	href="/madodis/resources/css/font-awesome.min.css">
<link rel="stylesheet" href="/madodis/resources/css/bootstrap-theme.css"
	media="screen">
<link rel="stylesheet" href="/madodis/resources/css/style3.css">
<link rel='stylesheet' id='camera-css'
	href='/madodis/resources/css/camera.css' type='text/css' media='all'>
<link rel='stylesheet' href="/madodis/resources/css/jAlert.css" />
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="/madodis/resources/js/html5shiv.js"></script>
	<script src="/madodis/resources/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<jsp:include page="menu.jsp">
		<jsp:param value="${user}" name="user" />
	</jsp:include>

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="heading-text">
				<h1 class="animated flipInY delay1">Madodis</h1>
				</br> </br>

				<div class="col-mod-4">
					<div class="col-sm-6">

						<h2>
							<p align="justify">Secretaria</p>
						</h2>

						<h4>
							<p align="justify">
								- Controle Completo de Discentes e Matriculas <br /> - Gest�o de
								Cursos e Turmas <br /> - Calculo autom�tico de m�dias <br /> -
								Di�rio de Classe <br /> - Relat�rios <br /> ... e muito mais!
							</p>
						</h4>
						</br>

						<h2>
							<p align="justify">Discentess</p>
						</h2>

						<h4>
							<p align="justify">
								- Acompanhamento de Notas/Faltas/Boletins <br /> - Acesso a
								Material de Aula e Apoio <br /> - Provas <br /> - Relat�rios <br />
								... e muito mais!
							</p>
						</h4>
					</div>
				</div>

				<div class="col-mod-4">
					<div class="col-sm-6">
						<h2>
							<p align="justify">Docentes</p>
						</h2>

						<h4>
							<p align="justify">
								- Registro de Notas e Faltas <br /> - Disponibiliza��o
								descritiva do Material de Aula <br /> - Cadastro de datas das
								Provas <br /> - Di�rio de Classe <br /> - Relat�rios <br />
								... e muito mais!
							</p>
						</h4>
						</br>
						<h2>
							<p align="justify">Coordenador</p>
						</h2>

						<h4>
							<p align="justify">
								- Cursos <br /> - Disciplinas <br /> - Turmas <br /> - Discentes
								<br /> - Relat�rios <br /> ... e muito mais!
							</p>
							

						</h4>
					</div>
				</div>
			</div>

			<div class="fluid_container">
				<div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4"></div>
			</div>
		</div>
		<!-- .fluid_container -->
	</header>
	<!-- /Header -->

	<jsp:include page="rodape.jsp" />


</body>
</html>
