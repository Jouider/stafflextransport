@props(['service']) 
<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
    <div class="service-item p-4">
        <div class="overflow-hidden mb-4">
            <img class="img-fluid" src="{{ asset('storage/'.$service->image)}}" alt="">
        </div>
        <h4 class="mb-3">{{$service->title}}</h4>
        <p>{{$service->description}}</p>
        @guest
        <a class="btn-slide mt-2" href="{{route('contactpage')}}"><i class="fas fa-file-invoice-dollar"></i><span>Demander un Devis</span></a>
        @endguest
        @auth
        <div  class="" >
            <form action="{{ route('service.destroy',$service->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-primary float-end"><i class="bi bi-trash"></i></button>
            </form>
            <form action="{{ route('service.edit',$service->id)}}" method="get">
                @csrf
                <button class="btn text-light" style="background-color: rgb(52, 178, 241)"><i class="fas fa-pen"></i></button>
            </form>
        </div>
        @endauth

    </div>

</div>