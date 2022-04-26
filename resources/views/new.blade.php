<x-layout>
    <a href="/">< Back</a>
    <h1>New Contact</h1>
    {{-- action="" specifies page we want to send our form to --}}
    {{-- by default the form will be send to the current page, which is action="/create" --}}
    <form class="new" method="POST" action="/">
        @csrf
        <input class="firstName" type="text" name="firstName" placeholder="First Name">
        <input class="lastName" type="text" name="lastName" placeholder="Last Name">
        <input class="email" type="text" name="email" placeholder="Email">
        <button type="submit">Add Contact</button>
    </form>
</x-layout>