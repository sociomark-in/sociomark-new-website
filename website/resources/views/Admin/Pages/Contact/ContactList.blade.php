@extends('admin.layout.app')

@section('page-content')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog Table</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Blog Table</h6>
                    <!-- <p class="text-secondary mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> -->
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Service</th>
                                    <th>Budget</th>
                                    <th>About Us</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contactLists as $contactList)
                                <tr>
                                    <td>{{ $contactList->id }}</td>
                                    <td>{{ $contactList->name }}</td>
                                   
                                    <td>{{ $contactList->email }}</td>
                                    <td>{{ $contactList->phone }}</td>
                                    <td>{{ $contactList->service }}</td>
                                    <td>{{ $contactList->budget }}</td>
                                    <td>{{ $contactList->aboutUs }}</td>
                                    <td>{{ $contactList->messageforus }}</td>
                                    <td>{{ $contactList->created_at->format('Y-m-d') }}</td>
                                  

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