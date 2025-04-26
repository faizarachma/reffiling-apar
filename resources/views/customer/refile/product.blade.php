 <div class="bg-white rounded-lg shadow-md p-6 mb-8">
     <h2 class="text-xl font-semibold text-gray-800 mb-6">Pilih Produk untuk Refill</h2>

     <div class="space-y-4">
         <!-- Product 1 -->
         <div class="border border-gray-200 rounded-lg p-4 hover:border-blue-500 transition-colors">
             <div class="flex items-start">
                 <input type="radio" id="product1" name="product" class="mt-1 mr-3" checked>
                 <div class="flex-1">
                     <label for="product1" class="block font-medium text-gray-800 cursor-pointer">ABC Dry
                         Chemical</label>
                     <div class="grid grid-cols-2 gap-2 mt-2 text-sm text-gray-600">
                         <div>
                             <span class="font-medium">SN:</span> FE-K002
                         </div>
                         <div>
                             <span class="font-medium">Ukuran:</span> 9 kg
                         </div>
                         <div>
                             <span class="font-medium">Refill Terakhir:</span> 2024-01-15
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Product 2 -->
         <div class="border border-gray-200 rounded-lg p-4 hover:border-blue-500 transition-colors">
             <div class="flex items-start">
                 <input type="radio" id="product2" name="product" class="mt-1 mr-3">
                 <div class="flex-1">
                     <label for="product2" class="block font-medium text-gray-800 cursor-pointer">CO2</label>
                     <div class="grid grid-cols-2 gap-2 mt-2 text-sm text-gray-600">
                         <div>
                             <span class="font-medium">SN:</span> FE-K002
                         </div>
                         <div>
                             <span class="font-medium">Ukuran:</span> 9 kg
                         </div>
                         <div>
                             <span class="font-medium">Refill Terakhir:</span> 2024-02-20
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Product 3 -->
         <div class="border border-gray-200 rounded-lg p-4 hover:border-blue-500 transition-colors">
             <div class="flex items-start">
                 <input type="radio" id="product3" name="product" class="mt-1 mr-3">
                 <div class="flex-1">
                     <label for="product3" class="block font-medium text-gray-800 cursor-pointer">Foam</label>
                     <div class="grid grid-cols-2 gap-2 mt-2 text-sm text-gray-600">
                         <div>
                             <span class="font-medium">SN:</span> FE-K003
                         </div>
                         <div>
                             <span class="font-medium">Ukuran:</span> 9 kg
                         </div>
                         <div>
                             <span class="font-medium">Refill Terakhir:</span> 2023-11-10
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
         <a onclick="window.location" href="{{ route('customer.refill.jadwalandlocation') }}"
             class="px-6 py-2 bg-red-800 text-white rounded-md hover:bg-red-800 transition-colors">
             Lanjut
         </a>
     </div>
 </div>

 <script>
     document.addEventListener('DOMContentLoaded', function() {
         const productRadios = document.querySelectorAll('input[name="product"]');
         productRadios.forEach(radio => {
             radio.addEventListener('change', function() {
                 // Handle the change event if needed
             });
         });
     });
 </script>
