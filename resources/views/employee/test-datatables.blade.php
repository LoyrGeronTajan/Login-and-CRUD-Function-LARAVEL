@extends('layouts.main')

@section('title', 'Test | Datatabales')

@section('content')
  <div class="container py-5">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Position</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>ID-000001</td>
            <td>Sample Name</td>
            <td>Sample Address</td>
            <td>Sample Email</td>
            <td>Sample Position</td>
            <td>
              <button class="btn">
                <i class="fa-solid fa-trash"></i>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection