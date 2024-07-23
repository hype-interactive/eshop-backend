<div>
    <div class="max-w-full mx-6 px-16 mx-auto bg-white border rounded-lg px-8 py-8">
        {{-- <h2 class="text-3xl font-semibold mb-6 text-center">Product Registration</h2> --}}

        <form class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-12">


            <label for="uploadFile1"
      class="bg-white text-gray-500 font-semibold text-base rounded max-w-md h-24 w-full flex flex-col items-center justify-center cursor-pointer border-2 border-gray-300 border-dashed mx-auto font-[sans-serif]">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-11 mb-2 fill-gray-500" viewBox="0 0 32 32">
        <path
          d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z"
          data-original="#000000" />
        <path
          d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z"
          data-original="#000000" />
      </svg>
      Upload file

      <input type="file" id='uploadFile1' class="hidden" />
      <p class="text-xs font-medium text-gray-400 mt-2">PNG, JPG SVG, WEBP, and GIF are Allowed.</p>
    </label>

    <div>
        <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
        <textarea id="description" name="description"
            class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" required></textarea>
    </div>



            <div>
                <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                <input type="text" id="name" name="name"
                    class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" required>
            </div>



            <div>
                <label for="unit" class="block text-gray-700 font-medium mb-2">Unit</label>
                <input type="text" id="unit" name="unit"
                    class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" required>
            </div>

            <div>
                <label for="vendor_price" class="block text-gray-700 font-medium mb-2">Vendor Price</label>
                <input type="number" step="0.01" id="vendor_price" name="vendor_price"
                    class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" required>
            </div>

            <div>
                <label for="final_price" class="block text-gray-700 font-medium mb-2">Final Price</label>
                <input type="number" step="0.01" id="final_price" name="final_price"
                    class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" required>
            </div>

            <div>
                <label for="product_category_id" class="block text-gray-700 font-medium mb-2">Product Category</label>
                <select id="product_category_id" name="product_category_id"
                    class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" required>
                    <option value="">Select category</option>
                    <option value="1">Category 1</option>
                    <option value="2">Category 2</option>
                    <option value="3">Category 3</option>
                    <!-- Add more categories as needed -->
                </select>
            </div>

            <div>
                <label for="expire_date" class="block text-gray-700 font-medium mb-2">Expire Date</label>
                <input type="date" id="expire_date" name="expire_date"
                    class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" required>
            </div>



            <div>
                <label for="status" class="block text-gray-700 font-medium mb-2">Status</label>
                <select id="status" name="status"
                    class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" required>
                    <option value="">Select status</option>
                    <option value="available">Available</option>
                    <option value="out_of_stock">Out of Stock</option>
                </select>
            </div>

            <div>
                <label for="visibility" class="block text-gray-700 font-medium mb-2">Visibility</label>
                <select id="visibility" name="visibility"
                    class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" required>
                    <option value="">Select visibility</option>
                    <option value="public">Public</option>
                    <option value="private">Private</option>
                </select>
            </div>

            <div class="sm:col-span-2">
                <label for="featured" class="block text-gray-700 font-medium mb-2">Featured</label>
                <input type="checkbox" id="featured" name="featured" class="mr-2">
                <label for="featured" class="text-gray-700">Is Featured?</label>
            </div>

            <div class="sm:col-span-2">
                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
            </div>
        </form>
    </div>

</div>
