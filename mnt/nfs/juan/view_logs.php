<?php
$directory = '/mnt/nfs/juan';
$files = array_diff(scandir($directory), array('..', '.'));

echo "<h1>Conteúdo dos Arquivos em $directory</h1>";

foreach ($files as $file) {
    // Verifica se o arquivo é um dos desejados
    if ($file === 'apache_offline.log' || $file === 'apache_online.log') {
        $filePath = $directory . '/' . $file;

        if (is_file($filePath)) {
            echo "<h2>$file</h2>";
            echo "<pre>";
            echo htmlspecialchars(file_get_contents($filePath), ENT_QUOTES, 'UTF-8');
            echo "</pre>";
        }
    }
}
?>

