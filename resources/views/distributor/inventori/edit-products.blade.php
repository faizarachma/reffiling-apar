{{-- <a href="#" class="bg-yellow-600 hover:bg-yellow-400 rounded-full p-2 transition duration-200">
    <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
        </g>
        <g id="SVGRepo_iconCarrier">
            <path
                d="M11.4001 18.1612L11.4001 18.1612L18.796 10.7653C17.7894 10.3464 16.5972 9.6582 15.4697 8.53068C14.342 7.40298 13.6537 6.21058 13.2348 5.2039L5.83882 12.5999L5.83879 12.5999C5.26166 13.1771 4.97307 13.4657 4.7249 13.7838C4.43213 14.1592 4.18114 14.5653 3.97634 14.995C3.80273 15.3593 3.67368 15.7465 3.41556 16.5208L2.05445 20.6042C1.92743 20.9852 2.0266 21.4053 2.31063 21.6894C2.59466 21.9734 3.01478 22.0726 3.39584 21.9456L7.47918 20.5844C8.25351 20.3263 8.6407 20.1973 9.00498 20.0237C9.43469 19.8189 9.84082 19.5679 10.2162 19.2751C10.5343 19.0269 10.823 18.7383 11.4001 18.1612Z"
                fill="#ffffff"></path>
            <path
                d="M20.8482 8.71306C22.3839 7.17735 22.3839 4.68748 20.8482 3.15178C19.3125 1.61607 16.8226 1.61607 15.2869 3.15178L14.3999 4.03882C14.4121 4.0755 14.4246 4.11268 14.4377 4.15035C14.7628 5.0875 15.3763 6.31601 16.5303 7.47002C17.6843 8.62403 18.9128 9.23749 19.85 9.56262C19.8875 9.57563 19.9245 9.58817 19.961 9.60026L20.8482 8.71306Z"
                fill="#ffffff"></path>
        </g>
    </svg>
</a> --}}

<button onclick="openCreateModal()" class="bg-yellow-600 hover:bg-yellow-400 rounded-full p-2 transition duration-200">
    <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
        </g>
        <g id="SVGRepo_iconCarrier">
            <path
                d="M11.4001 18.1612L11.4001 18.1612L18.796 10.7653C17.7894 10.3464 16.5972 9.6582 15.4697 8.53068C14.342 7.40298 13.6537 6.21058 13.2348 5.2039L5.83882 12.5999L5.83879 12.5999C5.26166 13.1771 4.97307 13.4657 4.7249 13.7838C4.43213 14.1592 4.18114 14.5653 3.97634 14.995C3.80273 15.3593 3.67368 15.7465 3.41556 16.5208L2.05445 20.6042C1.92743 20.9852 2.0266 21.4053 2.31063 21.6894C2.59466 21.9734 3.01478 22.0726 3.39584 21.9456L7.47918 20.5844C8.25351 20.3263 8.6407 20.1973 9.00498 20.0237C9.43469 19.8189 9.84082 19.5679 10.2162 19.2751C10.5343 19.0269 10.823 18.7383 11.4001 18.1612Z"
                fill="#ffffff"></path>
            <path
                d="M20.8482 8.71306C22.3839 7.17735 22.3839 4.68748 20.8482 3.15178C19.3125 1.61607 16.8226 1.61607 15.2869 3.15178L14.3999 4.03882C14.4121 4.0755 14.4246 4.11268 14.4377 4.15035C14.7628 5.0875 15.3763 6.31601 16.5303 7.47002C17.6843 8.62403 18.9128 9.23749 19.85 9.56262C19.8875 9.57563 19.9245 9.58817 19.961 9.60026L20.8482 8.71306Z"
                fill="#ffffff"></path>
        </g>
    </svg>
</button>


<div id="createModalEdit"
    class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 transition-opacity duration-300 ease-in-out p-4">

    <div class="bg-white rounded-xl shadow-2xl w-full max-h-[90vh] flex flex-col">
        <!-- Modal Header -->
        <div class="p-6 border-b border-gray-200 flex justify-between items-center sticky top-0 bg-white z-10">
            <h2 class="text-xl font-bold text-gray-800">Detail Produk</h2>
            <button onclick="closeCreateModal()" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Scrollable Content Area -->
        <div class="overflow-y-auto p-6 flex-1">
            <!-- Bagian Informasi Dasar Produk -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">Informasi Dasar Produk</h3>
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
                    class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
            file:rounded-full file:border-0 file:text-sm file:font-semibold
            file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            </div>
        </div>
        <!-- Modal Footer (Sticky Bottom) -->
        <div class="p-4 border-t border-gray-200 sticky bottom-0 bg-white flex justify-end space-x-3">
            <button type="button" onclick="closeCreateModal()"
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
