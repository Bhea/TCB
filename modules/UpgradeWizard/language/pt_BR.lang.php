<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

	

$mod_strings = array (
  'DESC_MODULES_INSTALLED' => 'Os seguintes Módulos foram instalados:',
  'DESC_MODULES_QUEUED' => 'Os seguintes Módulos estão prontos para serem instalados:',
  'ERROR_FLAVOR_INCOMPATIBLE' => 'O arquivo carregado não é compatível com esta versão (Community Edition, Professional ou Enterprise) do Sugar:',
  'ERROR_VERSION_INCOMPATIBLE' => 'O arquivo carregado não é compatível com esta versão do Sugar:',
  'ERR_CHECKSYS_PHP_INVALID_VER' => 'A sua versão de PHP não é suportada pelo Sugar. Necessita de instalar uma versão que seja compatível com a aplicação Sugar. Por favor consulte a Matriz de Compatibilidade nas Notas de Lançamento para Versões de PHP suportadas. A sua versão é',
  'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Não pode determinar o Grupo',
  'ERR_UW_CANNOT_DETERMINE_USER' => 'Não pode determinar o proprietário (Owner)',
  'ERR_UW_CONFIG' => 'Por favor certifique-se que o seu arquivo config.php pode ser escrito e recarregue esta página.',
  'ERR_UW_CONFIG_WRITE' => 'Erro ao actualizar o arquivo config.php com a nova informação da versão.',
  'ERR_UW_DIR_NOT_WRITABLE' => 'Diretório sem permissões de escrita.',
  'ERR_UW_FILE_NOT_COPIED' => 'arquivo não foi copiado',
  'ERR_UW_FILE_NOT_DELETED' => 'Problema ao remover o pacote',
  'ERR_UW_FILE_NOT_READABLE' => 'arquivo não pode ser lido.',
  'ERR_UW_FILE_NOT_WRITABLE' => 'Arquivo não pode ser movido ou escrito para',
  'ERR_UW_FLAVOR' => 'SugarCRM System Flavor:',
  'ERR_UW_FLAVOR_2' => 'Upgrade Flavor:',
  'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log não pode ser criado ou escrito. Por favor corrija as permissões do seu Diretório do SugarCRM.',
  'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload configurado para um valor maior que 1. Por favor modifique isto no seu php.ini e reinicie o servidor web.',
  'ERR_UW_MYSQL_VERSION' => 'SugarCRM precisa do MySQL 4.1.2 ou uma versão mais recente. Foi encontrada a versão:',
  'ERR_UW_NOT_VALID_UPLOAD' => 'Carregamento não valido',
  'ERR_UW_NO_CREATE_TMP_DIR' => 'Não pode criar o Diretório temp. Verifique as permissões do arquivo.',
  'ERR_UW_NO_FILES' => 'Ocorreu um erro, nenhum arquivo foi encontrado para a verificação.',
  'ERR_UW_NO_FILE_UPLOADED' => 'Por favor especifique um arquivo e tente novamente!',
  'ERR_UW_NO_MANIFEST' => 'No arquivo zip está em falta o arquivo manifest.php. Não podemos prosseguir.',
  'ERR_UW_NO_VIEW' => 'Visualização especificada inválida.',
  'ERR_UW_NO_VIEW2' => 'Visualização não definida. Por favor aceda à página de administração para navegar até esta página.',
  'ERR_UW_OCI8_VERSION' => 'Sua versão do Oracle não é suportada pelo SugarCRM. Você precisa instalar uma versão compatível. Favor consultar as opções compatíveis nos releases.',
  'ERR_UW_ONLY_PATCHES' => 'Apenas pode carregar patches nesta página.',
  'ERR_UW_PHP_FILE_ERRORS' => 
  array (
    1 => 'O arquivo carregado excede a diretiva upload_max_filesize no php.ini',
    2 => 'O arquivo carregado excede a diretiva MAX_FILE_SIZE que foi especificada no formulário HTML.',
    3 => 'O arquivo carregado foi apenas parcialmente carregado.',
    4 => 'Nenhum arquivo foi carregado.',
    5 => 'Erro desconhecido.',
    6 => 'Pasta temporária em falta.',
    7 => 'Falha ao escrever o arquivo para o disco.',
    8 => 'Carregamento do arquivo interrompido por extensão.',
  ),
  'ERR_UW_PREFLIGHT_ERRORS' => 'Erros encontrados durante a verificação Preflight',
  'ERR_UW_UPLOAD_ERR' => 'Ocorreu um erro ao carregar o arquivo, por favor tente novamente!',
  'ERR_UW_VERSION' => 'Versão do sistema SugarCRM',
  'ERR_UW_WRONG_TYPE' => 'Esta página não é para ser executada',
  'LBL_BACKWARD_COMPATIBILITY_ON' => 'O modo Php Backward Compatibility está ligado. Configure o zend.ze1_compatibility_mode para Desligado para prosseguir',
  'LBL_BUTTON_BACK' => 'Voltar',
  'LBL_BUTTON_CANCEL' => 'Cancelar',
  'LBL_BUTTON_DELETE' => 'Eliminar o Pacote',
  'LBL_BUTTON_DONE' => 'Concluído',
  'LBL_BUTTON_EXIT' => 'Sair',
  'LBL_BUTTON_INSTALL' => 'Atualização Preflight',
  'LBL_BUTTON_NEXT' => 'Próximo >',
  'LBL_BUTTON_RECHECK' => 'Verificar novamente',
  'LBL_BUTTON_RESTART' => 'Reiniciar',
  'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Commit Upgrade em progresso',
  'LBL_CURRENT_PHP_VERSION' => '(A sua versão PHP actual é',
  'LBL_HOME_PAGE_4_NAME' => 'Tracker',
  'LBL_INCOMPATIBLE_PHP_VERSION' => 'É necessário PHP versão 5 ou acima',
  'LBL_LANGPACKS' => 'Language Packs',
  'LBL_LAYOUT_MERGE_DESC' => 'Há novos campos disponíveis, que foram adicionados como parte desta atualização e podem ser adicionados automaticamente aos layouts dos módulos. Para saber mais sobre os novos campos, consulte as Notas de Lançamento da versão para qual está para atualizar.',
  'LBL_LAYOUT_MERGE_TITLE' => 'Clique em Avançar para confirmar as alterações e finalizar a atualização.',
  'LBL_LAYOUT_MERGE_TITLE2' => 'Clique em Avançar para concluir a atualização.',
  'LBL_LAYOUT_MODULE_TITLE' => 'Layouts',
  'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Verificação de Licença em progresso',
  'LBL_ML_ACTION' => 'Ação',
  'LBL_ML_CANCEL' => 'Cancelar',
  'LBL_ML_COMMIT' => 'Submeter',
  'LBL_ML_DESCRIPTION' => 'Descrição',
  'LBL_ML_INSTALL' => 'Instalar',
  'LBL_ML_INSTALLED' => 'Data de Instalação',
  'LBL_ML_NAME' => 'Nome',
  'LBL_ML_PUBLISHED' => 'Data de Publicação',
  'LBL_ML_TYPE' => 'Tipo',
  'LBL_ML_UNINSTALLABLE' => 'Não-instalável',
  'LBL_ML_VERSION' => 'Versão',
  'LBL_MODULELOADER' => 'Module Loader',
  'LBL_MODULE_NAME' => 'Assistente de atualização',
  'LBL_MODULE_NAME_SINGULAR' => 'Assistente de atualização',
  'LBL_PATCHUPGRADES' => 'Patch Upgrades',
  'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Verificação Preflight em progresso',
  'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Cópia de arquivos em andamento',
  'LBL_PROCESSING' => 'Processando',
  'LBL_RECOMMENDED_PHP_VERSION' => '. A versão PHP recomendada é a 5.2.1 ou acima)',
  'LBL_SELECT_FILE' => 'selecione um arquivo:',
  'LBL_START_UPGRADE_IN_PROGRESS' => 'Iniciar em progresso',
  'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Verificações de Sistema em progresso',
  'LBL_THEMES' => 'Temas',
  'LBL_UPGRADE' => 'Atualização:',
  'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'atualização de Cancelar e Limpar em progresso',
  'LBL_UPGRADE_IN_PROGRESS' => 'em progresso',
  'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'atualização de Scripts em execução',
  'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Sumário de atualização em progresso',
  'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'atualização pode demorar algum tempo',
  'LBL_UPGRADE_TIME_ELAPSED' => 'Tempo decorrido',
  'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Verificações de carregamento em progresso',
  'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Carregando pacote de atualização...',
  'LBL_UPLOAD_FILE_NOT_FOUND' => 'arquivo de carregamento não encontrado',
  'LBL_UPLOAD_SUCCESS' => 'O pacote de atualização foi carregado com sucesso. Clique em Avançar para executar uma verificação final.',
  'LBL_UPLOAD_UPGRADE' => 'Carregar uma atualização:',
  'LBL_UW_ACCEPT_THE_LICENSE' => 'Aceitar Licença',
  'LBL_UW_BACKUP' => 'arquivo de Backup',
  'LBL_UW_BACKUP_FILES_EXIST' => 'arquivos de Backup desta atualização não podem ser encontrados em',
  'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'arquivo de Backup',
  'LBL_UW_CANCEL_DESC' => 'O Assistente de Atualização foi cancelado. Todos os arquivos temporários e arquivos zip enviados foram apagados. Pressione "Próximo" para reiniciar o Assistente de Atualização.',
  'LBL_UW_CHARSET_SCHEMA_CHANGE' => 'Alterações de Character Set Schema',
  'LBL_UW_CHECKLIST' => 'Passos da atualização',
  'LBL_UW_CHECK_ALL' => 'Verificar todos',
  'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Backups dos arquivos sobrescritos estão no seguinte Diretório:',
  'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Fundir manualmente os seguintes arquivos:',
  'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Processo de atualização: Fundir Manualmente os arquivos',
  'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Por favor utilize o seu método preferido de diff para juntar os arquivos. Até então a sua instalação do SugarCRM estará incompleta.',
  'LBL_UW_COMMIT_DESC' => 'Clique em Avançar para executar scripts de atualização adicionais.',
  'LBL_UW_COMPLETE' => 'Completo',
  'LBL_UW_COMPLIANCE_ALL_OK' => 'Todas as exigências de configurações do sistema foram satisfeitas',
  'LBL_UW_COMPLIANCE_CALLTIME' => 'Configurações do PHP: Passagem de Tempo da chamada por Referência',
  'LBL_UW_COMPLIANCE_CURL' => 'Módulo de cURL',
  'LBL_UW_COMPLIANCE_DB' => 'Minimum Database Version',
  'LBL_UW_COMPLIANCE_IMAP' => 'Módulo IMAP',
  'LBL_UW_COMPLIANCE_MBSTRING' => 'Módulo MBStrings',
  'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'Parâmetro MBStrings mbstring.func_overload',
  'LBL_UW_COMPLIANCE_MEMORY' => 'Configurações PHP: Limite de Memória',
  'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES' => 'MS SQL Server & PHP Magic Quotes GPC',
  'LBL_UW_COMPLIANCE_MYSQL' => 'Versão mínima do MySQL',
  'LBL_UW_COMPLIANCE_PHP_INI' => 'Localização do php.ini',
  'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Versão mínima do PHP',
  'LBL_UW_COMPLIANCE_SAFEMODE' => 'Definições do PHP: Modo Seguro',
  'LBL_UW_COMPLIANCE_STREAM' => 'PHP Setting: Stream',
  'LBL_UW_COMPLIANCE_TITLE' => 'Verificar Definições do Servidor',
  'LBL_UW_COMPLIANCE_TITLE2' => 'Definições Detectadas',
  'LBL_UW_COMPLIANCE_XML' => 'XML Parsing',
  'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Zip Support',
  'LBL_UW_CONFIRM_LAYOUTS' => 'Confirme Layouts',
  'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Resultados da confirmação de Layouts',
  'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Os layouts foram fundidos com êxito:',
  'LBL_UW_CONTINUE_CONFIRMATION' => 'Esta nova versão do Sugar contém um novo acordo de licença. Pretende continuar?',
  'LBL_UW_CONVERT_THE_LICENSE' => 'Converter Licença',
  'LBL_UW_COPIED_FILES_TITLE' => 'arquivos copiados com sucesso',
  'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES' => 'Módulos atualizados/Personalizados',
  'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE' => 'Custom Table Schema Changes',
  'LBL_UW_DB_CHOICE1' => 'Assistente de atualização Executa SQL',
  'LBL_UW_DB_CHOICE2' => 'Queries SQL Manuais',
  'LBL_UW_DB_INSERT_FAILED' => 'INSERT falhou - resultados comparados diferem',
  'LBL_UW_DB_ISSUES' => 'Edições da base de dados',
  'LBL_UW_DB_ISSUES_PERMS' => 'Privilégios da base de dados',
  'LBL_UW_DB_METHOD' => 'Método de atualização da base de dados',
  'LBL_UW_DB_NO_ERRORS' => 'Todos os privilégios disponíveis',
  'LBL_UW_DB_PERMS' => 'Privilégio necessário',
  'LBL_UW_DESC_MODULES_INSTALLED' => 'As seguintes atualizações foram instaladas:',
  'LBL_UW_DORP_THE_OLD_SCHMEA' => 'Pretende que o Sugar remova o obsoleto 451 Schema?',
  'LBL_UW_DROP_SCHEMA_MANUAL' => 'Pós-atualização de Remoção Manual de Schema',
  'LBL_UW_DROP_SCHEMA_METHOD' => 'Método Antigo de Remoção de Schema',
  'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Wizard de atualização Remove antigo 451 schema',
  'LBL_UW_END_DESC' => 'Parabéns, o seu sistema está agora atualizado.',
  'LBL_UW_END_DESC2' => 'Se escolheu executar manualmente qualquer passo tal como juntar um arquivo ou SQL queries, por favor faça isso agora. O seu sistema não estará estável enquanto estes passos não forem concluídos.',
  'LBL_UW_END_LOGOUT' => 'Por favor saia da sua conta se planeia uma atualização de nível superior ao desta correcção/atualização',
  'LBL_UW_END_LOGOUT2' => 'Sair',
  'LBL_UW_END_LOGOUT_PRE' => 'A atualização está completa.',
  'LBL_UW_END_LOGOUT_PRE2' => 'Clique em "Concluído" para sair do Wizard de atualizações.',
  'LBL_UW_FILE' => 'Nome do arquivo',
  'LBL_UW_FILES_QUEUED' => 'As seguintes atualizações estão prontas para serem instaladas:',
  'LBL_UW_FILES_REMOVED' => 'Os seguintes arquivos serão removidos do sistema:',
  'LBL_UW_FILE_DELETED' => 'foi removido.',
  'LBL_UW_FILE_GROUP' => 'Grupo',
  'LBL_UW_FILE_ISSUES' => 'Edições do arquivo',
  'LBL_UW_FILE_ISSUES_PERMS' => 'Permissões do arquivo',
  'LBL_UW_FILE_NEEDS_DIFF' => 'arquivo requer manual Diff',
  'LBL_UW_FILE_NO_ERRORS' => 'Todos os arquivos podem ser escritos',
  'LBL_UW_FILE_OWNER' => 'Proprietário',
  'LBL_UW_FILE_PERMS' => 'Permissões',
  'LBL_UW_FILE_UPLOADED' => 'foi carregado',
  'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED' => 'Os módulos seguintes estão detectados como personalizados e preservados',
  'LBL_UW_FOLLOWING_MODULES_UPGRADED' => 'Os módulos seguintes estão detectados como personalizados em Studio e têm sido atualizados',
  'LBL_UW_FROZEN' => 'As etapas requeridas devem ser terminadas antes de continuar.',
  'LBL_UW_HIDE_DETAILS' => 'Esconder Detalhes',
  'LBL_UW_INCLUDING' => 'Incluindo',
  'LBL_UW_INCOMPLETE' => 'Incompleto',
  'LBL_UW_INSTALL' => 'arquivo INSTALL',
  'LBL_UW_IN_PROGRESS' => 'Em processamento',
  'LBL_UW_MANUAL_MERGE' => 'Fundir arquivos',
  'LBL_UW_MODULE_READY' => 'O Módulo está pronto para ser instalado. Clique em "Commit" para continuar com a instalação.',
  'LBL_UW_MODULE_READY_UNINSTALL' => 'O Módulo está pronto para ser desinstalado. Clique em "Commit" para continuar com a instalação.',
  'LBL_UW_NEXT_TO_UPLOAD' => 'Clique em Avançar para carregar pacotes de atualização.',
  'LBL_UW_NONE' => 'Nenhum',
  'LBL_UW_NOT_AVAILABLE' => 'Não disponível',
  'LBL_UW_NO_INSTALLED_UPGRADES' => 'Nenhuma atualização gravada detectada.',
  'LBL_UW_OVERWRITE_DESC' => 'Todos os arquivos alterados serão sobrescritos - incluindo qualquer codificação à medida e alterações feitas no modelo. Você tem certeza que deseja continuar?',
  'LBL_UW_OVERWRITE_FILES' => 'Método de Fusão',
  'LBL_UW_OVERWRITE_FILES_CHOICE1' => 'Sobrescrever todos os arquivos',
  'LBL_UW_OVERWRITE_FILES_CHOICE2' => 'Fundir Manualmente - Preservar todos',
  'LBL_UW_PATCH_READY' => 'O patch está pronto para prosseguir. Clique no botão &quot;Instalar&quot; abaixo para completar o processo de atualização.',
  'LBL_UW_PATCH_READY2' => '<b>Observação: Layout à medida encontrado</b><BR><BR>O(s) seguinte(s) arquivo(s) têm um novo(s) campo(s) ou tela de layout modificada(s) via o Studio. O patch que está a preparar para instalar contém mudanças no(s) arquivo(s). Para <u>cada arquivo</u> deverá:<BR><BR><li><b>[Default]</b>Reter sua versão deixando o checkbox vazio. As modificações no patch serão ignorados. ou.</li><BR><li>Aceite os arquivos de atualização selecionando o checkbox. Os seus layouts deverão ser aplicados novamente via o Studio</li>',
  'LBL_UW_PREFLIGHT_ADD_TASK' => 'Criar um item da tarefa para fundir manualmente?',
  'LBL_UW_PREFLIGHT_COMPLETE' => 'Verificar Preflight',
  'LBL_UW_PREFLIGHT_DIFF' => 'Diferenciado',
  'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Deseja receber um e-mail de aviso sobre a Fusão Manual?',
  'LBL_UW_PREFLIGHT_FILES_DESC' => 'Os arquivos listados abaixo foram modificados. Itens não marcados que exigem uma junção manual. Qualquer mudança detectada no layout será automaticamente desmarcada; marque qualquer uma que possa ser sobrescrita.',
  'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Sem necessidade.',
  'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Não é necessário fundir arquivos manualmente.',
  'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'arquivos preservados automaticamente',
  'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Todos os testes Preflight aprovados. Pressione "Próximo" para submeter estas modificações.',
  'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Clique em Avançar copiar os arquivos atualizados para o sistema.',
  'LBL_UW_PREFLIGHT_TESTS_PASSED3' => 'Por favor, repare que o resto do processo de atualização é obrigatório, e clicando em Seguinte, terá que concluir o processo. Se não deseja prosseguir, clique no botão cancelar.',
  'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Substituir todos os arquivos',
  'LBL_UW_REBUILD_TITLE' => 'Resultado da reconstrução',
  'LBL_UW_REPAIR_INDEX' => 'Para melhorar a performance da sua base de dados, por favor execute o <a href="http://dev.lampadacrm.com.br/apache/sugar45/Translation/index.php?module=Administration&action=RepairIndex">Reparar Índices</> script.',
  'LBL_UW_SCHEMA_CHANGE' => 'Alterar Schema',
  'LBL_UW_SHOW' => 'Mostrar',
  'LBL_UW_SHOW_COMPLIANCE' => 'Mostrar Definições detectadas.',
  'LBL_UW_SHOW_DB_PERMS' => 'Mostrar permissões da Base de Dados em falta.',
  'LBL_UW_SHOW_DETAILS' => 'Mostrar Detalhes',
  'LBL_UW_SHOW_DIFFS' => 'Mostrar arquivos que requerem fusão manual',
  'LBL_UW_SHOW_NW_FILES' => 'Mostrar arquivos com Más Permissões',
  'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Mostrar Schema Antigo que pode ser removido',
  'LBL_UW_SHOW_SCHEMA' => 'Mostrar Schema Change Script',
  'LBL_UW_SHOW_SQL_ERRORS' => 'Mostrar Más Queries',
  'LBL_UW_SKIPPED_FILES_TITLE' => 'arquivos Ignorados',
  'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Queries Ignoradas',
  'LBL_UW_SKIPPING_FILE_OVERWRITE' => 'Ignorar arquivos sobrescritos -  Fundir manualmente os selecionados.',
  'LBL_UW_SQL_RUN' => 'Verificar quando o SQL foi executado manualmente',
  'LBL_UW_START_DESC' => 'Bem-vindo ao Assistente de atualização SugarCRM. Este ambiente é projetado para ajudar os administradores quando forem fazer a atualização do SugarCRM. Por favor siga as instruções dadas cuidadosamente.',
  'LBL_UW_START_DESC2' => 'Recomendamos que realize a atualização num servidor clone antes de realizar no servidor de produção. Por favor faça o backup da sua base de dados e arquivos do sistema (todos os arquivos na sua pasta SugarCRM) antes de realizar a operação - prevenir sempre é melhor do que remediar.',
  'LBL_UW_START_DESC3' => 'Clique em Avançar para executar uma verificação de sistema para se certificar de que o sistema está pronto para o atualização. A verificações inclui permissões de arquivos e privilégios de base de dados, bem como configurações do servidor.',
  'LBL_UW_START_UPGRADED_UW_DESC' => 'O novo Assistente de atualização irá agora retomar o processo de atualização. Por favor continue a sua atualização.',
  'LBL_UW_START_UPGRADED_UW_TITLE' => 'Bem-Vindo ao Novo Assistente de atualização',
  'LBL_UW_SYSTEM_CHECK_CHECKING' => 'A verificar, por favor espere. Isto pode levar mais do que 30 segundos.',
  'LBL_UW_SYSTEM_CHECK_FILES' => 'arquivos',
  'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START' => 'Procurando todos os arquivos pertinentes para a verificação',
  'LBL_UW_SYSTEM_CHECK_FOUND' => 'Encontrado',
  'LBL_UW_TITLE' => 'Assistente de atualização',
  'LBL_UW_TITLE_CANCEL' => 'Cancelar',
  'LBL_UW_TITLE_COMMIT' => 'Commit Upgrade',
  'LBL_UW_TITLE_END' => 'Debrief',
  'LBL_UW_TITLE_LAYOUTS' => 'Confirme Layouts',
  'LBL_UW_TITLE_PREFLIGHT' => 'Verificação Preflight',
  'LBL_UW_TITLE_START' => 'Iniciar',
  'LBL_UW_TITLE_SYSTEM_CHECK' => 'Verificações do Sistema',
  'LBL_UW_TITLE_UPLOAD' => 'Carregamento da Pacote',
  'LBL_UW_UNINSTALL' => 'Desinstalar',
  'LBL_WORKFLOW' => 'Work Flow',
);

