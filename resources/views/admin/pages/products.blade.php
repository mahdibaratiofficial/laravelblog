@extends('admin.layouts.master')
@section('title','Products')
@section('Content')
<div class="main-panel">
    <table class="table">
        <th>
            <tr>
                <td>ID</td>
                <td>Peoduct</td>
                <td>Count</td>
                <td>DO</td>
            </tr>
        </th>
        <tbody>
            @foreach ($products as $product )
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->product }}</td>
                <td>{{ $product->count }}</td>
                <td>
                    <div class="row">
                        <form action="/admin/delete/{{ $product->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete!">
                        </form>
                      <a href="/admin/edit/{{ $product->slug }}" class="btn btn-info">Edit</a>
                    </div>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection