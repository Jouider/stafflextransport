
<x-master title="Add Service">
    <h1 class="text-center">Modifier Service</h1>
    <form action="{{ route('service.update',$service->id) }}" method='post' enctype="multipart/form-data" class="text-center" >
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label  class="form-label">image</label>
            <input type="file" class="form-control" name="image" >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nom complet </label>
            <input type="text" class="form-control" name="title" value="{{old('title',$service->title)}}">
            @error('title')
                <div class="text-danger">{{$message}} </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Description</label>
            <textarea class="form-control" name="description" >{{old('Description',$service->description)}}</textarea>  
            @error('description')
                <div class="text-danger">{{$message}} </div>
            @enderror
        </div>
        <div class="d-grid my-2">
            <button class="btn btn-primary btn-block " type="submit">Modifier le Service</button>
        </div>
    </form>
</x-master>