<?php

use Latte\Runtime as LR;

/** source: site/partials/product_card.blade.php */
final class Template_e292000763 extends Latte\Runtime\Template
{
	public const Source = 'site/partials/product_card.blade.php';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="relative">
    <a href="#" class="h-[32rem] sm:h-96 w-full block overflow-hidden">
        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($base_url)) /* line 3 */;
		echo '/assets/img/product_cover.jpg" alt="..."
            class="rounded-sm h-full w-full object-cover hover:scale-105 transition-all">
    </a>

    <button type="button"
        class="absolute top-4 right-4 bg-black bg-opacity-25 rounded-[50%] h-8 w-8 text-white hover:text-black hover:scale-105 transition-all">
        <i class="ri-heart-line pointer-events-none"></i>
    </button>

    <div class="text-center flex flex-col my-4">
        <a href="#" class="capitalize font-light whitespace-nowrap text-ellipsis overflow-hidden">Product name
            lorem</a>
        <span>$ 32.33</span>
    </div>

    <a href="#"
        class="text-center w-full block bg-yellow text-white rounded-sm py-1 hover:scale-105 transition-all">Check</a>
</div>
';
	}
}
