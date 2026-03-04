@extends('layouts.content')

@section ('title', 'Contacts')

@section('content')


<div class="contact-section">
    <div class="container">
        <h2>Contacts</h2>
        <p>Get in touch for any inquiries and questions</p>

        @foreach($contacts as $contact)
            <div class="contact-group">
                <h5>{{ $contact->contact_name }}</h5>

                <a href="{{ $contact->contact_link }}">
                    {{ $contact->contact_info }}

                    @if($contact->contact_link !== '#')
                        <img src="{{ asset('images/diagonal-arrow.png') }}" 
                            alt="icon" 
                            class="w-auto">
                    @endif
                </a>
            </div>
        @endforeach
    </div>
</div>


@endsection