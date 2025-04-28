<div class="bg-white rounded-lg shadow-md p-6 mb-8">
    <h2 class="text-xl font-semibold text-gray-800 mb-6">Pilih Produk untuk Refill</h2>

    <div class="space-y-4" id="productContainer">
        <!-- Product 1 -->
        <div class="border border-gray-200 rounded-lg p-4 transition-colors cursor-pointer" data-radio="product1">
            <div class="flex items-start">
                <input type="radio" id="product1" name="product" class="mt-1 mr-3 hidden" value="product1">
                <div class="flex-1">
                    <div class="flex justify-between items-start">
                        <div>
                            <label for="product1" class="block font-medium text-gray-800 cursor-pointer">ABC Dry
                                Chemical</label>
                            <div class="grid grid-cols-2 gap-2 mt-2 text-sm text-gray-600">
                                <div><span class="font-medium">SN:</span> FE-K002</div>
                                <div><span class="font-medium">Ukuran:</span> 9 kg</div>
                                <div><span class="font-medium">Refill Terakhir:</span> 2024-01-15</div>
                            </div>
                        </div>
                        <div class="flex items-center ml-4">
                            <button type="button"
                                class="quantity-minus w-8 h-8 flex items-center justify-center border border-gray-300 rounded-l-md"
                                data-product="product1">-</button>
                            <input type="number" min="1" value="0"
                                class="quantity-input w-12 h-8 text-center border-t border-b border-gray-300"
                                data-product="product1">
                            <button type="button"
                                class="quantity-plus w-8 h-8 flex items-center justify-center border border-gray-300 rounded-r-md"
                                data-product="product1">+</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="border border-gray-200 rounded-lg p-4 transition-colors cursor-pointer" data-radio="product2">
            <div class="flex items-start">
                <input type="radio" id="product2" name="product" class="mt-1 mr-3 hidden" value="product2">
                <div class="flex-1">
                    <div class="flex justify-between items-start">
                        <div>
                            <label for="product2" class="block font-medium text-gray-800 cursor-pointer">CO2</label>
                            <div class="grid grid-cols-2 gap-2 mt-2 text-sm text-gray-600">
                                <div><span class="font-medium">SN:</span> FE-K002</div>
                                <div><span class="font-medium">Ukuran:</span> 9 kg</div>
                                <div><span class="font-medium">Refill Terakhir:</span> 2024-02-20</div>
                            </div>
                        </div>
                        <div class="flex items-center ml-4">
                            <button type="button"
                                class="quantity-minus w-8 h-8 flex items-center justify-center border border-gray-300 rounded-l-md"
                                data-product="product2">-</button>
                            <input type="number" min="1" value="0"
                                class="quantity-input w-12 h-8 text-center border-t border-b border-gray-300"
                                data-product="product2">
                            <button type="button"
                                class="quantity-plus w-8 h-8 flex items-center justify-center border border-gray-300 rounded-r-md"
                                data-product="product2">+</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="border border-gray-200 rounded-lg p-4 transition-colors cursor-pointer" data-radio="product3">
            <div class="flex items-start">
                <input type="radio" id="product3" name="product" class="mt-1 mr-3 hidden" value="product3">
                <div class="flex-1">
                    <div class="flex justify-between items-start">
                        <div>
                            <label for="product3" class="block font-medium text-gray-800 cursor-pointer">Foam</label>
                            <div class="grid grid-cols-2 gap-2 mt-2 text-sm text-gray-600">
                                <div><span class="font-medium">SN:</span> FE-K003</div>
                                <div><span class="font-medium">Ukuran:</span> 9 kg</div>
                                <div><span class="font-medium">Refill Terakhir:</span> 2023-11-10</div>
                            </div>
                        </div>
                        <div class="flex items-center ml-4">
                            <button type="button"
                                class="quantity-minus w-8 h-8 flex items-center justify-center border border-gray-300 rounded-l-md"
                                data-product="product3">-</button>
                            <input type="number" min="1" value="0"
                                class="quantity-input w-12 h-8 text-center border-t border-b border-gray-300"
                                data-product="product3">
                            <button type="button"
                                class="quantity-plus w-8 h-8 flex items-center justify-center border border-gray-300 rounded-r-md"
                                data-product="product3">+</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="flex justify-between pt-10">
        <a href="#"
            class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors">
            Kembali
        </a>
        <a id="nextButton" href="{{ route('customer.refile.jadwalandlocation') }}"
            class="px-6 py-2 bg-gray-400 text-white rounded-md pointer-events-none">
            Lanjut
        </a>
    </div>
</div>

<!-- Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const productContainers = document.querySelectorAll('[data-radio]');
        const radios = document.querySelectorAll('input[name="product"]');
        const nextButton = document.getElementById('nextButton');
        const quantityInputs = document.querySelectorAll('.quantity-input');
        const minusButtons = document.querySelectorAll('.quantity-minus');
        const plusButtons = document.querySelectorAll('.quantity-plus');

        // Product selection logic
        productContainers.forEach(container => {
            container.addEventListener('click', function(e) {
                // Don't trigger selection if clicking on quantity controls
                if (e.target.closest('.quantity-minus') || e.target.closest('.quantity-plus') ||
                    e.target.classList.contains('quantity-input')) {
                    return;
                }

                const radioId = container.getAttribute('data-radio');
                const radioInput = document.getElementById(radioId);

                // Set selected radio
                radioInput.checked = true;

                // Remove active state from all
                productContainers.forEach(c => c.classList.remove('border-blue-500'));
                productContainers.forEach(c => c.classList.add('border-gray-200'));

                // Add active state to clicked
                container.classList.remove('border-gray-200');
                container.classList.add('border-red-500');

                // Enable Next button
                nextButton.classList.remove('bg-gray-400', 'pointer-events-none');
                nextButton.classList.add('bg-red-800', 'hover:bg-red-800');
            });
        });

        // Quantity control logic
        minusButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.stopPropagation();
                const productId = button.getAttribute('data-product');
                const input = document.querySelector(
                    `.quantity-input[data-product="${productId}"]`);
                if (parseInt(input.value) > 1) {
                    input.value = parseInt(input.value) - 1;
                }
            });
        });

        plusButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.stopPropagation();
                const productId = button.getAttribute('data-product');
                const input = document.querySelector(
                    `.quantity-input[data-product="${productId}"]`);
                input.value = parseInt(input.value) + 1;
            });
        });

        // Prevent manual input of values less than 1
        quantityInputs.forEach(input => {
            input.addEventListener('change', function() {
                if (parseInt(this.value) < 1) {
                    this.value = 1;
                }
            });
        });
    });
</script>
