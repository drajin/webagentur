<ul class="pagination justify-content-center mb-4">
    <li class="page-item">
        @if(isset($value))
            {{ $value->links() }}
        @endif
    </li>
</ul>



<nav class="blog-pagination justify-content-center d-flex">
    <ul class="pagination">
        <li class="page-item">
            <a href="#" class="page-link" aria-label="Previous">
                <i class="ti-angle-left"></i>
            </a>
        </li>
        <li class="page-item active">
            <a href="#" class="page-link">1</a>
        </li>
        <li class="page-item">
            <a href="#" class="page-link">2</a>
        </li>
        <li class="page-item">
            <a href="#" class="page-link" aria-label="Next">
                <i class="ti-angle-right"></i>
            </a>
        </li>
    </ul>
</nav>
