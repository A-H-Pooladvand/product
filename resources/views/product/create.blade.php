<x-layout>

    <h1>Product</h1>

    <form action="{{ route('product.store') }}" method="POST">
        @csrf

        @if($errors->hasAny())
            {{ dd($errors) }}
            @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif

        <div class="row">
            <div class="col-sm-4 mb-3">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>

            <div class="w-100"></div>

            @for($i = 0; $i < 10; $i++)
                <div class="col-sm-6 mb-3">
                    <input type="text" name="title" class="form-control" placeholder="URL">
                </div>
            @endfor

            <div class="col-sm-12">
                <button class="btn btn-primary">Submit</button>
            </div>

        </div>
    </form>
</x-layout>
