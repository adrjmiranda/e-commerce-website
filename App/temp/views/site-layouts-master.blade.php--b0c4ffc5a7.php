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
    <!-- Remix Icon -->

    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($base_url)) /* line 17 */;
		echo '/assets/js/remixicon.bundle.js" defer></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($base_url)) /* line 18 */;
		echo '/assets/js/magictime.bundle.js" defer></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($base_url)) /* line 19 */;
		echo '/assets/js/navbar_toggle.bundle.js" defer></script>

    <!-- Styles -->

    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($base_url)) /* line 23 */;
		echo '/assets/css/index.css" />
</head>

<body class="relative">
';
		$this->createTemplate('../partials/contactbar.blade.php', $this->params, 'include')->renderToContentType('html') /* line 27 */;
		$this->createTemplate('../partials/searchbar.blade.php', $this->params, 'include')->renderToContentType('html') /* line 28 */;
		$this->createTemplate('../partials/navbar.blade.php', $this->params, 'include')->renderToContentType('html') /* line 29 */;
		echo '
    ';
		$this->renderBlock('content', get_defined_vars()) /* line 31 */;
		echo '

';
		$this->createTemplate('../partials/footer.blade.php', $this->params, 'include')->renderToContentType('html') /* line 33 */;
		echo "\n";
		$this->createTemplate('../partials/cart.blade.php', $this->params, 'include')->renderToContentType('html') /* line 35 */;
		echo '</body>

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


	/** {block content} on line 31 */
	public function blockContent(array $ʟ_args): void
	{
		echo ' ';
	}
}
