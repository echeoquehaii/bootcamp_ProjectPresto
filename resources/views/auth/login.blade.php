<x-layout>
    
   @if ($errors->any())
    <div class="container-fluid position-absolute">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="alert alert-success w-100 mt-custom2 purple text-white d-flex justify-content-center align-items-center">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <p>{{$error }}</p>
                        @endforeach
                    </ul>
                </div>
            </div>  
        </div>
    </div>
    @endif

    <div class="container vh-100">
        <div class="row vh-100 justify-content-center text-center align-items-center">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="form">       
                    <div class="lines"></div>
                    <div class="content">                       
                            
                            <form method="POST" action="{{route('login')}}">

                                <h2 class="text-wh text-center mb-4 titles">{{__('ui.signIn')}}</h2>

                                @csrf
                    
                                <div class="mb-4 inputBox">
                                    <input type="email"  name="email" required="required">
                                    <label for="exampleInputEmail1" class="form-label">{{__('ui.email')}}</label>
                                    <i></i>                                   
                                </div>
                            
                                <div class="mb-2 inputBox">
                                    <input type="password"  name="password" required="required">
                                    <label for="exampleInputPassword1" class="form-label">{{__('ui.password')}}</label>
                                    <i></i>                                   
                                </div>
                                <div class="links">
                                    <a href="{{route('register')}}">{{__('ui.logOn')}}</a>
                                </div>
                                <button type="submit" class="btnLog">{{__('ui.login')}}</button>
                            </form>
                    </div>                       
                </div>
            </div>
        </div>
    </div>

</x-layout>