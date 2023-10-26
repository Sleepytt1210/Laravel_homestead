<style>
    .left-card > h5 {
        font-size: : 1.15rem !important;
        font-weight: 600;
    }
    .left-card > p {
        font-size: 14px;
        margin-top: 20px;
    }
    .left-card > button {
        color:#1a3766;
        border-color: #1a3766; 
    }
    .left-card > button:hover {
        color: white;
        background: #1a3766;
    }
</style>
<div class="card">
    <img src="{{ $imgUrl }}" class="card-img-top" alt="">
    <div class="card-body left-card">
        <h5 class="card-title text-center">{{ $title }}</h5>
        <p class="card-text">{{ $content }}</p>
        <hr>
        <button class="btn btn-outline-primary btn-sm w-100">Blog Count: {{ $count }}</button>
    </div>
</div>