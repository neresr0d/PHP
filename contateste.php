<pre>
    <?php
    class contaBanco {
        private $saldo;

        public function __construct(){
            $this->saldo = 300;

        }
        
    }

    public function mostraSaldo(); {

    
    echo "meu saldo é R$" . numer_format($this->saldo, 2, ',', '.'); }

    $conta = new ContaBaco();

    $conta->mostraSaldo();
    ?>
</pre>