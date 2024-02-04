<div>
    <div class="row ms-1 justify-content-start mt-5 text-center">
        <div class="col-md-3 bg-white shadow-sm p-4 rounded m-2">
            <strong class="d-block">TOTAL CATEGORY</strong>
            <span>{{ $categories }}</span>
        </div>
        <div class="col-md-3 bg-white shadow-sm p-4 rounded m-2">
            <strong class="d-block">TOTAL PUBLISHED NEWS</strong>
            <span>{{ $published_news }}</span>
        </div>
        <div class="col-md-3 bg-white shadow-sm p-4 rounded m-2">
            <strong class="d-block">TOTAL UN-PUBLISHED NEWS</strong>
            <span>{{ $un_published_news }}</span>
        </div>
        <div class="col-md-3 bg-white shadow-sm p-4 rounded m-2">
            <strong class="d-block">TOTAL UN-READED MESSAGE</strong>
            <span>{{ $messages }}</span>
        </div>
    </div>
</div>
