<x-layout>
    <div class="new"><a href="/new">+</a></div>
    <h1>Contact Book</h1>
    <form>
        <input class="search" name="search" type="search" placeholder="Search Contacts">
    </form>
    @foreach ($contacts as $contact)
        {{-- we can not go directly with $id/$first_name/$last_name as they belong to one specific contact, but we didn't retrieve one single contact in the controller, instead, we retrieved the whole contacts database --}}
        <a href="/contact/{{ $contact['id'] }}">
            <p>{{ $contact['first_name']}} {{ $contact['last_name']}}</p>
        </a>
    @endforeach
</x-layout>