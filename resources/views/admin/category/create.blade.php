<x-app-layout>
    <section>
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Category Create</h5>
                <a href="{{route('category.index')}}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title">Category Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title')}}">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 pb-3">
                            <label for="nep_title">Category Nepali Title<span class="text-danger">*</span></label>
                            <input type="text" name="nep_title" id="nep_title" class="form-control" value="{{ old('nep_title')}}">
                            @error('nep_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn-success">Save Record</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>
