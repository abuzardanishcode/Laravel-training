<div>
    <!-- He who is contented is rich. - Laozi -->
    
    <head>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    
    

    <form action="signup-result" method="post" 
      class="m-auto bg-white p-8 rounded-2xl shadow-lg w-full max-w-md space-y-6">
        @csrf

        <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Signup Account</h2>

        <!-- Global Error (Optional)
        @if($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded-md text-sm mb-4">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        -->

        <!-- Username -->
        <div>
            <label class="block text-gray-700 mb-2 font-medium">Username</label>
            <input type="text" name="username" placeholder="Enter your username"
                value="{{ old('username') }}"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 @error('username') border-red-500 @enderror">
            @error("username")
                <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email -->
        <div>
            <label class="block text-gray-700 mb-2 font-medium">Email</label>
            <input type="text" name="email" placeholder="Enter your email"
                value="{{ old('email') }}"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 @error('email') border-red-500 @enderror">
            @error("email")
                <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
            @enderror
        </div>

        <!-- City -->
        <div>
            <label class="block text-gray-700 mb-2 font-medium">City</label>
            <input type="text" name="city" placeholder="Enter your city"
                value="{{ old('city') }}"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 @error('city') border-red-500 @enderror">
            @error("city")
                <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
            @enderror
        </div>

        <!-- Skills -->
        <div>
            <span class="block text-gray-700 mb-2 font-medium">Skills</span>
            <div class="flex gap-4 flex-wrap">
                @php
                    $skills = old('skill', []);
                @endphp
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="skill[]" value="PHP" class="accent-blue-500"
                        {{ in_array('PHP', $skills) ? 'checked' : '' }}>
                    <span>PHP</span>
                </label>
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="skill[]" value="Java" class="accent-blue-500"
                        {{ in_array('Java', $skills) ? 'checked' : '' }}>
                    <span>Java</span>
                </label>
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="skill[]" value="Node" class="accent-blue-500"
                        {{ in_array('Node', $skills) ? 'checked' : '' }}>
                    <span>Node</span>
                </label>
            </div>
            @error("skill")
                <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2.5 rounded-lg transition-all duration-300 shadow-md">
            Submit
        </button>
    </form>

</div>


<style>
    .input{

    }
</style>