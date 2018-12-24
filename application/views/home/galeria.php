<style>
    .galeri{
        display: block;
        width: 100%;
        height: 200px;
        background-image: url('https://placeholdit.imgix.net/~text?txtsize=33&txt=350×150&w=350&h=150');
        background-position: center;
        background-repeat: non-repeat;
        background-size: cover;
    }
</style>
<div class="col-12">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350×150&w=350&h=150" alt="..." class="galeri">
            </div>
            <div class="carousel-item">
                <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350×150&w=350&h=150" alt="..." class="galeri">
            </div>
            <div class="carousel-item">
                <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350×150&w=350&h=150" alt="..." class="galeri">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>