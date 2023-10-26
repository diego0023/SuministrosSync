<div class="">

    <h1>PEDIDOS DE TIENDAS</h1>


    <div class="mb-6">
        <label for="id_producto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Producto:</label>
        <input type="text" wire:model="id_producto" id="id_producto;" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>

    <div class="mb-6">
        <label for="cantidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cantidad:</label>
        <input type="text" wire:model="cantidad" id="cantidad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>

    <div class="mb-6">
        <label for="tienda" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tienda:</label>
        <input type="text" wire:model="tienda" id="tienda" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        <span class="text-danger">@error('nis'){{ $message }}@enderror</span>
    </div>



    <div class="mb-6">
        <label for="fecha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha:</label>
        <input type="text" wire:model="fecha" id="fecha" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>

    <br>

    <button wire:click="savePedido" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Hacer Pedido</button>

    <script src="https://cdn.tailwindcss.com"></script>
</div>
