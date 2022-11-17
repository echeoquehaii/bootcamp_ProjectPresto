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

    <div class="container vh-100 mt-custom1">
        <div class="row vh-100 justify-content-center text-center align-items-center">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="formRegister">       
                    <div class="lines"></div>
                    <div class="content">                       
                            
                        <form method="POST" action="{{route('register')}}">
    
                                <h2 class="text-wh text-center mb-4 titles">{{__('ui.registrati')}}</h2>
    
                                @csrf
                    
                                <div class="mb-4 inputBox">
                                    <input type="email"  name="email" required="required">
                                    <label for="exampleInputEmail1" class="form-label">{{__('ui.email')}}</label>
                                    <i></i>                                   
                                </div>
                            
                                <div class="mb-2 inputBox">
                                    <input type="text"  name="name" required="required">
                                    <label for="exampleInputPassword1" class="form-label">{{__('ui.nomeCognome')}}</label>
                                    <i></i>                                   
                                </div>
                                <div class="mb-2 inputBox">
                                    <input type="password"  name="password" required="required">
                                    <label for="exampleInputPassword1" class="form-label">{{__('ui.password')}}</label>
                                    <i></i>                                   
                                </div>
                                <div class="mb-2 inputBox">
                                    <input type="password"  name="password_confirmation" required="required">
                                    <label for="exampleInputPassword1" class="form-label">{{__('ui.passwordConf')}}</label>
                                    <i></i>                                   
                                </div>
                                
                                <button type="submit" class="btnLogForm">{{__('ui.registrati2')}}</button>
                            </form>
                    </div>                       
                </div>
            </div>
        </div>
    </div>

</x-layout>

