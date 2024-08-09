<?php

use Latte\Runtime as LR;

/** source: site/partials/cart_product_card.blade.php */
final class Template_1a3245e470 extends Latte\Runtime\Template
{
	public const Source = 'site/partials/cart_product_card.blade.php';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="flex gap-2 justify-between w-full shadow-lg shadow-slate-500/50 p-2 rounded-md">
    <div class="h-16 w-16">
        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($base_url)) /* line 3 */;
		echo '/assets/img/product_cover.jpg" alt="..."
            class="h-full w-full rounded-[50%] object-cover">
    </div>

    <div class="flex flex-col justify-between">
        <span
            class="whitespace-nowrap text-ellipsis overflow-hidden flex-1 max-w-36 sm:max-w-44 capitalize font-light">Product
            name
            lorem Lorem
            ipsum
            dolor sit amet
            consectetur adipisicing elit. Ea placeat hic ut alias, quis ducimus, commodi iste ratione, totam obcaecati
            nobis dolorum itaque sint nihil inventore. Fugit cum vitae aperiam.</span>

        <div class="flex gap-2 items-center">
            <button type="button" class="bg-slate-300 p-[.2rem] rounded-sm">
                <i class="ri-subtract-line pointer-events-none"></i>
            </button>
            <span>1</span>
            <button type="button" class="bg-slate-300 p-[.2rem] rounded-sm">
                <i class="ri-add-line pointer-events-none"></i>
            </button>
        </div>
    </div>

    <div>
        <button type="button">
            <i class="ri-delete-bin-5-line"></i>
        </button>
    </div>
</div>
';
	}
}
