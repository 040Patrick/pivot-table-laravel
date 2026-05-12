<x-layout>
    <main >
        <div class="b-black-1 text-bold">
            <!-- TITLE-->
            <h1 class="font-bold text-center">
                Logar
            </h1>
            
            <!-- FORM-->
            <form action="{{ route('auth.store') }}" method="post">
                @csrf

                <!-- EMAIL -->
                @error('email')
                    {{ $message }}
                @enderror
                <div class="border-black-1">
                    <label for="email"> Email</label>
                    <input type="email" name="email" placeholder="Email:" required>
                </div>

                <!-- PASSWORD -->
                @error('password')
                    {{ $message }}
                @enderror
                <div class="border-black-1">
                    <label for="password"> Password </label>
                    <input type="password" name="password" placeholder="Password:" required>
                </div>

                <button type="submit" class="p-5"> Enviar </button>
            </form>
        </div>
    </main>
</x-layout>

