<?php

use Latte\Runtime as LR;

/** source: site/public/home.html */
final class Template_16b8a5d1ca extends Latte\Runtime\Template
{
	public const Source = 'site/public/home.html';


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
		<h1>Home</h1>
	</body>
</html>
';
	}
}
