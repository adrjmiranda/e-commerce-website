<?php

use Latte\Runtime as LR;

/** source: site/layouts/master.blade.php */
final class Template_b0c4ffc5a7 extends Latte\Runtime\Template
{
	public const Source = 'site/layouts/master.blade.php';

	public const Blocks = [
		['title' => 'blockTitle', 'scripts' => 'blockScripts', 'content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($base_url)) /* line 8 */;
		echo '/favicon.ico" type="image/x-icon" />
    <title>';
		$this->renderBlock('title', get_defined_vars()) /* line 9 */;
		echo '</title>

    <!-- Scripts -->

';
		$this->renderBlock('scripts', get_defined_vars()) /* line 13 */;
		echo '
    <!-- Styles -->

    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($base_url)) /* line 17 */;
		echo '/assets/css/index.css" />
</head>

<body>
    ';
		$this->renderBlock('content', get_defined_vars()) /* line 21 */;
		echo '
</body>

</html>
';
	}


	/** {block title} on line 9 */
	public function blockTitle(array $ʟ_args): void
	{
	}


	/** {block scripts} on line 13 */
	public function blockScripts(array $ʟ_args): void
	{
	}


	/** {block content} on line 21 */
	public function blockContent(array $ʟ_args): void
	{
		echo ' ';
	}
}
