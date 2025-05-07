@extends('admin.layout.app')
@section("customCSSAndJS")
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


@endsection

@section('page-content')
<div class="page-content">

    <!-- <h6 class="card-title">Add Blog</h6> -->

    <form action="{{ route('storeLead') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add Leads</h6>
                        <p class="text-secondary mb-3">Read the <a href="https://github.com/RobinHerbots/Inputmask" target="_blank"> Official Inputmask Documentation </a>for a full list of instructions and other options.</p>

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" >
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Company Name</label>
                                <input type="text" name="company_name" class="form-control" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" >
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">LinkeDin</label>
                                <input type="text" name="linkedin_url" class="form-control" >
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Website URL</label>
                                <input type="text" name="website_url" class="form-control" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Horizontal Form</h6>

                        <!-- <div class="mb-3">
                            <label>Status</label>
                            <div>
                                <input type="radio" name="status" value="draft" checked> Draft
                                <input type="radio" name="status" value="active"> Active
                                <input type="radio" name="status" value="inactive"> Inactive
                            </div>
                        </div> -->


                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <div>
                                <div class="row">
                                    <div class="form-check col-6">
                                        <input type="radio" class="form-check-input" name="status" id="New" value="New">
                                        <label class="form-check-label" for="New">
                                            New
                                        </label>
                                    </div>
                                    <div class="form-check col-6">
                                        <input type="radio" class="form-check-input" name="status" id="inProgress" value="inProgress">
                                        <label class="form-check-label" for="inProgress">
                                            In Progress
                                        </label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="form-check  col-6">
                                        <input type="radio" class="form-check-input" name="status" id="active" value="active">
                                        <label class="form-check-label" for="active">
                                            Active
                                        </label>
                                    </div>
                                    <div class="form-check  col-6">
                                        <input type="radio" class="form-check-input" name="status" id="done" value="done">
                                        <label class="form-check-label" for="done">
                                            Done
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <!-- <h6 class="card-title">Add Lead</h6> -->
                        <div class="row mb-3">
                            <div class="col">
                                <label>Industry</label>
                                <!-- <input type="text" name="industry" class="form-control" > -->
                                <select class="js-example-basic-single form-select" data-width="100%" name="industry">
                                    <option value="TX">Texas</option>
                                    <option value="NY">New York</option>
                                    <option value="FL">Florida</option>
                                    <option value="KN">Kansas</option>
                                    <option value="HW">Hawaii</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Service</label>
                                <!-- <input type="text" name="service" class="form-control" > -->
                                <select class="js-example-basic-single form-select" data-width="100%" name="service">
                                    <option value="TX">Texas</option>
                                    <option value="NY">New York</option>
                                    <option value="FL">Florida</option>
                                    <option value="KN">Kansas</option>
                                    <option value="HW">Hawaii</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label>Location</label>
                                <input type="text" name="location" class="form-control" >
                            </div>
                            <div class="col-md-6">
                                <label>Source</label>
                                <input type="text" name="source" class="form-control" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <!-- <h6 class="card-title">Inputs</h6> -->

                        <div class="row mb-3">
                            <div class="col">
                                <label for="first_contact_date">First Contact Date</label>
                                <input type="date" name="first_contact_date" id="first_contact_date" class="form-control" >
                            </div>
                            <div class="col-md-6">
                                <label for="previous_contact_date">Previous Contact Date</label>
                                <input type="date" name="previous_contact_date" id="previous_contact_date" class="form-control" >
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label>FollowUp Date</label>
                                <input type="date" name="follow_up_date" id="follow_up_date" class="form-control" >
                            </div>
                            <div class="col-md-6">
                                <label>Assigned To</label>
                                <!-- <input type="text" name="assigned_to" class="form-control" > -->
                                <select class="js-example-basic-single form-select" data-width="100%" name="assigned_to">
                                    <option value="">Choose</option>
                                    <option value="Kunal">Kunal</option>
                                    <option value="sonali">Sonali</option>
                                    <option value="anniruddha">Anniruddha</option>
                                    <option value="hemant">Hemant</option>
                                    <option value="ashu">Ashu</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label>Notes</label>
                                <!-- <input type="text" name="notes" class="form-control" > -->
                                <textarea id="summernote" name="notes"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>

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
        $('#summernote').summernote({
            height: 100
        });

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
@endsection