<div>
    <div class="row ms-1">
        <div class="col mt-5 bg-white shadow-sm p-4 rounded">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h2 class="fw-bold mb-3">Terms & Conditions Management</h2>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#editTermsConditionsModal">
                    <i class="bi bi-pencil-square"></i>
                    Edit Terms & Conditions
                </button>
            </div>
            <div class="row">
                <div class="col-10 p-2 rounded shadow-sm m-auto">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Rerum natus corporis esse sit voluptatum illo aliquid
                        provident est atque dolorem.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Aut, sed. Maiores, excepturi rem! Quos sequi minus hic
                        labore porro temporibus voluptates dolore dolorum, maiores
                        harum quas omnis id voluptatibus fugit!
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- Terms & Conditions Management Modal Start --}}
    <livewire:admin-panel.terms-conditions.terms-conditions-management />
    {{-- Terms & Conditions Policy Management Modal End --}}
</div>
