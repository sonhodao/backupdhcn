@extends('layouts.app')

@section('page-title', !empty($currentTeacher) ? __('Sửa giáo viên: :name', ['name' => $currentTeacher->name]) : __('Thêm giáo viên'))

@section('content')
    <div class="row" >@if (session('success'))
        <div class="alert alert-success" role="alert" style="float: right">
            {{session('success')}}
          </div>
        @endif     
    </div>
    <div class="row">
        
        @cannot('roles.update')
            @php $currentTeacher = null @endphp
        @endcannot

        @php
            $showForm = true;

            if (!request()->user()->can('teachers.store')) {
                $showForm = false;
            }

            if (!empty($currentTeacher)) {
                $showForm = request()->user()->can('teachers.update');
            }
        @endphp
                  
            <div class="col-md">
                <form method="post" class="card card-primary card-outline card-outline-tabs" action="{{ !empty($currentTeacher) ? route('teachers.update', ['teacher' => $currentTeacher->id]) : route('teachers.store') }}" enctype="multipart/form-data">
                    @csrf
                    @if (!empty($currentTeacher)) @method('PUT') @endif

                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="category-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="category-tabs-info-tab" data-toggle="pill" href="#category-tabs-info" role="tab" aria-controls="category-tabs-info" aria-selected="true">{{ __('Info') }}</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="tab-content" id="category-tabs-content">
                            <div class="tab-pane fade show active" id="category-tabs-info" role="tabpanel" aria-labelledby="category-tabs-info-tab">
                            
                                <div class="col-6 form-group image-box">
                                    <label for="thumbnail">{{ __('Thumbnail') }}</label>
                                    <span class="text-danger">({{__('Recommend Size: :size', ['size' => '270x138'])}})</span>
                                    <div class="input-group justify-content-center">
                                        <div class="preview-image-wrapper ld-img-preview">
                                            <img
                                                class="preview_image"
                                                src="{{ old('thumbnail') ?: (!empty($currentTeacher) ? $currentTeacher->thumbnail : '/preview-icon.png') }}"
                                            >
                                        </div>
                                        <span>
                                            <a data-result="image" data-action="select-image" class="btn_gallery btn btn-primary text-white">
                                                <i class="fa fa-picture-o"></i> {{__('Choose')}}
                                            </a>
                                        </span>
                                        <input
                                            type="hidden" id="thumbnail" name="thumbnail"
                                            class="image-data form-control @error('thumbnail') is-invalid @enderror"
                                            value="{{ old('thumbnail') ?: (!empty($currentTeacher) ? $currentTeacher->thumbnail : '') }}"
                                        >
                                    </div>
                            
                                    @error('thumbnail')
                                    <span class="error invalid-feedback" style="display: block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="name">{{ __('Name') }}</label>
                                    <span class="text-danger">(*)</span>
                                    <input
                                        id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') ?: (!empty($currentTeacher) ? $currentTeacher->name : '') }}" required
                                    />
                                
                                    @error('name')
                                    <span class="error invalid-feedback" style="display: block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="birthday">{{ __('Ngày sinh') }}</label>
                                    <span class="text-danger">(*)</span>
                                    <input
                                        id="birthday" type="date" name="birthday" class="form-control @error('birthday') is-invalid @enderror"
                                        value="{{ old('birthday') ?: (!empty($currentTeacher) ? $currentTeacher->birthday : '') }}" required
                                    />
                                
                                    @error('birthday')
                                    <span class="error invalid-feedback" style="display: block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">{{ __('Email') }}</label>
                                    (
                                    <span class="text-danger">*</span>
                                    )
                                    <input
                                        id="email"
                                        name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') ?: (!empty($currentTeacher) ? $currentTeacher->email : '') }}"
                                    />
                                    @error('email')
                                    <span class="error invalid-feedback" style="display: block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="phone">{{ __('Mobile') }}</label>
                                    (
                                    <span class="text-danger">*</span>
                                    )
                                    <input
                                        id="phone"
                                        name="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        value="{{ old('phone') ?: (!empty($currentTeacher) ? $currentTeacher->phone : '') }}"
                                    />
                                    @error('phone')
                                    <span class="error invalid-feedback" style="display: block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                                               
                                @include('partials.js.rv_media',['buttonMoreImages'=>[]])
                                @include('partials.editors.summernote',['editors'=>['description'],'buttons'=>[],'realButtons'=>[]])
                                
                            </div>
                        </div>
                    </div>

                    <div class="card-footer clearfix">
                        <div class="float-right">
                            @if (!empty($currentTeacher))
                                <a href="{{ route('course-categories.index') }}" class="btn btn-danger btn-sm">
                                    {{ __('Cancel') }}
                                </a>
                            @endif

                            <button type="submit" class="btn btn-primary btn-sm">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
 
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Danh sách giáo viên') }}</h3>
            
                        {{-- <div class="card-tools">
                            @include('partials.cards.search')
                        </div> --}}
                    </div>
            
                    <div class="card-body p-0">
                        <div class="just-padding">
                            <div class="list-group list-group-root well">
                                <table class="table table-borderless">
                                    <thead>
                                      <tr>
                                        <th scope="col">{{__('Thumbnail')}}</th>
                                        <th scope="col">{{__('Name')}}</th>
                                        <th scope="col">{{__('Mobile')}}</th>
                                        <th scope="col">{{__('Action')}}</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($teachers as $teacher)
                                            <tr>
                                                <td><img src="{{ $teacher->thumbnail }}" width="75px"></td>
                                                <td>{{$teacher->name}}</td>
                                                <td>{{$teacher->phone}}</td>
                                                <td>
                                                    <a href="{{ route('teachers.edit',['teacher'=>$teacher->id]) }}"><button type="button" class="btn btn-warning">Sửa</button></a>
                                                    <a href="javascript:" class="btn btn-danger" onclick="deleteResource('{{ route('teachers.destroy',['teacher'=>$teacher->id]) }}')" > Xóa
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                  </table>
                                {{$teachers->links()}}                                 
                            </div>
                        </div>
                    </div>
            
                </div>
            </div>

        </div>
@endsection
@include('partials.js.rv_media',['buttonMoreImages'=>[]])
@push('scripts')

    <script>
        function expandCollapse(el)
        {
            var parent = $(el).parent();

            parent.collapse('show');

            if (parent.parent().hasClass('collapse')) {
                expandCollapse('#' + parent.attr('id'));
            }
        }

        expandCollapse('.cl-active');

        $('.expaned').on('click', function() {
            $('.fa', this).toggleClass('fa-chevron-right').toggleClass('fa-chevron-down');
        });

        $('.prevent-expand').on('click', function(e) {
            e.preventDefault();
            return false;
        });

        $('.select2bs4').select2({
            theme: 'bootstrap4',
        });  
    </script>

    @include('partials.cards.delete')
@endpush
