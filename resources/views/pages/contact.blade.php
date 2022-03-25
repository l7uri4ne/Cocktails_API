@include('layout/header')

<div class="contact">

    <h2>A question ? An observation ?</h2>
    <form action="{{ route('contact.send') }}" method="POST">
        {{ csrf_field() }}   {{--evite erreur 409--}}
        <div>
            <label for="firstname">First name:</label>
            <input type="text" id="firstname" name="firstname">
        </div>
        <div>
            <label for="lastname">Last name:</label>
            <input type="text" id="lastname" name="lastname">
        </div>
        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message"></textarea>
        </div>
        <button>Send</button>
    </form>

</div>

@include('layout/footer')
