<pre>
    <?php
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'04-23-2024\'&@dataFinalCotacao=\'04-30-2024\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';
    
        $dados = json_decode(file_get_contents($url), true);
        var_dump($dados);

        $cotacao = $dados["value"][0]["cotacaoCompra"];
        echo "A cotação é de $cotacao"
    ?>
</pre>