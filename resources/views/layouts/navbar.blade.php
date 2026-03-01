<div class="navigation-bar">
    <div class="container d-flex align-items-center justify-content-between py-3">
        <a href="/" class="fw-bold fs-4 logo">{{ $profile->name ?? 'Default Name' }}</a>
        
        <ul class="d-flex mb-0">
            <li class="ms-2"><a href="{{ url('/skills') }}">Skills</a></li>
            <li class="ms-2"><a href="{{ url('/projects') }}">Projects</a></li>
            <li class="ms-2"><a href="{{ url('/experience') }}">Experience</a></li>
            <li class="ms-2"><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
    </div>
</div>