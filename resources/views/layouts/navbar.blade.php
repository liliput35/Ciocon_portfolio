<div class="navigation-bar">
    <div class="container">
        <a href="">{{ $profile->name ?? 'Default Name' }}</a>
        
        <ul>
            <li><a href="{{ url('/skills') }}">Skills</a></li>
            <li><a href="{{ url('/projects') }}">Projects</a></li>
            <li><a href="{{ url('/experience') }}">Experience</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
    </div>
</div>