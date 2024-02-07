<?php 
/*
Proteção contra XSS (Cross-Site Scripting):
Sempre valide e sanitize dados de entrada antes de exibi-los na página.
Use funções como htmlspecialchars() para escapar caracteres especiais que podem ser usados em ataques XSS.
*/
echo htmlspecialchars($variavel);

?>