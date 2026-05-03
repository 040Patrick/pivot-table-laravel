
@foreach($projects as $project)

    <h2 class="bold text-center"> 
        {{ $project->name }}
    </h2>

    @if($project->users->isNotEmpty())
        <ul>
            @foreach($project->users as $user)
                <li> {{ $user->name }} </li>
            @endforeach
        </ul>
    @endif
    
@endforeach