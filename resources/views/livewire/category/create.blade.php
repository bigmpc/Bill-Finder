<div class="container mx-auto px-4 py-5">
    <div class="header-text">
        <h1 class="uppercase tracking-wide text-3xl text-indigo-600 font-bold">@lang('category.add_new_category_title')
        </h1>
        <hr>
        <p class="mt-2 text-gray-600">@lang('category.add_new_category_description')</p>
    </div>

    <form class="mt-6" wire:submit.prevent="createCategory">
        <!-- Added Massage  -->
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                @if (session()->has('message'))
                <script>
                    alertify.notify("@lang('category.add_new_category_after_submit_added_title')", 'success', 3);

                </script>

                @endif
            </div>
            <!-- Name -->
            <div class="w-full mt-6 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="add_new_category_label_category_name">
                    @lang('category.add_new_category_label_category_name')
                </label>
                <input wire:model="name"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="add_new_category_label_category_name" type="text" placeholder="long dress">
                @error('name') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror

            </div>
       

            <!-- description -->
            <div class="w-full mt-6 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="add_new_category_label_category_description">
                    @lang('category.add_new_category_label_category_description')
                </label>

                <textarea
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    wire:model="description" id="add_new_category_label_category_description" cols="30" rows="10"
                    placeholder="some style , model , year and etc"></textarea>
                @error('description') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
            </div>


            <!-- File-->
            <div class="w-full mt-6 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="add_new_category_label_category_file">
                    @lang('category.add_new_category_label_category_file')
                </label>
                <input type="file" wire:model="photo">

                @error('photo') <span class="error">{{ $message }}</span> @enderror
            </div>

            
            





            <!-- Submit -->
            <div class="relative overflow-hidden px-3 mt-8">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" type="submit">
                    @lang('category.add_new_category_label_add_new_btn')

                </button>
            </div>


        </div>



    </form>


</div>
