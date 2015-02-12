<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mensagem Enviada</title>
</head>

<body>

	<?php
		if(!empty($_POST)){
			
			$cab= "Form: ".$_POST['nome']."<".$_POST['email'].">\n";
			
			$mensagem = "Contato It JC Solutions - AD\n";
			$mensagem = "Nome: ".$_POST['nome']."\n";
			$mensagem = "Email: ".$_POST['email']."\n";
			$mensagem = "Assunto: ".$_POST['assunto']."\n";
			$mensagem = "Mensagem: ".$_POST['mensagem'];

			if(mail("celino3x@gmail.com", "Formulário de Contato - IT Jcampos - AD", $mensagem, $cab)){
				echo "<script type=\"text/javascript\">alert(\"Sua Mensagem foi enviada.\"); history.go(-1); </script>\n";
			}
			
			else{
				
				echo "<script type=\"text/javascript\">alert(\"Ocorreu um erro ao Enviar.\"); history.go(-1); </script>\n";
				}
		}
		else{
			header("Location:index.php");
		}
		
    ?>

</body>
</html>