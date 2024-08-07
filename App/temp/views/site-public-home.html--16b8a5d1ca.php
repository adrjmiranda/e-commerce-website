<?php

use Latte\Runtime as LR;

/** source: site/public/home.html */
final class Template_16b8a5d1ca extends Latte\Runtime\Template
{
	public const Source = 'site/public/home.html';

	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo ' ';
		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->parentName = '../layouts/master.html';
		return get_defined_vars();
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		echo '
<h1>Home</h1>
';
	}
}
