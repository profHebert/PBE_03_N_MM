<?php
require_once 'config.php';//carrega o arquivo de configuração
require_once 'header.php'; //carrega o cabeçaçho com o menu
// Não precisa de conecta.php, pois é só um formulário
?>

<h1>Cadastrar Novo Usuário</h1>

<p>Insira as informações do novo usuário. A senha será armazenada com **password_hash()**.</p>

<form method="post" action="insere.php">
  <label for="email">Email:</label>
  <input type="email" name="email" id="email" required><br><br>
  
  <label for="senha">Senha:</label>
  <input type="password" name="senha" id="senha" required><br><br>
  
  <label for="data">Data de Cadastro:</label>
  <input type="date" name="data" id="data" value="<?php echo date('Y-m-d'); ?>" required><br><br>
  
  <input type="submit" value="Cadastrar">
</form>

<?php require_once 'footer.php'; ?><!-- Carrega o rodapé -->