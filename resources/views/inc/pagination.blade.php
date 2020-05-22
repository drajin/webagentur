<ul class="pagination justify-content-center mb-4">
    <li class="page-item">
        @if(isset($value))
            {{ $value->links() }}
        @endif

    </li>
</ul>
