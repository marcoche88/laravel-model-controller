<div class="card alert-success m-3">
    <div class="card-body">
        <h5 class="card-title">{{ $movie->title }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
        <ul class="card-text">
            <li>Nationality: <span class="text-uppercase">{{ $movie->nationality }}</span></li>
            <li>Date: <span class="text-uppercase">{{ $movie->date }}</span></li>
            <li>Vote: <span class="text-uppercase">{{ $movie->vote }}</span></li>
        </ul>
    </div>
</div> 