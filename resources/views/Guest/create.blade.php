<x-layout>
    <main >
        <div>
            <!-- TITLE-->
            <h1 class="font-bold text-center"> Cadastrar </h1>
            <!-- FORM-->
            <form action="{{ route('register.store') }}" method="post">
                @csrf

                <!-- NAME -->
                @error('name')
                    {{ $message }}
                @enderror
                <div>
                    <label for="name"> Name </label>
                    <input type="text" name="name" placeholder="Name:" required>
                </div>

                <!-- EMAIL -->
                @error('email')
                    {{ $message }}
                @enderror
                <div>
                    <label for="email"> Email </label>
                    <input type="email" name="email" placeholder="Email:" required>
                </div>

                <!-- PASSWORD -->
                @error('password')
                    {{ $message }}
                @enderror
                <div>
                    <label for="password"> Password </label>
                    <input type="password" name="password" placeholder="Password:" required>
                </div>

                @error('password_confirmation')
                    {{ $message }}
                @enderror
                <div>
                    <label for="password_"> Confirm Password </label>
                    <input type="password" name="password_confirmation" placeholder="Confirm password:" required>
                </div>

                <button type="submit" class="border-black-5"> Enviar </button>
            </form>
        </div>
    </main>
</x-layout>