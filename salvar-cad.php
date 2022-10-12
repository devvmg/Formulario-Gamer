<div class="divVoltar">
    <?php

        require_once 'config.php';

        if(!empty($_POST))
        {
            try
            {
                $sql = "INSERT INTO cadgamers
                (cad_email, cad_nome, games, estilo_g, console_g, plataforma_g) 
                        VALUES
                (:cad_email, :cad_nome, :games, :estilo_g, :console_g, :plataforma_g)";

                $stmt = $pdo->prepare($sql); 

                $dados = array(
                    ':cad_email' => $_POST['cad_email'] ,
                    ':cad_nome' => $_POST['cad_nome'] ,
                    ':games' => $_POST['games'] ,
                    ':estilo_g' => $_POST['estilo_g'] ,
                    ':console_g' => $_POST['console_g'] ,
                    ':plataforma_g' => $_POST['plataforma_g']);

                    
                if($stmt->execute($dados)) {print "<div><p>Dados adicionados à História!</p></div>";}

            } catch (PDOException $e)
            {
                print $e;
            }
        } else { echo "Campos vazios!";}

    /*    
    
    CONEXÃO DO CONECTOR COM AS COLUNAS DO BANCO MYSQL

    switch($_REQUEST["acao"])
        {
            case "salvar":
                $sql = "INSERT INTO proposta 
                (cod_Historia, acom_comite, priorizada, nivel_priori, origem, cronograma, tipo) 
                VALUES ('".$_REQUEST["cod_Historia"]."', 
                        '".$_REQUEST["acom_comite"]."', 
                        '".$_REQUEST["priorizada"]."', 
                        '".$_REQUEST["nivel_priori"]."', 
                        '".$_REQUEST["origem"]."', 
                        '".$_REQUEST["cronograma"]."', 
                        '".$_REQUEST["tipo"]."')"; 

                $res = $connection->query($sql) or die($connection->error);
    
                if ($res == true) {print "<div><p>Dados adicionados à História!</p></div>";}
                else {print "<div><p>!!!! ERRO AO SALVAR !!!!</p></div>";}
        } */
    ?>
        <button class="botaoForm botaoSalvarSalvar" style="width:180px;" type="button" onclick="voltarEatualizar(); return false;" tabindex="1" autofocus>Voltar ao Formulário</button>
        <button class="botaoForm botaoListar" type="submit" onclick="location.href='?page=listar-cad';" class="botaoForm botaoListar">Listar Dados</button>
</div>

<script>
	function voltarEatualizar (event) 
    {
        if ('referrer' in document){window.location = document.referrer;} 
        else {window.history.back();}
    }
</script>