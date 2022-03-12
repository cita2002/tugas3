<x-admin-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<h1 class="w-full text-3xl text-black pb-6">Input Data</h1>
                

                    <div class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">
                        <p class="text-xl pb-6 flex items-center">
                            <i class="fas fa-list mr-3"></i> Pemesanan
                        </p>
                        <div class="leading-loose">
                            <form class="p-10 bg-white rounded shadow-xl">
                                <p class="text-lg text-gray-800 font-medium pb-4">Data Pemesanan</p>
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="cus_name">Nama Pemesan</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Masukkan Nama" aria-label="Name">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-600" for="cus_email">Alamat</label>
                                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Masukkan Alamat Acara" aria-label="Email">
                                </div>
                                <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="name">Detail Pesanan</label>
                <select name="Detail Pesanan" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" required="">
				<option value=>Pilih Jenis Tari</option>
				<option value="Injin">Tari Wali/Sakral</option>
				<option value="Laklak">Tari Bebali/Semi Sakral</option>
                <option value="Laklak">Tari Balihan/Hiburan</option>
			</select>
                                </div>
                                <div class="mt-2">
                                    <label class="hidden text-sm block text-gray-600" for="cus_email">Alamat Pemesan</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Tanggal Acara" aria-label="Email">
                                </div>
                                <div class="mt-2">
                                    <label class="hidden block text-sm text-gray-600" for="cus_email">Harga</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Harga" aria-label="Email">
                                </div>
                                <div class="mt-2">
                                    <label class="hidden block text-sm text-gray-600" for="cus_email">Waktu Acara</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="cus_email" type="text" required="" placeholder="Waktu Acara" aria-label="Email">
                                </div>
                                <div class="mt-2">
                                    <label class="hidden block text-sm text-gray-600" for="cus_email">Waktu Acara</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="cus_email" type="text" required="" placeholder="Masukkan Nama Tari" aria-label="Email">
                                </div>
                                <div class="mt-6">
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
                </x-admin-layout>