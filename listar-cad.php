<div class="divVoltar">
    <?php 

        require_once 'config.php';

        $lista = array();

        if(!empty($_GET['cad_email']))
        {
            $sql = "SELECT * FROM cadgamers WHERE cad_email = :cad_email ORDER BY idcad ASC";

            $dados = array(':cod_historia' => $_GET['cod_historia']);

            try
            {
                $stmt = $pdo->prepare($sql); 

                if ($stmt->execute($dados))
                {
                    $lista = $stmt->fetchAll();

                }
                else {print "Falha ao executar o SQL #1";}
            }
            catch(PDOException $e)
            {
                print $e;
            }
        }
        else
        {
            $sql = "SELECT * FROM cadgamers ORDER BY idcad ASC";

            try 
            {
                $stmt = $pdo->prepare($sql);

                if($stmt->execute())
                {
                    $lista = $stmt->fetchAll();

                /*  echo "<pre>";
                    print_r($lista);
                    echo "</pre>"; */
                }
                else {print "Falha ao executar o SQL #2";}

            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
    ?>

    <?php if(!empty($lista)) { ?>

        <div class="tabelaListagem">
            <h1>Detalhamento</h1>
            <table>
                <thead>
                    <tr>
                        <th class="idcad" style="width: 50px">#</th>
                        <th class="email" style="width: 225px">Email</th>
                        <th class="nick" style="width: 132px">Nickname</th>
                        <th class="jogo" style="width: 120px">Jogo Favorito</th>
                        <th class="estilo" style="width: 132px">Estilo Favorito</th>
                        <th class="console" style="width: 135px">Console Favorito</th>
                        <th class="plataforma" style="width: 150px">Plataforma Favorita</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($lista as $a) { ?>
                    <tr>
                        <td class="idcad"><?php echo $a['idcad']; ?></th>
                        <td class="email"><?php echo $a['cad_email']; ?></td>
                        <td class="nick"><?php echo $a['cad_nome']; ?></td>
                        <td class="jogo"><?php echo $a['games']; ?></td>
                        <td class="estilo"><?php echo $a['estilo_g']; ?></td>
                        <td class="console"><?php echo $a['console_g']; ?></td>
                        <td class="plataforma"><?php echo $a['plataforma_g']; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div><!--tabelaListagem-->

    <?php } ?>

    <button class="botaoForm botaoListar" type="submit" onclick="location.href='?page=forms';">Voltar</button>
</div>

<div class="creditos">	
	<img src="media/logoAss.png">
	<div class="sombraCredito"></div>
</div><!--creditos--> 