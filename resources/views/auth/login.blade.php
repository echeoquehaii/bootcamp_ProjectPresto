<x-layout>
    
   <h1 class="text-center text-white space">Effettua il login!</h1>

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
        <form method="POST" action="{{route('login')}}">
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
                <input type="email" class="form-control" name="email">
            </div>
        
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Entra</button>
        </form>
    </div>

</x-layout>