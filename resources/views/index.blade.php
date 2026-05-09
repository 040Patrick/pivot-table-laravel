@vite(['resources/css/app.css', 'resources/js/app.js'])
    <div class="flex flex-col items-center justify-center min-h-screen">
        @foreach($projects as $project)
            <h2 class="font-bold text-xl mb-2">
                {{ $project->name }}
            </h2>
            @foreach($project->users as $user)
                <ul>
                    <li>
                        @foreach($user->cars as $car)
                        <p>
                            {{ $user->name }} | {{ $car->name }}
                        </p>
                        @endforeach
                    </li>
                </ul>
            @endforeach
        @endforeach
    </div>
