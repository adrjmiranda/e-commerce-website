<?php

use Latte\Runtime as LR;

/** source: site/partials/searchbar.blade.php */
final class Template_c07cbce0f9 extends Latte\Runtime\Template
{
	public const Source = 'site/partials/searchbar.blade.php';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div>
    <div class="container flex justify-between items-center py-8">
        <a href="/" class="logo">
            <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($base_url)) /* line 4 */;
		echo '/assets/img/logo.png" alt="Logo">
            <span class="font-special-font">Shopper</span>
        </a>

        <div class="search_form">
            <form action="#" class="flex items-center">
                <select name="department"
                    class="bg-white border-[1px] h-12 capitalize px-2 cursor-pointer border-black flex-1">
                    <option value="all" selected>All departments</option>
                </select>
                <input type="search" name="search" placeholder="What do you need?"
                    class="border-r-[1px] border-t-[1px] border-b-[1px] border-l-0 h-12 px-2 border-black flex-1 placeholder:font-light">
                <button type="submit" class="bg-yellow h-12 w-12 flex justify-center items-center text-black">
                    <i class="ri-search-2-line"></i>
                </button>
            </form>
        </div>

        <div class="info">
            <a href="#" class="favorite">
                <i class="ri-heart-line"></i>
            </a>
            <button class="cart">
                <i class="ri-shopping-bag-4-line"></i>
            </button>
            <span class="price">$150.00</span>
        </div>
    </div>
</div>
';
	}
}
