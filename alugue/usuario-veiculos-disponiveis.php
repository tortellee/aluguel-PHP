<?php require_once 'cabecalho_usuario.php';
include('verificar-login.php');
require_once 'classes\Categoria.php';
$categoria= new Categoria();
$lista = $categoria->listar();
?>
<DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
  <head>
      <meta charset='utf-8'>
      <title>Alugue - Já</title>

<div align="center">
<img src="imagens/alugue.png">
<br><br>
</div>
<div>
</div>
<br><br>
<table class="table">
    <thead>
        <td bgcolor="#CDC9C9"><b>Tipo:</b></td>
        <td bgcolor="#CDC9C9"><b>Escolher categoria:</b></td>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['tipo'];?></td>

            <td>
                <a href="categorias-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">ESCOLHER</a>

                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<br><br>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
