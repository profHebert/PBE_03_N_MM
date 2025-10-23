</div><footer>
        <hr>
        <p style="text-align: center; font-size: 0.8em; color: #666;">
            &copy; <?php echo date("Y"); ?> **PHP PDO**. 
            Todos os direitos reservados.
            <br>
            Ferramentas de Banco de Dados:
            <?php
            // O config.php já deve ter sido incluído nos arquivos principais
            // para que o DB_TYPE esteja definido.
            require_once "config.php";
            if (defined('DB_TYPE')) {
                echo 'Conectado via PDO a **' . strtoupper(DB_TYPE) . '**.';
            } else {
                echo 'Configuração de conexão pendente.';
            }
            ?>
        </p>
    </footer>
</body>
</html>
    
    