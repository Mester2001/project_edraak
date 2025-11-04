@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __('messages.edit_category') }}</h4>
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary float-{{ app()->getLocale() === 'ar' ? 'start' : 'end' }}">
                        <i class="mdi mdi-arrow-{{ app()->getLocale() === 'ar' ? 'right' : 'left' }}"></i> {{ __('messages.back') }}
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('categories.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="catagorey_name" class="form-label">{{ __('messages.category_name') }}</label>
                            <input type="text" class="form-control @error('catagorey_name') is-invalid @enderror" 
                                   id="catagorey_name" name="catagorey_name" 
                                   value="{{ old('catagorey_name', $category->catagorey_name) }}" required>
                            @error('catagorey_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('messages.update') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
