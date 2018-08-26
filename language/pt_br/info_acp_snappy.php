<?php
/**
*
* @package BBembed
* @copyright (c) 2016 SiteSplat All rights reserved
* @license Proprietary
* Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 1.1.13] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	
	'SS_HELPER_NOTY'	            => 'SiteSplat BBcore não existe!<br />Baixe o <a href="http://sitesplat.com" target="_blank">BBcore</a> e copie a pasta BBcore na sua pasta de extensão de sitesplat.',
	'SNAPPY_NOTICE'				    => '<div style="width:80%;margin:20px auto;"><p>Não há configurações específicas para esta extensão. Lembre-se de ativar a opção de resposta rápida do phpBB em: <strong>%1$s &#187; %2$s &#187; %3$s "Permitir resposta rápida".</strong><br />Por favor note, se você tem a extensão <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=23" target="_blank">IMGUR</a> instalada você também pode ativar ou desativar a opção IMGUR em resposta rápida.<br />A opção está em: <strong>ACP &#187; Geral &#187; Configuração da forum &#187; Configurações de anexo "Permitir IMGUR na Smart Snappy Reply"</strong></p></div>',
	
));

