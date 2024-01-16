<div>
    <div class="row ms-1">
        <div class="col mt-5 bg-white shadow-sm p-4 rounded">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h2 class="fw-bold mb-3">Privacy Policy Management</h2>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#editPrivacyPolicyModal">
                    <i class="bi bi-pencil-square"></i>
                    Edit Privacy Policy
                </button>
            </div>
            <div class="row">
                <div class="col-10 p-2 rounded shadow-sm m-auto">
                    <p><strong>Privacy Policy for Nibras Prokashon</strong></p>
                    <p>Last updated: January 12, 2024</p>
                    <p>
                        This privacy policy describes our policies and procedures
                        for the collection, use, and disclosure of your information
                        when you use the service and tells you about your privacy
                        rights and how the law protects you.
                    </p>
                    <p>
                        We use your personal data just for delivery. We never share
                        your information with a third party. We may share your
                        personal information with service providers to monitor and
                        analyze the use of our service and to contact you. You agree
                        to the collection and use of information in accordance with
                        this privacy policy.
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- Privacy Policy Management Modal Start --}}
    <livewire:admin-panel.privacy-policy.privacy-policy-management />
    {{-- Privacy Policy Management Modal End --}}
</div>
<!-- CK editor script initialize  -->
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create(document.querySelector("#editPrivacyPolicy"))
</script>
<!-- CK editor script end  -->