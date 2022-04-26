<x-layout>
    {{-- $id refers to the id of this contact in database --}}
    <a href="/contact/{{ $id }}">< Back</a>
    <h1>Edit Contact</h1>
    <form class="edit" method="POST" action="/contact/{{ $id }}">
        @csrf
        {{-- @method('PUT') is a method spoofing, bc form elements can't use methods other than GET and POST, it's like reset the method of the form to something other than POST or GET --}}
        @method('PUT')
        <input class="firstName" type="text" name="firstName" value="{{ $first_name }}">
        <input class="lastName" type="text" name="lastName" value="{{ $last_name }}">
        <input class="email" type="text" name="email" value="{{ $email }}">
        <button type="submit">Update</button>
    </form>
    <form class="delete" method="POST" action="/contact/{{ $id }}">
        @csrf
        @method('delete')
        <button class="delete" type="submit">Delete</button>
    </form>

</x-layout>