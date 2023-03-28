<x-app>

        <!-- component -->
        <div class="flex items-center justify-center p-12">
            <!-- Author: FormBold Team -->
            <!-- Learn More: https://formbold.com -->
            <div class="mx-auto w-full max-w-[550px]">
                <form action={{ route('dashboard.crud.store') }} method="POST">
                    @csrf
                    <div class="mb-5">
                        <label
                            for="name"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Full Name
                        </label>
                        <input
                            value="{{old('name')}}"
                            type="text"
                            name="name"
                            class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md
                        {{ $errors->has('name') ? 'border-red-500' : '' }}"
                        />
                        @error('name')
                        <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label
                            for="age"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Age
                        </label>
                        <input
                            value="{{old('age')}}"
                            type="number"
                            name="age"
                            id="age"
                            class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md
                        {{ $errors->has('age') ? 'border-red-500' : '' }}"
                        />
                        @error('age')
                        <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label
                            for="Email"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Email
                        </label>
                        <input
                            value="{{old('email')}}"
                            type="email"
                            name="email"
                            id="email"
                            class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md
                        {{ $errors->has('email') ? 'border-red-500' : '' }}"
                        />
                        @error('email')
                        <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label
                            for="address"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Address
                        </label>
                        <input
                            value="{{old('address')}}"
                            type="text"
                            name="address"
                            id="address"
                            class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md
                        {{ $errors->has('address') ? 'border-red-500' : '' }}"
                        />
                        @error('address')
                        <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <button
                            class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
                            type="submit"
                        >
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>

</x-app>
