<footer class="border-top w-100 pt-4 mt-7">
    <div class="d-flex justify-content-md-between">
        <p class="fs-6 text-gray-600">Developed by: Raphael Plaza & Michael Ramos © 2024
        </p>
        @if(config('app.footer_version_show'))
            <span class="text-muted align-content-end">{{ version() }}</span>
        @endif
    </div>
</footer>