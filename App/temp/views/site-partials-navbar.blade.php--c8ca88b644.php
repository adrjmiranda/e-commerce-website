<?php

use Latte\Runtime as LR;

/** source: site/partials/navbar.blade.php */
final class Template_c8ca88b644 extends Latte\Runtime\Template
{
	public const Source = 'site/partials/navbar.blade.php';


	public function main(array $ʟ_args): void
	{
		echo '<div class="bg-black">
    <div class="container">
        <ul class="navbar_menu">
            <li class="navbar_first_item">
                <a href="#" class="navbar_drop_link"><i class="ri-menu-line"></i>All
                    departments</a>

                <!-- TODO: dropmenu --->
                <ul>
                    <li></li>
                </ul>
            </li>

            <li class="navbar_item">
                <a href="#" class="navbar_item_link">Home</a>
            </li>

            <li class="navbar_item">
                <a href="#" class="navbar_item_link">Shop</a>
            </li>

            <li class="navbar_item">
                <a href="#" class="navbar_item_link">Collection</a>
            </li>

            <li class="navbar_item">
                <a href="#" class="navbar_item_link">Blog</a>
            </li>

            <li class="navbar_item">
                <a href="#" class="navbar_item_link">Contact</a>
            </li>

            <li class="navbar_item">
                <a href="#" class="navbar_item_link">Pages</a>
            </li>
        </ul>

        <div id="navbar_toggle" class="w-full text-white md:hidden">
            <button type="button" class="w-full py-4 text-2xl">
                <span class="navbar_show_icon items-center justify-center pointer-events-none">
                    <i class="ri-menu-line pointer-events-none"></i>
                </span>
                <span class="navbar_hidden_icon hidden items-center justify-center text-yellow pointer-events-none">
                    <i class="ri-arrow-up-wide-line pointer-events-none"></i>
                </span>
            </button>
        </div>
    </div>
</div>
';
	}
}
