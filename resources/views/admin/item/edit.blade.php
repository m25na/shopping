@php
$title = '商品編集';
@endphp
@extends('layouts.admin')
@section('content')
<section>
    <form action="{{ route('admin.item.update', ['id' => 1]) }}" method="post">
        @csrf
        <button class="btn btn-primary">{{ __('Update') }}</button>
        <a href="{{ route('admin.item.index') }}">{{ __('Back') }}</a>
    </form>
</section>
@endsection