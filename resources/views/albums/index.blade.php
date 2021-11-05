@extends('layouts.app')

@section('content')
<div class="container">
    @if (count($albums) > 0)
        <div class="row">
            @foreach ($albums as $album)
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="{{ asset('storage/album_covers/'. $album->cover_image) }}" alt="$album->cover_image" height="2000px">            
                        <div class="card-body">
                        <p class="card-text">{{ $album->name }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('album-show', $album->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                <small class="text-muted">{{ $album->description }}</small>
                            </div>
                        </div> 
                    </div>
                </div>
            @endforeach    
        </div>
    @else   
        <h3>No Album yet.!</h3>
    @endif
</div>
@endsection