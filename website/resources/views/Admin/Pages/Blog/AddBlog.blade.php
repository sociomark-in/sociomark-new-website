@extends('admin.layout.app')

@section('page-content')
<div class="page-content">

    <!-- <h6 class="card-title">Add Blog</h6> -->
    {{-- Success Message --}}
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    {{-- Validation Errors --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @php $locale = app()->getLocale(); @endphp

        <div class="row">
            <!-- Main Form (Left Side) -->
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add Blog</h6>

                        <!-- Card Titles -->
                        <div class="mb-3">
                            <label>Card Name (English)</label>
                            <input type="text" name="card_title[en]" class="form-control" required value="{{ old('card_title.en') }}">
                        </div>

                        <div class="mb-3">
                            <label>Card Name (Arabic)</label>
                            <input type="text" name="card_title[ar]" class="form-control" required value="{{ old('card_title.ar') }}">
                        </div>

                        <!-- Blog Names -->
                        <div class="mb-3">
                            <label>Blog Name (English)</label>
                            <input type="text" name="blog_name[en]" class="form-control" required value="{{ old('blog_name.en') }}">
                        </div>

                        <div class="mb-3">
                            <label>Blog Name (Arabic)</label>
                            <input type="text" name="blog_name[ar]" class="form-control" value="{{ old('blog_name.ar') }}">
                        </div>

                        <!-- Contents -->
                        <div class="mb-3">
                            <label class="form-label">Content (English)</label>
                            <textarea id="summernote_en" name="content[en]">{{ old('content.en') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Content (Arabic)</label>
                            <textarea id="summernote_ar" name="content[ar]">{{ old('content.ar') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Blog Options</h6>

                        <!-- Status -->
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="status" id="active" value="active" {{ old('status') == 'active' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="active">Active</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="status" id="inactive" value="inactive" {{ old('status') == 'inactive' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inactive">Inactive</label>
                                </div>
                            </div>
                        </div>

                        <!-- Tags -->
                        <div class="mb-3">
                            <label>Tags</label>
                            <select name="tags[]" class="form-control select2" multiple>
                                @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}" {{ collect(old('tags'))->contains($tag->id) ? 'selected' : '' }}>{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Categories -->
                        <div class="mb-3">
                            <label>Categories</label>
                            <select name="categories[]" class="form-control select2" multiple>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ collect(old('categories'))->contains($category->id) ? 'selected' : '' }}>
                                    {{ $category->category_name[$locale] ?? $category->category_name['en'] }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Display on Home -->
                        <div class="mb-3">
                            <label class="form-label">Display On Home</label>
                            <div class="form-check">
                                <input type="checkbox" name="display_on_home" class="form-check-input" id="display_on_home" value="1" {{ old('display_on_home') ? 'checked' : '' }}>
                                <label class="form-check-label" for="display_on_home">Display on Home</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SEO + Image Section -->
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">SEO & Slug</h6>

                        <div class="mb-3">
                            <label class="form-label">SEO Meta Title</label>
                            <input type="text" class="form-control" name="meta_title" id="title" onkeyup="updateSlug()" value="{{ old('meta_title') }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SEO Meta Description</label>
                            <input type="text" class="form-control" name="meta_description" value="{{ old('meta_description') }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SEO Meta Keywords</label>
                            <input type="text" class="form-control" name="meta_keywords" value="{{ old('meta_keywords') }}">
                        </div>

                        <div class="mb-3">
                            <label>Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}">
                        </div>

                        <div class="mb-3">
                            <label>Canonical URL</label>
                            <input type="url" name="canonicals" id="canonicals" class="form-control" value="{{ old('canonicals') }}">
                        </div>

                        <div class="mb-3">
                            <label>Blog Schema (JSON-LD)</label>
                            <input type="text" name="blog_schema" id="blog_schema" class="form-control" value="{{ old('blog_schema') }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Images</h6>

                        <div class="mb-3">
                            <label class="form-label">Upload Blog Images</label>
                            <input type="file" name="images[]" class="form-control" multiple>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-success">Submit</button>
    </form>

</div>

@push('scripts')
<!-- Load Summernote -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>

<!-- Load Select2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<!-- Dropzone CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css">
<!-- Dropzone JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote_en').summernote({
            height: 200
        });
        $('#summernote_ar').summernote({
            height: 200
        });
    });
</script>

<script>
    // $(document).ready(function() {
    //     $('#summernote').summernote({
    //         height: 100
    //     });

    //     $('.select2').select2({
    //         tags: true,
    //         tokenSeparators: [',']
    //     });
    // });

    $(document).ready(function() {
        $('.select2').select2({
            tags: true,
            tokenSeparators: [',']
        });

        // $('.dropify').dropify(); // Initialize Dropify
    });

    Dropzone.autoDiscover = false;

    new Dropzone("#imageDropzone", {
        paramName: "images[]", // Name of the input field
        maxFilesize: 2, // Max file size in MB
        maxFiles: 5, // Maximum number of images
        acceptedFiles: "image/*",
        addRemoveLinks: true
    });

    // slug
    function slugify(text) {
        return text
            .toString()
            .trim() // Trim leading and trailing whitespace first
            .replace(/^['"]+|['"]+$/g, "") // Trim quotes
            .replace(/,/g, '-') // Replace commas with hyphens
            .toLowerCase()
            .replace(/&/g, "and")
            .replace(/\s+/g, "-") // Replace spaces with hyphens
            .replace(/--+/g, "-") // Remove multiple hyphens
            .replace(/^-+/, "") // Remove leading hyphens
            .replace(/-+$/, ""); // Remove trailing hyphens
    }

    function updateSlug() {
        let categoryName = document.getElementById("title").value;
        let slugField = document.getElementById("slug");

        // If user hasn't manually changed the slug, auto-update it
        if (!slugField.dataset.edited) {
            slugField.value = slugify(categoryName);
        }
    }

    document.getElementById("slug").addEventListener("input", function() {
        // Mark slug field as manually edited when the user types in it
        this.dataset.edited = true;
    });
</script>
<!-- <script>
function updateSlug() {
    let title = document.getElementById('title').value;
    let slug = title.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)+/g, '');
    document.getElementById('slug').value = slug;
}
</script> -->

@endpush
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

@endsection