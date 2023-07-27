@props(['member']) 
<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
    <div class="team-item p-4">
        <div class="overflow-hidden mb-4">
            <img class="img-fluid" src="{{ asset('storage/'.$member->image)}}" alt="">
        </div>
        <h5 class="mb-0">{{$member->name}}</h5>

        <p>{{$member->designation}}</p>
        <div class="btn-slide mt-1">
            <i class="fa fa-share"></i>
            <span>
                <a href="{{$member->facebook}}"  style="@if($member->facebook == null ) visibility: hidden; @else  visibility: visible ;@endif" ><i class="fab fa-facebook-f"></i></a>
                <a href="{{$member->instagram}}"  style="@if($member->instagram == null ) visibility: hidden; @endif" ><i class="fab fa-instagram"></i></a>
                <a href="{{$member->linkedin}}"  style="@if($member->linkedin == null ) visibility: hidden; @endif"><i class="fab fa-linkedin-in"></i></a>
            </span>
        </div>
        @auth
        <div class="dropdown ms-auto float-end">
            <h6>  <i class="bi bi-three-dots-vertical" data-bs-toggle="dropdown" aria-expanded="false"></i></h6>
              <ul class="dropdown-menu">
                <li>
                  <form action="{{ route('team.edit',$member->id) }}"  method="GET">
                      @csrf
                      <button type="submit" class="dropdown-item" style="color :rgb(79, 152, 236)">
                          <i class="fas fa-pen mx-2" ></i> Update
                      </button>
                  </form>
                </li>
                <li>
                  <form action="{{ route('team.destroy',$member->id) }}"  method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="dropdown-item"  style="color :rgb(249, 91, 85)">
                          <i class="fas fa-trash mx-2"></i> Delete
                      </button>
                  </form>
                </li>
              </ul>
          </div>
        @endauth

    </div>
</div> 