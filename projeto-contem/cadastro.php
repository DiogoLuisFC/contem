<?php
$entidade = $_GET['e'];
$entidade = $entidade=="p" ?"Professor":"Aluno";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - <?php echo $entidade?> </title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="box">
        <form name="form_cadastro" id="form_cadastro" method="post" enctype="multipart/form-data" >
        <input type="hidden" name="entidade" value="<?php echo $entidade?>">
            <fieldset>
                <legend><b>Cadastro de <?php echo $entidade?> </b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" autofocus required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="matricula" id="matricula" class="inputUser" required>
                    <label for="matricula" class="labelInput">Matrícula</label>
                </div>  
                <br><br>  
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">                   
                    <input type="text" name="rg" id="rg" class="inputUser" required>
                    <label for="rg" class="labelInput">RG</label>
                </div>  
                <br><br>  
                <label for="nascimento">Data de nascimento</label>
                <br><br> 
                <input type="date" name="nascimento" id="nascimento" required>             
                <br><br>
                <p>Sexo</p> 
                <input type="radio" name="sexo" value="Masculino" id="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" name="sexo" value="Feminino" id="feminino" required>
                <label for="feminino">Feminino</label>
                <br><br><br> 
                <div class="inputBox">
                    <input type="text" name="n_mae" id="n_mae" class="inputUser" required>
                    <label for="n_mae" class="labelInput">Nome da mãe</label>
                </div>   
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>  
                <br><br>  
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>  
                <br><br>
                <div id="professor">
                    <div class="inputBox" >
                        <input type="text" name="formacao" id="formacao" class="inputUser" required>
                        <label for="formacao" class="labelInput">Formação</label>
                    </div>  
                    <br><br>  
                    <div class="inputBox" >
                        <input type="text" name="instituicao" id="instituicao" class="inputUser" required>
                        <label for="instituicao" class="labelInput">Instituição de Formação</label>
                    </div> 
                </div>
                
                <div id="aluno">
                    <div class="inputBox" >
                        <input type="text" name="curso" id="curso" class="inputUser" required>
                        <label for="curso" class="labelInput">Curso</label>
                    </div>  
                    <br><br>  
                    <div class="inputBox">
                        <input type="text" name="turno" id="turno" class="inputUser" required>
                        <label for="turno" class="labelInput">Turno</label>
                    </div>  
                    <br><br>  
                    <div class="inputBox">
                        <input type="number" name="ano_matricula" id="ano_matricula" class="inputUser" required>
                        <label for="ano_matricula" class="labelInput">Ano de Matrícula</label>
                    </div>  
                </div>  
                
                <br><br><br>
                <fieldset class="field_endereco">
                    <legend id="leg_end"><b>Endereço</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="logradouro" id="logradouro" class="inputUser" required>
                        <label for="logradouro" class="labelInput">Logradouro</label>
                    </div>  
                    <br><br>  
                    <div class="inputBox"> 
                        <input type="text" name="numero" id="numero" class="inputUser" required>
                        <label for="numero" class="labelInput">Número</label>
                    </div>  
                    <br><br> 
                    <div class="inputBox">
                        <input type="text" name="bairro" id="bairro" class="inputUser" required>
                        <label for="bairro" class="labelInput">Bairro</label>
                    </div>  
                    <br><br> 
                    <div class="inputBox">
                        <input type="text" name="cidade" id="cidade" class="inputUser" required>
                        <label for="cidade" class="labelInput">Cidade </label>
                    </div>  
                    <br><br> 
                    <div class="inputBox">
                        <input type="text" name="estado" id="estado" class="inputUser" required>
                        <label for="estado" class="labelInput">Estado</label>
                    </div> 
                    <br>   
                </fieldset>
                <br><br> 
                <input type="button" name="submit" id="submit" value="Cadastrar" onclick="cadastrar();">
            
            </fieldset>    
        </form>
    </div>
    <script src="cadastrar.js"></script>
    <script>
        var ent = <?php echo json_encode($entidade)?>;
        document.getElementById('professor').style.display = (ent=='Professor'?'block':'none');
        document.getElementById('aluno').style.display = (ent=='Aluno'?'block':'none');
    </script>
</body>
</html>