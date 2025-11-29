@extends('layout')

@section('content')
<div class="sub-page">
    <div class="container text-center">
        <h1 class="fw-bold mb-4">Contact Me</h1>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="glass-card">
                    <form>
                        <input type="text" class="form-control mb-3" placeholder="Nama kamu">
                        <input type="email" class="form-control mb-3" placeholder="Email kamu">
                        <textarea class="form-control mb-3" rows="3" placeholder="Pesan ✨"></textarea>
                        <button class="btn btn-light w-100 fw-bold">Kirim 🚀</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
