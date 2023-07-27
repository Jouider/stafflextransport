
<x-master title="Add Service">
    <h1 class="text-center">Ajouter Nouveau Membre</h1>
    <form action="{{ route('team.store') }}" method='post' enctype="multipart/form-data" class="text-center" >
        @csrf
        <div class="mb-3">
            <label  class="form-label">image</label>
            <input type="file" class="form-control" name="image" >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nom complet </label>
            <input type="text" class="form-control" name="name" value="{{old('name')}}">
            @error('name')
                <div class="text-danger">{{$message}} </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Description</label>
            <input type="text" class="form-control" name="designation"  value="{{old('designation')}}">
            @error('designation')
            <div class="text-danger">{{$message}} </div>
        @enderror
        </div>
        <div class="mb-3">
            <div class="input-group mb-3">
                <span class="input-group-text" ><i class="bi bi-facebook"></i></span>
                <input name="facebook" type="text" class="form-control" placeholder="Lien facebook"  value="{{old('facebook')}}">
            </div>
            @error('facebook')
            <div class="text-danger">{{$message}} </div>
            @enderror
        </div>
        <div class="mb-3">
            <div class="input-group mb-3">
                <span class="input-group-text" ><i class="bi bi-instagram"></i></span>
                <input name="instagram" type="text" class="form-control" placeholder="Lien instagram"  value="{{old('instagram')}}">
            </div>
            @error('instagram')
            <div class="text-danger">{{$message}} </div>
            @enderror
        </div>
        <div class="mb-3">
            <div class="input-group mb-3">
                <span class="input-group-text" ><i class="bi bi-linkedin"></i></span>
                <input name="linkedin" type="text" class="form-control" placeholder="Lien linkedin"  value="{{old('linkedin')}}" >
            </div>
            @error('linkedin')
            <div class="text-danger">{{$message}} </div>
            @enderror
        </div>

        <div class="d-grid my-2">
            <button class="btn  btn-block text-light  " style="background-color: rgb(75, 185, 233)" type="submit">Ajouter </button>
        </div>
    </form>
</x-master>