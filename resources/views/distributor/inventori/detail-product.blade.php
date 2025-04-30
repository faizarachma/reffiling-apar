<button onclick="openDetailModal()" class="bg-blue-600 hover:bg-blue-300 rounded-full p-2">
    <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
        </g>
        <g id="SVGRepo_iconCarrier">
            <path
                d="M9.5 2C8.67157 2 8 2.67157 8 3.5V4.5C8 5.32843 8.67157 6 9.5 6H14.5C15.3284 6 16 5.32843 16 4.5V3.5C16 2.67157 15.3284 2 14.5 2H9.5Z"
                fill="#ffffff"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M6.5 4.03662C5.24209 4.10719 4.44798 4.30764 3.87868 4.87694C3 5.75562 3 7.16983 3 9.99826V15.9983C3 18.8267 3 20.2409 3.87868 21.1196C4.75736 21.9983 6.17157 21.9983 9 21.9983H15C17.8284 21.9983 19.2426 21.9983 20.1213 21.1196C21 20.2409 21 18.8267 21 15.9983V9.99826C21 7.16983 21 5.75562 20.1213 4.87694C19.552 4.30764 18.7579 4.10719 17.5 4.03662V4.5C17.5 6.15685 16.1569 7.5 14.5 7.5H9.5C7.84315 7.5 6.5 6.15685 6.5 4.5V4.03662ZM7 9.75C6.58579 9.75 6.25 10.0858 6.25 10.5C6.25 10.9142 6.58579 11.25 7 11.25H7.5C7.91421 11.25 8.25 10.9142 8.25 10.5C8.25 10.0858 7.91421 9.75 7.5 9.75H7ZM10.5 9.75C10.0858 9.75 9.75 10.0858 9.75 10.5C9.75 10.9142 10.0858 11.25 10.5 11.25H17C17.4142 11.25 17.75 10.9142 17.75 10.5C17.75 10.0858 17.4142 9.75 17 9.75H10.5ZM7 13.25C6.58579 13.25 6.25 13.5858 6.25 14C6.25 14.4142 6.58579 14.75 7 14.75H7.5C7.91421 14.75 8.25 14.4142 8.25 14C8.25 13.5858 7.91421 13.25 7.5 13.25H7ZM10.5 13.25C10.0858 13.25 9.75 13.5858 9.75 14C9.75 14.4142 10.0858 14.75 10.5 14.75H17C17.4142 14.75 17.75 14.4142 17.75 14C17.75 13.5858 17.4142 13.25 17 13.25H10.5ZM7 16.75C6.58579 16.75 6.25 17.0858 6.25 17.5C6.25 17.9142 6.58579 18.25 7 18.25H7.5C7.91421 18.25 8.25 17.9142 8.25 17.5C8.25 17.0858 7.91421 16.75 7.5 16.75H7ZM10.5 16.75C10.0858 16.75 9.75 17.0858 9.75 17.5C9.75 17.9142 10.0858 18.25 10.5 18.25H17C17.4142 18.25 17.75 17.9142 17.75 17.5C17.75 17.0858 17.4142 16.75 17 16.75H10.5Z"
                fill="#ffffff"></path>
        </g>
    </svg>
</button>

<div id="detailModal"
    class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 transition-opacity duration-300 ease-in-out p-4">
    <form method="POST" action="{{ route('create.products') }}" enctype="multipart/form-data">
        @csrf
        <div class="bg-white rounded-xl shadow-2xl w-full max-h-[90vh] flex flex-col">
            <!-- Modal Header -->
            <div class="p-6 border-b border-gray-200 flex justify-between items-center sticky top-0 bg-white z-10">
                <h2 class="text-xl font-bold text-gray-800">Detail Produk</h2>
                <button onclick="closeDetailModal()" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Scrollable Content Area -->
            <div class="overflow-y-auto p-6 flex-1 text-left">
                <!-- Bagian Informasi Dasar Produk -->
                <div class="mb-8 ">
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">Informasi Dasar
                        Produk</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="id_product" class="block text-sm font-medium text-gray-700">Kode Produk*</label>
                            <input type="text" name="id_product" id="id_product" maxlength="20" required readonly
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border">
                        </div>
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama Produk*</label>
                            <input type="text" name="name" id="name" maxlength="255" required
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border">
                        </div>
                        <div>
                            <label for="id_category_product"
                                class="block text-sm font-medium text-gray-700">Kategori*</label>
                            <select name="id_category_product" id="id_category_product" required
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border">
                                <option value="">Pilih Kategori</option>
                                <option value="1">Alat Pemadam Api</option>
                                <option value="2">Alat Keselamatan Kerja</option>
                                <option value="3">Alat Proteksi Diri</option>
                                <option value="4">Sistem Fire Alarm</option>
                                <option value="5">Fire Hydrant Equipment</option>
                                <option value="6">Safety Equipment</option>
                                <option value="7">First Aid Kit</option>
                                <option value="8">P3K dan Kesehatan</option>
                                <option value="9">Peralatan Rescue</option>
                                <option value="10">Pakaian Tahan Api</option>
                            </select>
                        </div>
                        <div>
                            <label for="id_subcategory_product" class="block text-sm font-medium text-gray-700">Sub
                                Kategori*</label>
                            <select name="id_subcategory_product" id="id_subcategory_product" required
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border">
                                <option value="">Pilih Sub Kategori</option>
                                <option value="1">APAR (Portable)</option>
                                <option value="2">APAB (Trolley)</option>
                                <option value="3">Fire Blanket</option>

                                <!-- Alat Keselamatan Kerja -->
                                <option value="4">Safety Helmet</option>
                                <option value="5">Safety Shoes</option>
                                <option value="6">Safety Vest</option>

                                <!-- Alat Proteksi Diri -->
                                <option value="7">Gas Mask</option>
                                <option value="8">Safety Goggles</option>
                                <option value="9">Safety Gloves</option>

                                <!-- Sistem Fire Alarm -->
                                <option value="10">Smoke Detector</option>
                                <option value="11">Heat Detector</option>
                                <option value="12">Control Panel</option>

                                <!-- Fire Hydrant Equipment -->
                                <option value="13">Hose Reel</option>
                                <option value="14">Nozzle</option>
                                <option value="15">Hydrant Valve</option>

                                <!-- Safety Equipment -->
                                <option value="16">Traffic Cone</option>
                                <option value="17">Barricade Tape</option>
                                <option value="18">Safety Signs</option>

                                <!-- First Aid Kit -->
                                <option value="19">Kotak P3K</option>
                                <option value="20">Alat Resusitasi</option>
                                <option value="21">Perban dan Plester</option>

                                <!-- P3K dan Kesehatan -->
                                <option value="22">Obat Luka</option>
                                <option value="23">Alat Cek Tekanan Darah</option>

                                <!-- Peralatan Rescue -->
                                <option value="24">Rescue Harness</option>
                                <option value="25">Rescue Rope</option>

                                <!-- Pakaian Tahan Api -->
                                <option value="26">Baju Tahan Api</option>
                                <option value="27">Sarung Tangan Tahan Panas</option>
                            </select>
                        </div>
                        <div>
                            <label for="create_sn" class="block text-sm font-medium text-gray-700">Create SN*</label>
                            <input type="text" name="create_sn" id="create_sn" required readonly
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border"
                                placeholder="Masukkan Serial Number">
                        </div>

                        <div class="mb-4">
                            <label for="pno" class="block text-sm font-medium text-gray-700">PNO*</label>
                            <input type="text" name="pno" id="pno" readonly
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border"
                                required>
                        </div>

                        <div>
                            <label for="expired_sni" class="block text-sm font-medium text-gray-700">Expired
                                SNI*</label>
                            <input type="number" id="expired_sni" name="expired_sni" required
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3 border">
                        </div>
                        <div>
                            <label for="warranty_sni" class="block text-sm font-medium text-gray-700">Warranty
                                SNI*</label>
                            <input type="number" id="warranty_sni" name="warranty_sni" required
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3 border ">
                        </div>

                    </div>

                </div>

                <!-- Bagian Harga dan Stok -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">Harga & Stok</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700">Harga Jual*</label>
                            <div class="relative mt-1">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500">Rp</span>
                                </div>
                                <input type="number" name="price" id="price" min="0" step="0.01"
                                    required
                                    class="block w-full pl-10 rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border">
                            </div>
                        </div>
                        <div>
                            <label for="price_lama" class="block text-sm font-medium text-gray-700">Harga Lama</label>
                            <div class="relative mt-1">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500">Rp</span>
                                </div>
                                <input type="number" name="price_lama" id="price_lama" min="0"
                                    class="block w-full pl-10 rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border">
                            </div>
                        </div>
                        <div>
                            <label for="stock" class="block text-sm font-medium text-gray-700">Stok*</label>
                            <input type="number" name="stock" id="stock" min="0" required
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border">
                        </div>
                        <div>
                            <label for="minqty" class="block text-sm font-medium text-gray-700">Min Qty</label>
                            <input type="number" name="minqty" id="minqty" min="1" value="1"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border">
                        </div>
                    </div>
                </div>

                <!-- Bagian Spesifikasi Produk -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">Spesifikasi Produk</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label for="weight" class="block text-sm font-medium text-gray-700">Berat (kg)</label>
                            <input type="number" name="weight" id="weight" min="0" step="0.01"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border">
                        </div>
                        <div>
                            <label for="panjang" class="block text-sm font-medium text-gray-700">Panjang (cm)</label>
                            <input type="number" name="panjang" id="panjang" min="0" step="0.01"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border">
                        </div>
                        <div>
                            <label for="lebar" class="block text-sm font-medium text-gray-700">Lebar (cm)</label>
                            <input type="number" name="lebar" id="lebar" min="0" step="0.01"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border">
                        </div>
                        <div>
                            <label for="tinggi" class="block text-sm font-medium text-gray-700">Tinggi (cm)</label>
                            <input type="number" name="tinggi" id="tinggi" min="0" step="0.01"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border">
                        </div>
                        <div>
                            <label for="type" class="block text-sm font-medium text-gray-700">Tipe Produk</label>
                            <input type="text" name="type" id="type"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border">
                        </div>
                        <div>
                            <label for="kapasitas" class="block text-sm font-medium text-gray-700">Kapasitas</label>
                            <input type="text" name="kapasitas" id="kapasitas"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border">
                        </div>
                    </div>
                </div>

                <!-- Bagian Khusus Produk Kebakaran -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">Spesifikasi Alat Kebakaran</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="fire_rating" class="block text-sm font-medium text-gray-700">Fire
                                Rating</label>
                            <input type="text" name="fire_rating" id="fire_rating"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border">
                        </div>
                        <div>
                            <label for="kelas_kebakaran" class="block text-sm font-medium text-gray-700">Kelas
                                Kebakaran</label>
                            <input type="text" name="kelas_kebakaran" id="kelas_kebakaran"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border">
                        </div>
                        <div>
                            <label for="tabung_silinder"
                                class="block text-sm font-medium text-gray-700">Tabung/Silinder</label>
                            <input type="text" name="tabung_silinder" id="tabung_silinder"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border">
                        </div>
                    </div>
                </div>

                <!-- Bagian Lainnya -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">Informasi Tambahan</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi
                                Produk</label>
                            <textarea name="description" id="description" rows="3" maxlength="255"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border"></textarea>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <label for="expired" class="block text-sm font-medium text-gray-700">Masa Expired
                                    (hari)</label>
                                <input type="number" name="expired" id="expired" min="0"
                                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border">
                            </div>
                            <div>
                                <label for="warranty" class="block text-sm font-medium text-gray-700">Garansi
                                    (hari)</label>
                                <input type="number" name="warranty" id="warranty" min="0"
                                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 py-2 px-3 border">
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="media" class="block text-sm font-medium text-gray-700">Upload Gambar Produk</label>
                    <input type="file" name="media" id="media" accept="image/*"
                        class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                </div>


            </div>



            <!-- Modal Footer (Sticky Bottom) -->
            <div class="p-4 border-t border-gray-200 sticky bottom-0 bg-white flex justify-end space-x-3">
                <button type="button" onclick="closeDetailModal()"
                    class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition duration-300 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    Batal
                </button>
                <button type="submit"
                    class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 shadow-sm">
                    Simpan Produk
                </button>
            </div>
        </div>
    </form>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {

        function openDetailModal() {
            const modal = document.getElementById('detailModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');

            setTimeout(() => {
                modal.querySelector('.bg-white').classList.remove('scale-95', 'opacity-0');
                modal.querySelector('.bg-white').classList.add('scale-100', 'opacity-100');
            }, 10);
        }

        function closeDetailModal() {
            const modal = document.getElementById('detailModal');
            modal.querySelector('.bg-white').classList.remove('scale-100', 'opacity-100');
            modal.querySelector('.bg-white').classList.add('scale-95', 'opacity-0');

            setTimeout(() => {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
            }, 300);
        }


        // Biar bisa dipakai dari luar script
        window.openDetailModal = openDetailModal;
        window.closeDetailModal = closeDetailModal;
    });
</script>
