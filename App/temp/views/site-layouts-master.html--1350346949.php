<?php

use Latte\Runtime as LR;

/** source: site/layouts/master.html */
final class Template_1350346949 extends Latte\Runtime\Template
{
	public const Source = 'site/layouts/master.html';

	public const Blocks = [
		['content' => 'blockContent'],
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
		<link
			rel="shortcut icon"
			href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($base_url)) /* line 9 */;
		echo '/favicon.ico"
			type="image/x-icon"
		/>
		<title>';
		echo LR\Filters::escapeHtmlText($page_title) /* line 12 */;
		echo '</title>
	</head>
	<body>
		';
		$this->renderBlock('content', get_defined_vars()) /* line 15 */;
		echo '
	</body>
</html>
';
	}


	/** {block content} on line 15 */
	public function blockContent(array $ʟ_args): void
	{
		echo ' ';
	}
}
