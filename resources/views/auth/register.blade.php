<x-layout>
    
    <h1 class="space text-center text-white">Registrati al nostro sito!</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 

    <div class="container">
        <form method="POST" action="{{route('register')}}">
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
                <input type="email" class="form-control" name="email">
            </div>

            <div class="mb-3">
                <label class="form-label">Nome e Cognome</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="mb-3">
                <label class="form-label">Conferma Password</label>
                <input type="password" class="form-control" name="password_confirmation">
            </div>
            
            <button type="submit" class="btn btn-primary">Registrati</button>
        </form>
    </div>

</x-layout>