<?php
session_start();;
if (!isset($_SESSION['cliente'])) {
    header('Location: index.php');
}

$sexo_valores = array(
    'NA' => 'Não informado',
    'F' => 'Feminino',
    'M' => 'Masculino'
);

$preferencias_valores = array(
    'eletronicos' => 'Eletrônicos',
    'eletrodomesticos' => 'Eletrodomésticos',
    'informatica' => 'Informática'
);

include('header.php');

$cliente['sexo'] = $sexo_valores[$cliente['sexo']];
$cliente['preferencias'] = explode(',', $cliente['preferencias']);

?>

<h1>Meus dados</h1>

<form class="form" method="post">
    <fieldset>
        <legend>Dados pessoais</legend>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <p class="form-control-static"><?=$cliente['nome']?></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="sexo">Sexo</label>
                    <p class="form-control-static"><?=$cliente['sexo']?></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="data">Data de nascimento</label>
                    <p class="form-control-static"><?=$cliente['dataDeNascimento']?></p>
                </div>
            </div>
        </div>
    </fieldset>

    <fieldset>
        <legend>Informações para contato</legend>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="endereco">Endereço completo</label>
                    <p class="form-control-static"><?=$cliente['endereco']?></p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="cep">CEP</label>
                    <p class="form-control-static"><?=$cliente['cep']?></p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <p class="form-control-static"><?=$cliente['estado']?></p>
                    </select>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <p class="form-control-static"><?=$cliente['email']?></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="telefone_fixo">Telefone fixo</label>
                    <p class="form-control-static"><?=$cliente['telefoneFixo']?></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="telefone_celular">Telefone celular</label>
                    <p class="form-control-static"><?=$cliente['telefoneCelular']?></p>
                </div>
            </div>
        </div>
    </fieldset>

    <fieldset>
        <legend>Preferências</legend>
        <div class="form-group">
            <?php
            if ($cliente['preferencias']) {
                echo '<ul>';
                foreach($cliente['preferencias'] as $preferencia) {
                    echo '<li>' . $preferencias_valores[$preferencia] . '</li>';
                }
                echo '</ul>';
            }
            ?>
        </div>

    </fieldset>


    <fieldset>
        <legend>Para acessar a loja</legend>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="usuario">Nome de usuário</label>
                    <p class="form-control-static"><?=$cliente['usuario']?></p>
                </div>
            </div>
        </div>

    </fieldset>

</form>

<?php
include('footer.php');
?>
