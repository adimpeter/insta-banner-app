@extends('layouts.admin')


@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12"><h2 class="heading-text">Created Banners</h2></div>
            @foreach($images as $image)
                <div class="col-md-4">
                    <img src="{{ asset('storage/banner/' . $image->name) }}" alt="" style="width: 350px; height: 350px">
                    <div class="img-info">
                        Created: {{ $image->updated_at->diffForHumans() }}
                    </div>
                </div>
            @endforeach


            <div class="col-md-12">
                {{ $images->links() }}
            </div>
        </div>
    </div>
</section>

@endsection