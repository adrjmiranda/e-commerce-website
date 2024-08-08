<?php

use Latte\Runtime as LR;

/** source: site/public/home.blade.php */
final class Template_5e08e30fce extends Latte\Runtime\Template
{
	public const Source = 'site/public/home.blade.php';

	public const Blocks = [
		['title' => 'blockTitle', 'scripts' => 'blockScripts', 'content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo "\n";
		$this->renderBlock('title', get_defined_vars()) /* line 3 */;
		echo '

';
		$this->renderBlock('scripts', get_defined_vars()) /* line 5 */;
		echo "\n";
		$this->renderBlock('content', get_defined_vars()) /* line 10 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->parentName = '../layouts/master.blade.php';
		return get_defined_vars();
	}


	/** {block title} on line 3 */
	public function blockTitle(array $ʟ_args): void
	{
		echo 'Home';
	}


	/** {block scripts} on line 5 */
	public function blockScripts(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($base_url)) /* line 6 */;
		echo '/assets/js/main_banner_slide.bundle.js" defer></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($base_url)) /* line 7 */;
		echo '/assets/js/main_banner_magictime.bundle.js" defer></script>
';
	}


	/** {block content} on line 10 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo "\n";
		$this->createTemplate('../partials/main_banner.blade.php', $this->params, 'include')->renderToContentType('html') /* line 12 */;
		echo '<div class="container">
    <h1>Home</h1>
</div>
';
	}
}
