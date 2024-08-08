<?php

use Latte\Runtime as LR;

/** source: site/partials/logo.blade.php */
final class Template_b1a127fdae extends Latte\Runtime\Template
{
	public const Source = 'site/partials/logo.blade.php';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<a href="/" class="logo">
    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($base_url)) /* line 2 */;
		echo '/assets/img/logo.png" alt="Logo">
    <span>Shopper</span>
</a>
';
	}
}
