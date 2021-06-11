<div>
    <span class="rating p-t-10">
        <i class="fas fa-star" @if(round($attributes->get('rating'), 0) >= 1) style="color: gold" @endif"></i>
        <i class="fas fa-star" @if(round($attributes->get('rating'), 0) >= 2) style="color: gold" @endif"></i>
        <i class="fas fa-star" @if(round($attributes->get('rating'), 0) >= 3) style="color: gold" @endif"></i>
        <i class="fas fa-star" @if(round($attributes->get('rating'), 0) >= 4) style="color: gold" @endif"></i>
        <i class="fas fa-star" @if(round($attributes->get('rating'), 0) >= 5) style="color: gold" @endif"></i>
    </span>
</div>
