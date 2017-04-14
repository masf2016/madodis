<%@taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<link rel='stylesheet'
			href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' />
		
		<!-- Optional theme -->
		<link rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
			integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX"
			crossorigin="anonymous">
		
		<!-- Latest compiled and minified JavaScript -->
		<script
			src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
			integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ=="
			crossorigin="anonymous"></script>
		
		<title>Listagem de Institui��es</title>
	</head>
	<body>
		<div class="container">
			<h3>
				<legend>
					<a href="#">Institui��es Cadastrados</a>
				</legend>
			</h3>
		</div>
	
		<c:if test="${empty instituicaoList}">
			<div class="container">
				<div class="col-mod-4">
					<h4>N�o existe institui��es cadastradas!</h4>
				</div>
			</div>
		</c:if>
	
		<div class="container">
			<div class="col-mod-4"></div>
			<br>
	
			<div class="col-mod-4">
				<table class="table table-striped">
					<tr>
						<th>Nome Fantasia</th>
						<th>Nome Empresarial</th>
						<th>CNPJ</th>
						<th>Inscri��o Estadual</th>
						<th>&nbsp;</th>
						<th>&nbsp;</th>
					</tr>
					<c:forEach items="${instituicaoList}" var="instituicao">
						<tr>
							<td>${instituicao.nomeFantasia}</td>
							<td>${instituicao.nomeEmpresarial}</td>
							<td>${instituicao.cnpj}</td>
							<td>${instituicao.inscricaoEstadual}</td>
							<td><a href="remover/instituicao/${instituicao.id}"><span
									class="glyphicon glyphicon-remove-circle"></span></a></td>
							<td><a href="update/instituicao/${instituicao.id}"><span class="glyphicon glyphicon-pencil"></span></a></td>
						</tr>
					</c:forEach>
				</table>
			</div>
			<div>
				<a href="form_instituicao">
					<button class="btn btn-success">
						<i class="glyphicon glyphicon-plus-sign"></i>&nbsp;Novo
					</button>
				</a>
			</div>
			<div class="col-mod-4"></div>
		</div>
	</body>
</html>