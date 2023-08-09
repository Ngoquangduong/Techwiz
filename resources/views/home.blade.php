@extends('layouts.app')

@section('content')
    <div class="col-md-3 my-4 mx-3">
        <div class="accordion text-whitecoffee border-filter" id="filterAccordion">
            <div class="accordion-item ">
                <h2 class="accordion-header text-whitecoffee " id="heading_1">
                    <button class="accordion-button bg-dark-green text-whitecoffee" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse_1" aria-expanded="true">

                        Product Type
                    </button>
                </h2>
                <div id="collapse_1" class="accordion-collapse  collapse show " aria-labelledby="heading_1"
                    data-bs-parent="#filterAccordion">
                    <div class="accordion-body">
                        <form id="filterForm">
                            <!-- ... (các checkbox và nút Apply) ... -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="product_type[]" value="fertilizer"
                                    id="fertilizerCheck">
                                <label class="form-check-label" for="fertilizerCheck">
                                    Fertilizer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="product_type[]" value="tool"
                                    id="toolCheck">
                                <label class="form-check-label" for="toolCheck">
                                    Tool
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="product_type[]" value="plant"
                                    id="plantCheck">
                                <label class="form-check-label" for="plantCheck">
                                    Plant
                                </label>
                            </div>
                            <button id="applyFilter" class="btn btn-primary mt-3">Apply</button>
                        </form>
                        <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- ... (phần mã JavaScript còn lại) ... -->

    <script>
        // ... (các tác vụ JavaScript khác)

        const resetFilterButton = document.getElementById('resetFilter');

        resetFilterButton.addEventListener('click', function() {
            const filterCollapse = new bootstrap.Collapse(filterAccordion);
            filterCollapse.show();
            resetFilter();
        });
    </script>
@endsection
