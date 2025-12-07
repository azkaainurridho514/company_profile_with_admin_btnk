@extends('layouts.dashboard-main')
@section('main')
<div class="card">
    <div class="card-header">
        <strong>Event</strong>
    </div>
    <form action="{{ isset($event) ? route('admin.event.update', $event->id) : route('admin.event.store') }}"  method="POST" enctype="multipart/form-data" class="form-horizontal">
        <div class="card-body card-block">
            @csrf
            @if(isset($event))
                @method('PUT')
            @endif
            <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">Title</label></div>
                <div class="col-12 col-md-9">
                    <input type="text" name="name" class="form-control" value="{{ old('name', isset($event) ? $event->name : '') }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">Deskripsi</label></div>
                <div class="col-12 col-md-9">
                    <textarea name="desc" class="form-control" rows="4" placeholder="Masukkan teks di sini"> {{ old('desc', isset($event) ? $event->desc : '') }}</textarea>
                    @error('desc')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">Tanggal</label></div>
                <div class="col-12 col-md-9">
                    <input type="datetime-local" name="date" class="form-control" value="{{ old('date', isset($event) ? $event->date : '') }}">
                    @error('date')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">Foto</label></div>
                <div class="col-12 col-md-9">
                    <input type="file" name="photo" class="form-control">
                    @error('photo')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                    @if (isset($event) && $event->photo)
                        <div class="mt-5" id="preview-wrapper">
                            <img src="{{ asset('storage/'.$event->photo) }}" alt="Preview" class="img-thumbnail">
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
    </form>
</div>
@endsection