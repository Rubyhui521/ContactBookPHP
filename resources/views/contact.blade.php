<x-layout>
    <div class="contact">
        <a href="/">< Contacts</a>
        <a href="/contact/{{ $id }}/edit">Edit</a>
    </div>
    <h1>{{ $first_name }} {{ $last_name }}</h1>
    <p>{{ $email }}</p>
</x-layout>