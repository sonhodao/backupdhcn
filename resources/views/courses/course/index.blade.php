@extends('layouts.app')
@section('page-title', __('Danh sách khóa học'))

@section('content')
<div class="row">
  <div class="col">
    @if (session('success'))
        <div class="alert alert-success" role="alert">{{session('success')}}</div>
    @endif
    <a href="{{route('courses.create')}}"><div style="float: right"><button type="button" class="btn btn-info">Thêm khóa học</button></div></a>
  </div>
</div>
<div class="row">
    <div class="col">
      <div class="card">  
        <div class="card-body">
          <table class="table"  style="text-align: center">
            <thead>
              <tr>
                <th scope="col">{{__('Thumbnail')}}</th>
                <th scope="col">Tên</th>
                <th scope="col">Giá</th>
                <th scope="col">Tóm tắt</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Giáo viên</th>
                <th scope="col">Danh mục</th>
                <th scope="col">{{__('Action')}}</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($courses as $course)
              <tr>
                <td><img src="{{$course->thumbnail}}" alt="" width="60px" height="50px"></td>
                <td>{{$course->name}}</td>
                <td>{{number_format($course->price,0,"",',')}} VND</td>
                <td>{{$course->excerpt}}</td>
                <td>{{$course->content}}</td>
                <td>{{$course->teacher->name}}</td>
                <td>{{$course->coursecategory->title}}</td>
                <td>                  
                  <a href="{{route('courses.edit', ['course' => $course->id])}}"><button type="button" class="btn btn-warning btn-sm">Sửa</button></a>
                  <a href="javascript:" class="btn btn-danger btn-sm" onclick="deleteResource('{{ route('courses.destroy',['course' => $course->id]) }}')"> Xóa
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
