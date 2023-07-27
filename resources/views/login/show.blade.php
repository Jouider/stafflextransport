
<x-master title="Login">
    <section class="gradient-form" >
        <div class="container py-5 ">
          <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-xl-10">
              <div class=" card rounded-3 text-black" style="background-color: #fcfeff;">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="/img/logo-stafflex.png"
                          style="width: 185px;" alt="logo">
                      </div>
      
                      <form action="{{ route('auth.login') }}" method="post" class="vstack gap-3">
                        @csrf
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example11">Login</label>
                          <input type="email"  name="email" class="form-control" value="{{old('email')}}"/>
                          @error('email')
                          <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
      
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example22">Mot de passe</label>
                          <input type="password" name='password' class="form-control" />
                          @error('password')
                          <span class="text-danger">{{$message}}</span>
                            @enderror

                        </div>
      
                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn text-light  btn-block fa-lg gradient-custom-2 mb-3 " type="submit">Login</button>
                        </div>

                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">Connexion au portail Stafflex Transport Personnel et Touristique</h4>
                      <p class="small mb-0">LChez Stafflex Transport Personnel et Touristique, nous nous engageons à offrir des services 
                        de transport de haute qualité, adaptés à vos besoins spécifiques. Notre équipe expérimentée et dévouée garantit 
                        votre confort, votre sécurité et votre satisfaction. Faites confiance à notre expertise et à notre engagement
                         envers l'excellence. Bienvenue chez Stafflex, où le transport devient une expérience mémorable.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</x-master>