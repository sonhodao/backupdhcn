@extends('layouts.app')

@section('page-title', !empty($currentCourse) ? __('Sửa khóa học: :title', ['title' => $currentCourse->title]) : __('Thêm khóa học'))

@section('content')

    <div class="row">
        <div class="col">
            <form
                class="row"
                action="{{ empty($currentCourse) ? route('courses.store') : route('courses.update', ['course' => $currentCourse->id]) }}"
                method="post"
            >
                @csrf
                @if (!empty($currentCourse)) @method('PUT') @endif
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">{{ __('Tên khóa học') }}</label>
                                        <span class="text-danger">(*)</span>
                                        <input
                                            id="name"
                                            type="text"
                                            name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') ?: (!empty($currentCourse) ? $currentCourse->name : '') }}"
                                            required
                                        />
                                        @error('name')
                                        <span class="error invalid-feedback" style="display: block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="price">{{ __('Giá khóa học') }}</label>
                                        <span class="text-danger">(*)</span>
                                        <input
                                            id="price"
                                            type="text"
                                            name="price"
                                            class="form-control @error('price') is-invalid @enderror"
                                            value="{{ old('price') ?: (!empty($currentCourse) ? $currentCourse->price : '') }}"
                                            required
                                        />
                                        @error('price')
                                        <span class="error invalid-feedback" style="display: block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">{{ __('Tên giáo viên') }}</label>
                                        <span class="text-danger">(*)</span>
                                        <select class="form-control" id="exampleFormControlSelect1" name="teacher_id">
                                            
                                            <option value="">{{ __('Chọn giáo viên') }}</option>
                                            @foreach (\App\Models\Teacher::all() as $teacher)
                                                <option value="{{ $teacher -> id }}"
                                                    @if(old('teacher_id')|| (!empty($currentCourse) && $teacher->id==$currentCourse->teacher->id)) selected @endif
                                                    id="teacher_id"
                                                    type="text"
                                                    name="teacher_id"
                                                    class="form-control @error('teacher_id') is-invalid @enderror"                               
                                                    required>
                                                    {{$teacher -> name}}
                                                </option>                        
                                            @endforeach
                                        </select>
                                        @error('teacher')
                                        <span class="error invalid-feedback" style="display: block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="excerpt">{{ __('Excerpt') }}</label>
                                        <span
                                            class="text-danger"
                                        >(*)
                                        </span>
                                        <textarea
                                            id="excerpt" name="excerpt"
                                            class="form-control @error('excerpt') is-invalid @enderror" rows="5"
                                            placeholder="Enter ..."
                                        >{{ old('excerpt') ?: (!empty($currentCourse) ? $currentCourse->excerpt : '') }}</textarea>
                                        @error('excerpt')
                                        <span class="error invalid-feedback" style="display: block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="content">{{ __('content') }}</label>
                                        <span
                                            class="text-danger"
                                        >(*)
                                        </span>
                                        <div style="height: 34px;">
                                            <span class="editor-action-item" style="">
                                                <a
                                                    href="#" class="btn_gallery btn btn-primary" data-result="content"
                                                    data-multiple="true" data-action="media-insert-ckeditor"
                                                >
                                                    <i class="far fa-image"></i>
                                                    Thêm tập tin
                                                </a>
                                            </span>
                                        </div>
                                        <textarea
                                            id="content" name="content"
                                            class="form-control @error('content') is-invalid @enderror" rows="5"
                                            placeholder="Enter ..."
                                        >{{ old('content') ?: (!empty($currentCourse) ? $currentCourse->content : '') }}</textarea>
                                        @error('content')
                                        <span class="error invalid-feedback" style="display: block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('Actions') }}</h3>
                            <a href="{{route('courses.index')}}" style="float: right;">Danh sách khóa học</a>
                        </div>

                        <div class="card-body">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-save fa-fw"></i>
                                {{ __('Save') }}
                            </button>
                            <a href="{{ route('courses.index') }}" class="btn btn-danger">
                                <i class="fas fa-ban fa-fw"></i>
                                {{ __('Cancel') }}
                            </a>
                        </div>
                    </div>
                    <div class="card image-box">
                        <div class="card-header">
                            <h3 class="card-title">
                                {{ __('Thumbnail') }} (
                                <span class="text-danger">*</span>
                                                      )
                            </h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-danger mb-2">
                                        {{ __('Recommend Size: :size', ['size' => '1305x763.5 hoặc 870x509']) }}
                                    </div>

                                    <div class="form-group">
                                        <div class="preview-image-wrapper img-fluid">
                                            <img
                                                class="preview_image"
                                                src="{{ old('thumbnail') ?: (!empty($currentCourse) ? $currentCourse->thumbnail : '/preview-icon.png') }}"
                                            >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <span class="input-group-btn">
                                                <a
                                                    data-result="image" data-action="select-image"
                                                    class="btn_gallery btn btn-primary text-white"
                                                >
                                                    <i class="fa fa-picture-o"></i> {{__('Choose')}}
                                                </a>
                                            </span>
                                            <input
                                                name="thumbnail" type="hidden"
                                                class="image-data form-control @error('thumbnail') is-invalid @enderror"
                                                value="{{ old('thumbnail') ?: (!empty($currentCourse) ? $currentCourse->thumbnail : '') }}"
                                            >
                                        </div>
                                        @error('thumbnail')
                                        <span class="error invalid-feedback" style="display: block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                {{ __('Danh mục khóa học') }} (
                                <span class="text-danger">*</span>)
                            </h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <select id="category_id" name="category_id" class="form-control select2bs4 @error('category_id') is-invalid @enderror">
                                                <option value="">{{ __('Chọn danh mục khóa học') }}</option>
                                                @include('courses.categories.elements.option', ['selected' => (old('category_id'))?:(!empty($currentCourse) ?$currentCourse->category_id : null)]))
                                            </select>
                                        
                                            @error('category_id')
                                            <span class="error invalid-feedback" style="display: block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-footer clearfix">
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@include('partials.forms.slug', [
    'fromElement' => '#name',
    'toElement' => '#slug',
])

@include('partials.js.rv_media',['buttonMoreImages'=>[]])

@push('styles')
    <link rel="stylesheet" href="{{ asset('tokenfield/css/bootstrap-tokenfield.min.css') }}">
@endpush

