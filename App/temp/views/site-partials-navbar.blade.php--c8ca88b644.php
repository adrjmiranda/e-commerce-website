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
        <ul class="flex text-white justify-between h-16 items-center">
            <li class="flex-1 flex justify-center items-center">
                <a href="#" class="flex-1 h-full flex gap-1 items-center justify-center"><i
                        class="ri-menu-line"></i>All
                    departments</a>

                <!-- TODO: dropmenu --->
                <ul>
                    <li></li>
                </ul>
            </li>

            <li class="border-l-2 border-white h-full flex items-center justify-center flex-1">
                <a href="#" class="flex-1 h-full flex items-center justify-center">Home</a>
            </li>

            <li class="border-l-2 border-white h-full flex items-center justify-center flex-1">
                <a href="#" class="flex-1 h-full flex items-center justify-center">Shop</a>
            </li>

            <li class="border-l-2 border-white h-full flex items-center justify-center flex-1">
                <a href="#" class="flex-1 h-full flex items-center justify-center">Collection</a>
            </li>

            <li class="border-l-2 border-white h-full flex items-center justify-center flex-1">
                <a href="#" class="flex-1 h-full flex items-center justify-center">Blog</a>
            </li>

            <li class="border-l-2 border-white h-full flex items-center justify-center flex-1">
                <a href="#" class="flex-1 h-full flex items-center justify-center">Contact</a>
            </li>

            <li class="border-l-2 border-white h-full flex items-center justify-center flex-1">
                <a href="#" class="flex-1 h-full flex items-center justify-center">Pages</a>
            </li>
        </ul>
    </div>
</div>
';
	}
}
