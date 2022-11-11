<x-layout>
    
   @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 

    <div class="container vh-100">
        <div class="row vh-100 justify-content-center text-center align-items-center">
            <div class="col-12 col-md-4"></div>
            <div class="col-12 col-md-4">
                <div class="form">       
                    <div class="lines"></div>
                    <div class="content">                       
                            
                            <form method="POST" action="{{route('login')}}">

                                <h2 class="text-wh text-center mb-4">SIGN IN</h2>

                                @csrf
                    
                                <div class="mb-4 inputBox">
                                    <input type="email"  name="email" required="required">
                                    <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
                                    <i></i>                                   
                                </div>
                            
                                <div class="mb-2 inputBox">
                                    <input type="password"  name="password" required="required">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <i></i>                                   
                                </div>
                                <div class="links">
                                    <a href="">Non hai ancora un account? Registrati!</a>
                                </div>
                                <button type="submit" class="btnLog">Login</button>
                            </form>
                    </div>                       
                </div>
            </div>
            <div class="col-12 col-md-4"></div>
        </div>
    </div>

</x-layout>