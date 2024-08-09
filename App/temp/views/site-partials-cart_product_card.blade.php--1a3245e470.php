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

		echo '<div>
    <div>
        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($base_url)) /* line 3 */;
		echo '/assets/img/product_cover.jpg" alt="...">
    </div>

    <div>
        <span>Product name lorem</span>
        <button type="button">
            <i class="ri-subtract-line"></i>
        </button>
        <span>1</span>
        <button type="button">
            <i class="ri-add-line"></i>
        </button>
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
