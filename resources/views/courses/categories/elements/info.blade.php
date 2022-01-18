<div class="form-group">
    <label for="title">{{ __('Title') }}</label>
    <span class="text-danger">(*)</span>
    <input
        id="title" type="text" name="title" class="form-control @error('title') is-invalid @enderror"
        value="{{ old('title') ?: (!empty($currentCategory) ? $currentCategory->title : '') }}" required
    />

    @error('title')
    <span class="error invalid-feedback" style="display: block" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="slug">{{ __('Slug') }}</label>
    (
    <span class="text-danger">*</span>
    )
    <input
        id="slug"
        name="slug"
        class="form-control @error('slug') is-invalid @enderror"
        value="{{ old('slug') ?: (!empty($currentCategory) ? $currentCategory->slug : '') }}"
    />
    @error('slug')
    <span class="error invalid-feedback" style="display: block" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="parent_id">{{ __('Parent') }}</label>
    <select id="parent_id" name="parent_id" class="form-control select2bs4 @error('parent_id') is-invalid @enderror">
        <option value="">{{ __('No parent') }}</option>
        @include('courses.categories.elements.option', ['selected' => (old('parent_id'))?:(!empty($currentCategory) ?$currentCategory->parent_id : null)]))
    </select>

    @error('parent_id')
    <span class="error invalid-feedback" style="display: block" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>


@include('partials.forms.slug', [
    'fromElement' => '#title',
    'toElement' => '#slug',
])
@include('partials.js.rv_media',['buttonMoreImages'=>[]])
@include('partials.editors.summernote',['editors'=>['description'],'buttons'=>[],'realButtons'=>[]])
