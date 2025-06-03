@extends('admin.layout.app')

@section('page-content')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">PR Table</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">PR Table</h6>
                    <!-- <p class="text-secondary mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> -->
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>PR Card Title</th>
                                    <th>PR Title</th>
                                    <th>Description</th>
                                    <th>image</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prs as $pr)
                                <tr>
                                    <td>{{ $pr->id }}</td>
                                    <td>{{ $pr->card_title }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($pr->pr_title, 40, '...') }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($pr->description, 50, '...') }}</td>
                                    <td>
                                        @if ($pr->img)
                                        <img src="{{ url('storage/app/public/' . $pr->img) }}" width="50" height="50" style="object-fit: cover; margin-right: 5px;" alt="pr Image">
                                        @endif
                                       

                                    </td>
                                    <td>{{ $pr->post_date }}</td>
                                    <td>
                                        <!-- Edit Icon -->
                                        <a href="{{ route('prs.edit', $pr->id) }}" style="margin-right: 8px;">
                                            <i data-feather="edit"></i>
                                        </a>

                                        <!-- Delete Icon as a Form -->
                                        <form action="{{ route('prs.destroy', $pr->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <a href="#" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this pr?')) this.closest('form').submit();">
                                                <i data-feather="trash-2" style="color: red;"></i>
                                            </a>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection