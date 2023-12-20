@extends('layouts.app')
@section('page-title', 'ویرایش ' . $article->title)
@section('title', 'ویرایش ' . $article->title)

@section('css')
    <!-- Datepicker -->
    <link rel="stylesheet" href="{{ asset('vendors/datepicker-jalali/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/datepicker/daterangepicker.css') }}">
@endsection

@section('js')
    <!-- CKEditor -->
    <script src="{{ asset('vendors/ckeditor/ckeditor.js') }}"></script>
    <!-- Datepicker -->
    <script src="{{ asset('vendors/datepicker-jalali/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('vendors/datepicker-jalali/bootstrap-datepicker.fa.min.js') }}"></script>
    <script src="{{ asset('vendors/datepicker/daterangepicker.js') }}"></script>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">مدیریت مقاله</li>
    <li class="breadcrumb-item active">ویرایش {{ $article->title }}</li>
@endsection

@section('content')
    <div class="row">
        <form action="{{ route('articles.store') }}" class="d-contents" method="POST">
            @csrf
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="title">عنوان</label>
                                <input type="text" class="form-control text-left" id="title" placeholder="عنوان"
                                    dir="rtl" name="title" autocomplete="off"
                                    value="{{ old('title', $article->title) }}">
                            </div>
                            <div class="form-group col-12">
                                <label for="content">محتوا</label>
                                <textarea class="form-control" name="content" id="content">{{ old('content', $article->content) }}</textarea>
                            </div>
                            <div class="form-group col-12">
                                <label for="published_at">تاریخ</label>
                                <input type="text" class="form-control text-left" id="published_at" dir="rtl"
                                    name="published_at" autocomplete="off"
                                    value="{{ old('published_at', $article->published_at) }}">
                            </div>
                            <div class="form-group col-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="published"
                                        value="{{ $article->published ? '1' : '0' }}"
                                        {{ $article->is_inside ? 'checked' : '' }}>
                                    <input type="hidden" name="published" value="{{ $article->published ? '1' : '0' }}">
                                    <label class="form-check-label" for="published">منتشر شده</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-block btn-warning btn-uppercase">
                                    بروزرسانی
                                </button>
                            </div>
                            <div class="col-md-12 m-t-10">
                                <a href="{{ route('articles.index') }}" role="button"
                                    class="btn btn-block btn-light btn-uppercase">بازگشت</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
