<section id="{{$modalId}}" class="modal d-none pos-fixed overflow-auto t-0 l-0 w-full h-full">
    <div class="modal-content pos-relative d-flex flex-column ">
        <header class="modal-header d-flex align-flex-start justify-space-between ">
            <h5 class="modal-title">{{$modalTitle}}</h5>
            <button type="button" id="close-modal" class="close-modal-button pointer"
                data-dismiss="{{ $modalId }}"
                aria-label="Close">
                <span aria-hidden="true">
                    <svg focusable="false" class="nav-link-logo" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                    </path>
                                </svg>
                </span>
            </button>
        </header>
        <section class="modal-body" aria-label="modal-body">
            {{$slot}}
        </section>
    </div>
</section>