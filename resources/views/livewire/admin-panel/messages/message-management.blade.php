<div>
    <!-- Detail Message Modal Start -->
    <div class="modal fade" id="detailMessageModal" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        Details Message
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Name : </strong> Rashed alam</p>
                    <p><strong>Email : </strong> user@mail.com</p>
                    <p>
                        <strong>Subject : </strong><br />
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                    <p>
                        <strong>Message : </strong><br />
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae
                        eveniet error nulla facilis in et hic quidem at ad dolorem, iure
                        repudiandae magnam placeat asperiores officiis aliquid, maxime
                        iste neque voluptatibus? Impedit voluptatibus magni amet quis enim
                        consequuntur officia dicta aperiam iure inventore error doloribus
                        quaerat dolore quasi, quia rem!
                    </p>
                    <hr />
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#replyMessageModal">
                            <i class="bi bi-reply"></i>
                            Reply
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#deleteModal">
                            <i class="bi bi-trash"></i>
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Message Modal End -->
    <!-- Reply Message Modal Start -->
    <div class="modal fade" id="replyMessageModal" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        Message Reply
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group mb-3">
                            <label for="from" class="fw-bold mb-2">From :</label>
                            <input type="email" class="form-control border" id="from" required
                                value="company@mail.com" maxlength="40" readonly />
                        </div>
                        <div class="form-group mb-3">
                            <label for="from" class="fw-bold mb-2">To :</label>
                            <input type="email" class="form-control border" id="from" required
                                value="user@mail.com" maxlength="40" readonly />
                        </div>
                        <div class="form-group mb-3">
                            <label for="subject" class="fw-bold mb-2">Sebject :</label>
                            <textarea class="form-control" id="subject" cols="30" rows="2"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="message" class="fw-bold mb-2">Message :</label>
                            <textarea class="form-control" id="message" cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Send
                                <i class="bi bi-send"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Reply Message Modal End -->
    <!-- Delete Warning Modal Start -->
    <div class="modal fade" id="deleteModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <strong>Are You Sure You Wan't to Delete ?</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                        Yes
                    </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        No
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Warning Modal End -->
</div>