<div id="cart" class="fixed right-[-24rem] top-0 w-screen h-screen bg-white px-4 sm:max-w-96 pt-12 z-50">
    <button id="close_cart"
        class="absolute right-8 top-10 text-2xl opacity-60 hover:opacity-100 hover:scale-105 transition-all">
        <i class="ri-close-large-line pointer-events-none"></i>
    </button>

    <span class="uppercase text-center w-full block text-black text-md font-semibold mb-8">Your cart</span>

    <div
        class="flex flex-col gap-6 items-center overflow-scroll min-h-screen max-h-screen pt-4 pl-4 pr-4 pb-44 px-2 rounded-sm">
        {include 'cart_product_card.blade.php'}
        {include 'cart_product_card.blade.php'}
        {include 'cart_product_card.blade.php'}
        {include 'cart_product_card.blade.php'}
        {include 'cart_product_card.blade.php'}
        {include 'cart_product_card.blade.php'}
        {include 'cart_product_card.blade.php'}
        {include 'cart_product_card.blade.php'}
        {include 'cart_product_card.blade.php'}
        {include 'cart_product_card.blade.php'}
        {include 'cart_product_card.blade.php'}
        {include 'cart_product_card.blade.php'}
    </div>

    <div class="absolute right-0 bottom-0 bg-white z-20 w-full h-16 flex items-center justify-center px-6">
        <a href="#"
            class="h-10 justify-center items-center font-medium rounded-md flex flex-1 bg-green-500 hover:bg-green-600 transition-all text-white">Checkout</a>
    </div>
</div>
